<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public static function create(array $properties)
    {
        $new_category = new Category;
        foreach ($properties as $property => $value)
        {
            $new_category->$property = $value;
        }
        return $new_category;
    }

}
