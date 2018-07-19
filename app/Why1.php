<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Why1 extends Model
{
 
  protected $table = 'why1';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
    $select1 = 1;
    $why1= DB::table('why1')->where('id',1)->get();
 
    return $why1;
    
  }
}
