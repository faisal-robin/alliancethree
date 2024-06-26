<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
    *   The table associated with the model.
    *
    *   @var string
    */
    protected $table = 'brands';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['brand_name', 'brand_image'];

    public function categories() {
        return $this->hasMany(Category::class, 'brand_id','id');
    }

}
