<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Ad;
use App\Models\Bookmarked;

class DisplayAdImage
{
    public function __invoke(Ad|bookmarked|null $ad = null): string
    {
        // Agar $ad null bo'lsa yoki uning images kolleksiyasi mavjud bo'lmasa
        if ($ad === null || $ad->images === null) {
            return "/assets/images/ads/GZdB6jMF5x2vzevJXSLs7bvQ80uiiPeaOzgPJfyD.jpg";
        }

        $image = $ad->images->first()?->name;

        if ($image) {
            return "/app/public/$image";
        }

        return "/assets/images/ads/GZdB6jMF5x2vzevJXSLs7bvQ80uiiPeaOzgPJfyD.jpg";
    }


}
