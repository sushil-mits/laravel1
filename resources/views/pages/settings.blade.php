@extends('layouts.app')
@extends('layouts.master')

@section('title')
    Settings
@endsection

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    <p>{{ $married }} </p>
                    <p>{{ $test }} </p>

                    <p>{{ $age }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('body')
    <p>hello you are at settings </p>
@endsection




