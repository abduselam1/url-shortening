<?php

namespace App\Console\Commands;

use App\Models\Url;
use DateTime;
use Illuminate\Console\Command;

class DeleteOldUrls extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'url:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Artisan Command to delete old';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $a = new DateTime();
        // $a->date
        $urls = Url::where('last_accessed_at','<',now()->addDay(-30))->get();
        foreach ($urls as $url) {
            $url->delete();
        }
    }
}
