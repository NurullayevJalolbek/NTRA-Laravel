<?php

namespace App\Actions;

use App\Models\Ad;

class GetAds
{
    public function __invoke()
    {
        return view("home", ['ads' => Ad::all()]);
    }


}
