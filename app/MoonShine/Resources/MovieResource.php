<?php

namespace App\MoonShine\Resources;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;

class MovieResource extends Resource
{
    public static string $model = Movie::class;

    public static string $title = 'Movies';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'name')
                ->required(),
            Text::make('Описание', 'description')
                ->required(),
            Image::make('Изображение', 'img')
                ->disk('public')
                ->dir('movies')
                ->allowedExtensions(['jpg', 'jpeg', 'png'])
                ->when(request()->routeIs('*.create'),
                    static fn(Image $field) => $field->required(),
                    static fn(Image $field) => $field->nullable(),
                )
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
