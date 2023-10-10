<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertamaa",
            "slug" => "judul-post-pertama",
            "author" => "Isnanisa",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, porro quisquam excepturi corporis a laborum dicta totam nisi repellendus, quam magnam tenetur quaerat, non mollitia aliquid suscipit libero blanditiis itaque? Cum ipsa sed enim dignissimos, officiis nostrum ea, tenetur quae rem magnam numquam illo aspernatur nemo quidem dolorem consequatur sit quasi alias ut atque delectus soluta."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "IR",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus eum corporis molestias perferendis officia aut cumque cupiditate, excepturi voluptatum ut tempora suscipit voluptatem facere assumenda porro mollitia. Cum eos debitis earum exercitationem porro cupiditate accusamus animi a accusantium libero non fuga sit nostrum est, minus rerum cumque atque doloremque eaque? Hic at nam totam. Sint non nostrum dolor temporibus fugit vero consectetur. Vel repellat voluptatem voluptate eaque officia laborum magni."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
