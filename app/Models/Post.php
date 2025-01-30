<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'title',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'uid', 'id')->withDefault([
            'name' => 'Gueast Author',
        ]);
    }

    public function tags(){
        // pivot table name basiclly start with name conventional of both table name
        // in this case post_tag is pivot table, third paramiter and the four paramiter is the column of pivot table
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }
}
