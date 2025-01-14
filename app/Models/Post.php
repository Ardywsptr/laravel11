<?php 

namespace App\Models;

use Illuminate\Support\Arr;

// NOTED: MEMBUAT CLASS DENGAN STATIC METHOD UNTUK DATA POST (AGAR TIDAK REDUNDANT)
class Post{
    public static function all(){
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'John Doe',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quam temporibus, veritatis ipsam aliquam quae sint ducimus iure est ipsa impedit dolorum tenetur neque numquam nisi quas pariatur rerum magnam quaerat vel beatae hic nemo corrupti non? Minima temporibus sit voluptate vel aut ullam similique, quas reprehenderit! Debitis, quam asperiores. Eligendi in, ad molestias adipisci pariatur iste perferendis veniam culpa deleniti eum voluptatibus cumque? Nulla, dolorem nam optio error vero ullam maxime, laudantium id amet hic nihil quibusdam qui rerum quae molestiae. Ad quidem minus nisi iusto vero et aliquid ab omnis consequatur illo temporibus excepturi, modi animi molestias dolore.'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Jane Doe',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam obcaecati tenetur dignissimos commodi voluptatem dolores aperiam optio quod adipisci magni eligendi cum labore nulla, fugit repudiandae quis ratione, sequi voluptatibus eos cupiditate! Officiis recusandae accusantium a cumque odio, eum voluptatibus harum illum modi dolores voluptates dolorum vel! Vero veritatis perferendis eos eligendi facere voluptate ducimus adipisci! Error excepturi incidunt consectetur praesentium ad. Dolorum totam veniam fugit ducimus nihil magni ad voluptates, consequuntur sit commodi similique nesciunt tempora, velit quam. Sint provident facilis quidem ipsum tempora ab quod veritatis, numquam odit! Molestiae perferendis dignissimos commodi aliquam impedit non rem dolorem aliquid!'
            ],
        ];
    }

    public static function find($slug){

      // MENGGUNAKAN CALLBACK UNTUK MENCARI DATA POST BERDASARKAN SLUG
      // return Arr::first(static::all(), function($post) use($slug){
      //   return $post['slug'] == $slug;
      // });

      // MENGGUNAKAN ARROW FUNCTION UNTUK MENCARI DATA POST BERDASARKAN SLUG
      return Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
    }
}

?>