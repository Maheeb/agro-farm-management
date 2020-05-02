<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\BuyOrder
 *
 * @property int $id
 * @property string $product_name
 * @property string|null $customer_name
 * @property string|null $location
 * @property int|null $mobile
 * @property int|null $amount
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $product_id
 * @property int|null $price
 * @property int|null $final_price
 * @property int $purchased_type 1=Buy,2=Sell
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $productOrder
 * @property-read int|null $product_order_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder whereFinalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder wherePurchasedType($value)
 * @property string $status
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuyOrder whereStatus($value)
 */
class BuyOrder extends Model
{
    //

    use Notifiable;

    protected $table = 'buy_order';

    protected $fillable=[
        'product_id',
        'product_name',
        'customer_name',
        'location',
        'mobile',
        'amount',
        'price',
        'purchased_type',
        'final_price',
        'status',
        'created_at',
        'updated_at'

    ];

    public function productOrder(){

        return $this->hasMany(Product::class);
    }


}
