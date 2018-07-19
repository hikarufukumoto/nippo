<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Why2 extends Model
{
  protected $table = 'why2';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select1 = 1;
    $why2= DB::table('why2')->where('id',1)->get();
 
    return $why2;
    
  }
}
