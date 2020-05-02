<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

/**
 * App\Product
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $details
 * @property int $price
 * @property string $description
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Category[] $categories
 * @property-read int|null $categories_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product mightAlsoLike()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $unit
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUnit($value)
 * @property int|null $type 1=Buy,2=Sell
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereType($value)
 */
class Product extends Model
{
    //

    protected $fillable =
        [
          'name',
          'slug',
          'details',
          'price',
            'production_cost',
          'description',
          'image',
          'unit',
          'type',

        ];



    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }



    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
}
