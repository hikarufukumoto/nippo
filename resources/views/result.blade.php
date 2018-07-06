@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="container">
                <div>
                @foreach($data as $d)
                    <li>{{$d->content}}</li>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection