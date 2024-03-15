<?php

namespace App\Http\Controllers\GN24;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    /**
     * display news view and news records
     *
     * @return View
     */
    public function index(): View
    {
        return view('gn24-v2.news.index', [
            'guide_posts' => Post::where('is_published', '1')->where('post_type', 'tin_huong_dan')->paginate(5),
            'posts' => Post::where('is_published', '1')->where('post_type', 'tin_thuong')->inRandomOrder()->limit(5)
                ->get(),
        ]);
    }
}
