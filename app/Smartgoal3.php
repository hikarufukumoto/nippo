<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Smartgoal3 extends Model
{
  protected $table = 'smartgoal3';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
    $select1 = 1;
    $smartgoal3= DB::table('smartgoal3')->where('id',1)->get();
 
    return $smartgoal3;
    
  }
}
