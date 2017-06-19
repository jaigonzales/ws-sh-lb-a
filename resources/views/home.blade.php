@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Hello, {{ Auth::user()->name }}</h1>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div id="create-list-component"></div>
                    <div id="shoplist-component"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
