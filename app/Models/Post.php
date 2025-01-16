<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// NOTED: MEMBUAT CLASS DENGAN STATIC METHOD UNTUK DATA POST (AGAR TIDAK REDUNDANT)
class Post extends Model{

    protected $fillable = ['title', 'author', 'slug', 'body'];

}

?>