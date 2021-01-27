<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeePerformance extends Model
{
    //

    protected $table= 'employee_performance';


    protected $fillable =

        [
            'empinfo_id',
            'name',
            'month_name',
            'behavior',
            'punctuality',
            'attendance',
            'attitude',
            'integrity',
            'created_at',
            'updated_at'


        ];




}
