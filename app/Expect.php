<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Expect extends Model
{
  protected $table = 'expect';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select = rand(1,30);
   $expect = DB::table('expect')->where('id',$select)->get();

    return $expect;
  }
}