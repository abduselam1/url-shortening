<?php

namespace App\Filament\Widgets;

use App\Models\Url;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverView extends BaseWidget
{
    protected function getCards(): array
    {
        $urlCount = Url::where('user_id',auth()->id())->count();
        $expiredCount = Url::where('expiration_date','<',now())->where('user_id',auth()->id())->count();
        $viewCount = Url::where('user_id', auth()->id())->count('views');
        return [

            Card::make('Total Url', $urlCount),
            Card::make('Expired Urls',$expiredCount),
            Card::make('Total view', $viewCount),
            

            
        ];
    }
}
