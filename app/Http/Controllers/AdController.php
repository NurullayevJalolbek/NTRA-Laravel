<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Status;
use Illuminate\Http\Request;
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
        dd($request->all());
        $ad = Ad::query()->create([
            'title' => $request->input("title"),
            'description' => $request->input("description"),
            'user_id'=> auth()->id(),
            'status_id' => Status::ACTIVE,
            'address' => $request->input("address"),
            'branch_id' => $request->input("branch_id"),
            'price' => $request->input("price"),
            'rooms' => $request->input("rooms"),


        ]);
        dd($ad);

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
