<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public static $createRules = [
        'name'=>'required|max:255',
    ];
}
