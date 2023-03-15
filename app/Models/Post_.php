<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Magicoco",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maiores ipsum error quae, 
            incidunt molestiae eius eligendi! Alias rem modi quo id necessitatibus, hic nulla dignissimos 
            velit sit error ipsam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Coconut",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maiores ipsum error quae, 
            incidunt molestiae eius eligendi! Alias rem modi quo id necessitatibus, hic nulla dignissimos 
            velit sit error ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maiores ipsum error quae, 
            incidunt molestiae eius eligendi! Alias rem modi quo id necessitatibus, hic nulla dignissimos 
            velit sit error ipsam!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
