<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CategoryProduct
 *
 * @property int $id
 * @property int|null $product_id
 * @property int|null $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryProduct whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CategoryProduct extends Model
{
    //
    protected $table = 'category_product';

    protected $fillable = ['product_id', 'category_id'];
}
