<?php

namespace App\Models;
use App\Http\Controllers\CategoryController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category_name','fname','lname'];

}
