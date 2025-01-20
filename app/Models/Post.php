<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nette\Utils\Arrays;

class Post extends Model{

    use HasFactory;

    protected $fillable = ['title', 'author', 'slug', 'body'];

    //? Eager Loading Otomatis
    protected $with = ['author', 'category'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //? Local Query Scope
    public function scopeFilter(Builder $query, array $filters): void
    {
        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . $filters['search'] . '%');
        }
    }
}

?>