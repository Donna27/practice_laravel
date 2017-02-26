@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class = 'row'>
                        @foreach ($users as $user)
                        <div class = "well">
                            <span>{{$user->name}} {{$user->email}}</span>
                            <form method="post" action = "/users/delete">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <input type="submit" class = "btn btn-danger" value="Delete">
                            </form>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
