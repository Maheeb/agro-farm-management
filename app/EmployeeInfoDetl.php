<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\EmployeeInfoDetl
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfoDetl newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfoDetl newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfoDetl query()
 * @mixin \Eloquent
 */
class EmployeeInfoDetl extends Model
{
    //
    protected $table='employee_info_detl';
    protected $fillable=[
        'emp_blood_group',
        'emp_nid',
        'empinfoId'

    ];

}
