<?php

namespace App\Models\Back; 
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        'user_id','slug',
    ];
    
   public function company(){
       return $this->belongsTo('App\Models\Back\Company','company_id','id');
   }
}
 