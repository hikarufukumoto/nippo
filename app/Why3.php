<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Why3 extends Model
{
  protected $table = 'why3';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select1 = 1;
    $why3= DB::table('why3')->where('id',1)->get();
 
    return $why3;
    
  }
}
