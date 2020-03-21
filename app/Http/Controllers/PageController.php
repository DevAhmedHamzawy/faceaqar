<?php

namespace App\Http\Controllers;

use App\Page;
use App\SeoLinks\SeoLinksIndex;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(Page $page)
    {
        $settings = \Config::get('settings');
        SeoLinksIndex::getLinks($page->title, str_limit($page->body, 50), url()->current(), env('APP_URL'), $settings->twitter, $settings->logo1);
        return view('main.pages.show', ['page' => $page]);
    }
}
