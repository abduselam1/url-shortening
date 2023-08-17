<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UrlController extends Controller
{
    public function redirect(Url $url)
    {
        $url->increment('views');
        $url->update([
            'last_accessed_at' => now()
        ]);
        
        return Redirect::to($url->destination);
        
    }

    public function index(Request $request)
    {
        $urls = Url::where('user_id',auth()->id())->get();

        return response($urls);
    }

    public function store(Request $request)
    {

        $request->validate([
            'destination' => 'required|url',
            'expiration_date' => 'sometimes'
        ]);

        $url = Url::create([
            'destination' => $request->destination,
            'slug' => $this->generateRandomString(),
            'expiration_date' => $request->expiration_date,
            'user_id' => auth()->id()
        ]);

        return $url;
    }

    public function generateRandomString()
    {
        $slug = '';
        
        // At some point one slug will have the same value so to manage that
        // we iterate till we find a new string
        do {
            $slug = Str::random(5);
            $url = Url::where('slug', $slug)->first();
        } while ($url);

        return $slug;
    }

    public function destroy(Url $url)
    {
        if($url->user_id != auth()->id()){
            return abort(402);
        }
        $url->delete();
        return response(true);
    }



}
