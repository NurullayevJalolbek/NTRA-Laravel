<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class Bookmarked extends Controller
{

    public function check()
    {
        $userId = \Auth::user()->id;

        $bookmarks = \App\Models\Bookmarked::where('user_id', $userId)->get();

        // Natijani JSON formatida qaytarish
        return response()->json([
            'bookmarks' => $bookmarks
        ]);
    }



    public  function save(Request $request)
    {
        $ad_id = $request->input("ad_id");
        $user_id = $request->input("user_id");


        $save= \App\Models\Bookmarked::create(['ad_id' => $ad_id, 'user_id' => $user_id]);

        if ($save) {
            return response()->json(['success' => true]);
        }

    }

    public  function  delete(Request $request)
    {
        $ad_id = $request->input("ad_id");
        $user_id = $request->input("user_id");
        $delete = \App\Models\Bookmarked::where('ad_id', $ad_id)
            ->where('user_id', $user_id)
            ->delete();

        if ($delete) {
            return response()->json(['success' => true]);
        }
    }
}
