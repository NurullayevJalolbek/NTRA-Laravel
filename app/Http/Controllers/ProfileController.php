<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use Hash;
use http\Env\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\View\View;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */


    public function lockScreen(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8'],
        ]);

        if (Hash::check($request->password, Auth::user()->password)) {
            return redirect()->route('home');
        }else{
            return redirect()->back();
        }

    }

    public function edit(): View
    {
        return view('ads.profile-setting', ['user' => Auth::user()]);
    }

    public function profile(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $user = Auth::user();
        return view('ads.profile', ['user' => $user]);
    }


    /**
     * Update the user's profile information.
     */
    public function update(Request $request): \Illuminate\Http\JsonResponse
    {
//        dump($request->all());
        $validatedData = [];

        if ($request->has('first_name')) {
            $request->validate([
                'first_name' => ['required', 'string', 'max:255'],
            ]);
            $validatedData['first_name'] = $request->first_name;
        }

        if ($request->has('last_name')) {
            $request->validate([
                'last_name' => ['required', 'string', 'max:255'],
            ]);
            $validatedData['last_name'] = $request->last_name;
        }


        if ($request->has('email')) {
            $validatedData = $request->validate([
                'email' => [
                    'required',
                    'string',
                    'lowercase',
                    'email',
                    'max:255',
                ],
            ]);

            if (User::where('email', $request->email)->exists()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Bu email manzili allaqachon ro\'yxatdan o\'tgan.'
                ]);

            }

            $validatedData['email'] = $request->email;
        }

        if (!empty($validatedData)) {
            Auth::user()->update($validatedData);
        }





        if ($request->has('number')) {
            $request->validate([
                'number' => ['required', 'digits:9'],
            ]);
            $validatedData['phone'] = $request->number;
        }
        if (!empty($validatedData)) {
            Auth::user()->update($validatedData);
        }

        if ($request->has('old_password') && $request->has('new_password')) {
            $validatedData = $request->validate([
                'old_password' => 'required|current_password',
                'new_password' => 'required|min:8',
            ]);

            Auth::user()->update([
                'password' => Hash::make($validatedData['new_password']),
            ]);

            return response()->json(['status' => 'success', 'message' => 'Profile updated successfully.']);

        }


        if (!empty($validatedData)) {
            Auth::user()->update($validatedData);
        }

        return response()->json(['status' => 'success', 'message' => 'Profile updated successfully.']);
    }


    /**
     * Delete the user's account.
     */
    public function destroy(): RedirectResponse
    {
        Auth::user()->delete();
        Auth::logout();
        return redirect()->route('home');
    }
}
