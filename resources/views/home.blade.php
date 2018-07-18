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
   
   
<!--@extends('layouts.app')-->


@section('content')
<div class="container">
    <form action="/result" method="post">
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="intro"><label for="whatwedid"></label>
            Today we worked on <input type="text" id=dounyu name="shiba">.
            
            </div>
        </div>
        <div class="text1">Please choose at least 3 from followings. </div>
        <div class="choose">
            
                    <div class="positive">
                        
                        <input type="checkbox" name="happy" value="1" id="happy"> 
                        <label for="happy" class="label"><div class="text">Happy</div></label>
                        <input type="checkbox" name="interesting" value="2" id="interesting">
                        <label for="interesting" class="label"><div class="text">Interesting</div></label>
                        <input type="checkbox" name="expect" value="3" id="expect">
                        <label for="expect" class="label"><div class="text">Expect</div></label>
                        <input type="checkbox" name="excited" value="4" id="excited">
                        <label for="excited" class="label"><div class="text">Excited</div></label>
                        <input type="checkbox" name="satisfied" value="5" id="satisfied">
                        <label for="satisfied" class="label"><div class="text">Satisfied</div></label>
                    </div>
                    <div class="negative clearfix">
                        
                        <input type="checkbox" name="tired" value="6" id="tired">
                        <label for="tired" class="label"><div class="text">Tired</div></label>
                        <input type="checkbox" name="confused" value="7" id="confused">
                        <label for="confused" class="label"><div class="text">Confused</div></label>
                        <input type="checkbox" name="worried" value="8" id="worried">
                        <label for="worried" class="label"><div class="text">Worried</div></label>
                        <input type="checkbox" name="hard" value="9" id="hard">
                        <label for="hard" class="label"><div class="text">Hard</div></label>
                        <input type="checkbox" name="nervous" value="10" id="nervous">
                        <label for="nervous" class="label"><div class="text">Nervous</div></label>
                    </div>
                    <div class="feeling clearfix">
                        <input type="checkbox" name="impressed" value="11" id="impressed">
                        <label for="impressed" class="label"><div class="text">Impressed</div></label>
                        <input type="checkbox" name="important" value="12" id="important">
                        <label for="important" class="label"><div class="text">Important</div></label>
                    </div>
                    <div id = "specialspace">
                    <div class="special clearfix">
                        <input type="checkbox" name="special" value="13" id="special">
                        <label for="special" class="label"><div class="text">Special</div></label>
                    </div>
                    </div>
                    <input id="submit_button" type="submit"><input type="hidden"  name="_token" value="{{ csrf_token() }}" >
        </div>
    </div>
    
    </form>
</div>

@endsection