<!DOCTYPE html> 
 <html lang="jp"> 
 
 
   <head> 
 
 
     <meta charset="utf-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
     <meta name="description" content=""> 
     <meta name="author" content=""> 
 
 
     <title>NIPPO</title> 

 
     <!-- Bootstrap core CSS --> 
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
 
 
     <!-- Custom fonts for this template --> 
     <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> 
     <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> 
 
 
     <!-- Plugin CSS --> 
     <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet"> 

 
     <!-- Custom styles for this template --> 
     <link href="css/test.css" rel="stylesheet"> 
 
 
   </head> 
@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                        <form action="/result" method="post">
                            <div class="intro"><label for="whatwedid"></label>
                            Today we worked on <input type="text" id="name" name="user_name"><input type="submit"></div></form>
                    </div>
                    <div class="choose">
                    <div class="positive">
                         
                         <input type="checkbox" name="positive" value="1" id="happy"> 
                         <label for="happy" class="label"><div class="text">Happy</div></label>
                         <input type="checkbox" name="positive" value="2" id="interesting">
                         <label for="interesting" class="label"><div class="text">Interesting</div></label>
                         <input type="checkbox" name="positive" value="3" id="hope">
                         <label for="hope" class="label"><div class="text">Expect</div></label>
                         <input type="checkbox" name="positive" value="4" id="excited">
                         <label for="excited" class="label"><div class="text">Excited</div></label>
                         <input type="checkbox" name="positive" value="5" id="satisfied">
                         <label for="satisfied" class="label"><div class="text">Satisfied</div></label>
                    </div>
                    <div class="negative clearfix">
                          <input type="checkbox" name="negative" value="6" id="tired">
                         <label for="tired" class="label"><div class="text">Tired</div></label>
                         <input type="checkbox" name="negative" value="7" id="confused">
                         <label for="confused" class="label"><div class="text">Confused</div></label>
                         <input type="checkbox" name="negative" value="8" id="worried">
                         <label for="worried" class="label"><div class="text">Worried</div></label>
                         <input type="checkbox" name="negative" value="9" id="hard">
                         <label for="hard" class="label"><div class="text">Hard</div></label>
                         <input type="checkbox" name="negative" value="10" id="nervous">
                         <label for="nervous" class="label"><div class="text">Nervous</div></label>
                    </div>
                    <div class="feeling clearfix">
                        <input type="checkbox" name="feeling" value="11" id="impressed">
                         <label for="impressed" class="label"><div class="text">Impressed</div></label>
                         <input type="checkbox" name="positive" value="12" id="important">
                         <label for="important" class="label"><div class="text">Important</div></label>
                    </div>
                    <div class="special clearfix">
                        <input type="checkbox" name="positive" value="1" id="special">
                         <label for="special" class="label"><div class="text">Special</div></label>
            
                    </div>
                    </div>
               
    </div>
</div>

@endsection
@for ($i = 0; $i < count($positive); $i++)
    {{$positive[$i]}}
@endfor