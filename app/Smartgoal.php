<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Smartgoal extends Model
{
  protected $table = 'smartgoal';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select1 = rand(1,24);
    $smartgoal= DB::table('smartgoal')->where('id',$select1)->get();
 
    return $smartgoal;
    
  }
}

