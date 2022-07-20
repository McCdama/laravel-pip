<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;

class QuoteController extends BaseController
{
    public function showQuote()
    {
        return view('quote', [
            'queryList' => $this->getQuote()
        ]);
    }

    public function getQuote()
    {
        Artisan::call("inspire");
        return Artisan::output("inspire");
    }
}
