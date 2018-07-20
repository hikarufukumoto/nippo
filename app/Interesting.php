<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Interesting extends Model
{
  protected $table = 'interesting';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select = rand(1,48);
    $interesting= DB::table('interesting')->where('id',$select)->get();

    return $interesting;
  }
}
