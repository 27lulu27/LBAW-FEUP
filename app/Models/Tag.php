<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tag';

    protected $primaryKey = 'tag_id';
    
    protected $fillable = [
        'name',
    ];

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_tags', 'tag', 'post');
    }

}
