<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Setiawan",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam rerum dignissimos quas possimus inventore. Dolor voluptate, totam provident debitis placeat et, omnis sunt neque rerum odit labore dolores eius ullam, reprehenderit aliquid hic adipisci dolorum! Ipsam deleniti dolores quidem ducimus temporibus, veniam quis voluptatum nihil enim similique est praesentium facilis non possimus aspernatur architecto nulla culpa quod exercitationem ratione porro. Animi incidunt veritatis impedit possimus deserunt quidem. Molestias debitis officia provident nihil deserunt aliquid cupiditate ratione? Enim alias adipisci suscipit?",
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Setiawan Jodi",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam rerum dignissimos quas possimus inventore. Dolor voluptate, totam provident debitis placeat et, omnis sunt neque rerum odit labore dolores eius ullam, reprehenderit aliquid hic adipisci dolorum! Ipsam deleniti dolores quidem ducimus temporibus, veniam quis voluptatum nihil enim similique est praesentium facilis non possimus aspernatur architecto nulla culpa quod exercitationem ratione porro. Animi incidunt veritatis impedit possimus deserunt quidem. Molestias debitis officia provident nihil deserunt aliquid cupiditate ratione? Enim alias adipisci suscipit?",
        ],
    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach($posts as $p) {
            if($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
