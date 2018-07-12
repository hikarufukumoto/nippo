<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Excited extends Model
{
  protected $table = 'excited';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select = 1;
   $excited = DB::table('excited')->where('id',$select)->get();

    return $excited;
  }
}