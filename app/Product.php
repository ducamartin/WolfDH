<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Size;


class Product extends Model
{
  protected $table = 'products';
  protected $fillable = ['name', 'price', 'description', 'size_id', 'league_id', 'brand_id', 'imgProduct'];

  public function size()
  {
    return $this->belongsTo(Size::class);
  }

  public function sizes()
  {
    return $this->belongsToMany(Size::class);
  }


}
