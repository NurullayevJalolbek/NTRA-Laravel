<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Faker\Provider\Text;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ad;

use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Ad>
 */
class AdResource extends ModelResource
{
    protected string $model = Ad::class;

    protected string $title = "E'lonlar";

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Textarea::make('Sarlavha', 'title'),
                Textarea::make('Tarif', 'description'),
                Textarea::make("Manzil",'address'),
                Textarea::make("xonalar",'rooms'),
                Textarea::make("Narxi",'price'),


            ]),
        ];

    }

    /**
     * @param Ad $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
