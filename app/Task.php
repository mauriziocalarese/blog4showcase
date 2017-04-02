<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

       public function scopeIncomplete($query)
       {

           return $query->where('completed', 0);

       }

}


//$a = 1;
//$b = 2;
//
//$c = $a + $b;
//
//echo $c;





