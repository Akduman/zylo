<?php

namespace zylo\Pattern\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $fillable=['title','slug','detail'];
    public $timestamps = false;
}
