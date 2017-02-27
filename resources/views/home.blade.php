@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                             <h1>Users Active</h1>
                                @include('components.user_list',['users','$users']);
                        </div>
                        <div class="col-md-6">
                             <h1>List of Users deleted</h1>
                                @include('components.user_delete',['types','$types'])
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
