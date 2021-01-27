<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Fbuy
 *
 * @property int $id
 * @property string $image
 * @property string $product_title
 * @property string $product_info
 * @property int $price
 * @property string $category_name
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fbuy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fbuy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fbuy query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fbuy whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fbuy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fbuy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fbuy whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fbuy wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fbuy whereProductInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fbuy whereProductTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fbuy whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Fbuy extends Model
{
    //
    protected $table='featured_buy';

    protected $fillable =['product_title','product_info','image','price','category_name','created_at','updated_at'];
}
