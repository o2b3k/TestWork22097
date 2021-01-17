<?php

namespace App\Widgets;

use App\Models\Blog;
use Arrilot\Widgets\AbstractWidget;

class AllBlogs extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $blogs = Blog::all();

        return view('widgets.all_blogs', [
            'config' => $this->config,
            'blogs' => $blogs
        ]);
    }
}
