<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\EmployeeSalary
 *
 * @property int $id
 * @property int|null $empinfo_id
 * @property string|null $name
 * @property int|null $salary_amount
 * @property string|null $month
 * @property string|null $date
 * @property int|null $advanced
 * @property string|null $advanced_status
 * @property string|null $note
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary whereAdvanced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary whereAdvancedStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary whereEmpinfoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary whereSalaryAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EmployeeSalary whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EmployeeSalary extends Model
{
    //

    protected $table= 'employee_salary';

    protected $fillable=
        [
            'id',
            'empinfo_id',
            'name',
            'salary_amount',
            'month',
            'date',
            'advanced',
            'previous_month_advanced',
            'final_salary',
            'note',
            'created_at',
            'updated_at',


        ];

//
//    public function empInfo(){
//
//        return $this->hasOne(EmployeeInfo::class,'emp_id');
//    }



}
