<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'country_name',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'uid', 'id')->withDefault([
            'name' => 'Gueast Author',
        ]);
    }
}
