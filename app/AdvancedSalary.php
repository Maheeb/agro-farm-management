<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvancedSalary extends Model
{
    //
    protected $table="advanced_salary";

    protected $fillable =

        [
            "name",
            "empinfo_id",
            "advanced_amount",
            "date",
            "month",
            "created_at",
            "updated_at",

        ];


}
