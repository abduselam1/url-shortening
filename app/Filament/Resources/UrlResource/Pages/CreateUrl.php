<?php

namespace App\Filament\Resources\UrlResource\Pages;

use Hashids\Hashids;
use Filament\Pages\Actions;
use Illuminate\Support\Str;
use App\Filament\Resources\UrlResource;
use App\Models\Url;
use Filament\Resources\Pages\CreateRecord;

class CreateUrl extends CreateRecord
{
    protected static string $resource = UrlResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $slug = '';
        do {
           $slug= Str::random(5);
           $url = Url::where('slug',$slug)->first();
        } while ($url);

        $data['slug'] = $slug;
        
        $data['user_id'] = auth()->id();

        return $data;
    }


    

}
