<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\EmployeeInfo
 *
 * @property int $id
 * @property string|null $emp_name
 * @property string|null $emp_address
 * @property string|null $emp_blood_group
 * @property int|null $emp_nid
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo whereEmpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo whereEmpBloodGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo whereEmpName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo whereEmpNid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $user_id
 * @property string|null $emp_id
 * @property string|null $image
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo whereEmpId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo whereUserId($value)
 * @property string|null $designation
 * @property string|null $joining_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\EmployeeSalary[] $salary
 * @property-read int|null $salary_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeInfo whereJoiningDate($value)
 */
class EmployeeInfo extends Model
{
    //


    protected $table= 'employee_info';

    protected $fillable=[

        'id',
        'user_id',
        'emp_id',
        'emp_name',
        'salary_amount',
        'emp_address',
        'image',
        'emp_blood_group',
        'joining_date',
        'emp_nid',
        'designation'
    ];


    public function user(){

        return $this->belongsTo(User::class);
    }

//    public function setEntryDateAttribute($input)
//    {
//        $this->attributes['joining_date	'] =
//            Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
//    }


//public function salary(){
//
//
//        return $this->hasMany(EmployeeSalary::class);
//}






}
