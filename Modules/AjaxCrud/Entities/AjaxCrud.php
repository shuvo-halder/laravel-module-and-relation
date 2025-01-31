<?php

namespace Modules\AjaxCrud\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AjaxCrud extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'file',
    ];
    
    protected static function newFactory()
    {
        return \Modules\AjaxCrud\Database\factories\AjaxCrudFactory::new();
    }
}
