<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\EmployeeNotice
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeNotice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeNotice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeNotice query()
 * @mixin \Eloquent
 */
class EmployeeNotice extends Model
{
    //

        protected $table ='employee_notice';

        protected $fillable =
            [
                'id',
                'title',
                'body',
                'date',
                'created_at',
                'updated_at'

            ];

}
