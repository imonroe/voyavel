<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class PageController extends Controller
{
    public function show(Request $request)
    {
          $slug = $request->path();
          $page = Page::where('slug', $slug)
              ->firstOrFail();
               
          return view('pages.page', [
              'page' => $page,
          ]);
    }
}