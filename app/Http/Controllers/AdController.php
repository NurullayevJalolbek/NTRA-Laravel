<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\AdImage;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\NoReturn;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $ads = Ad::all();
        return view('ads.index', ['ads' => $ads]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    #[NoReturn] public function store(Request $request): void
    {

        $request->validate([
            'title' => 'required | min:5',
            'description' => 'required',
            'image'=>'mimes:jpg,jpeg,png,gif,svg|max:2048',
        ],[
            'title'=>['required' => 'Titlini kiritish majburiy'],
            'description' => ['required' => 'Izoh kiritish majburiy'],
        ]);
        $gender = $request->input("gender");

        $ad = Ad::query()->create([
            'title' => $request->input("title"),
            'description' => $request->input("description"),
            'user_id'=> auth()->id(),
            'status_id' => Status::ACTIVE,
            'address' => $request->input("address"),
            'branch_id' => $request->input("branch_id"),
            'price' => $request->input("price"),
            'rooms' => $request->input("rooms"),
            'gender'=> $gender,


        ]);

        $file = Storage::disk('public')->put('/', $request->image);

        AdImage::query()->create([
            'ad_id' => $ad->id,
            'name' => $file
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $ad = Ad::query()->find($id);
        return view('ads.show', ['ad' => $ad]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
