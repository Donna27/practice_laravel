@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @include('components.user_list',['users','$users']);
                    @include('components.user_delete',['types','$types'])
            </div>
        </div>
    </div>
</div>
@endsection
