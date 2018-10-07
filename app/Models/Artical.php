<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    protected $table = 'articals';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description', 'body'];
}
