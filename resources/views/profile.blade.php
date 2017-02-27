@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Profile Page</h1>
        <form class="form-horizontal" action="">
            <div class="form-group">
                <label for="name" class="col-md-4 control-label">Name</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                 </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-md-4 control-label">E-mail</label>
                <div class="col-md-6">
                    <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}" required>
                 </div>
            </div>
            <div class="form-group">
                <label for="pid" class="col-md-4 control-label">รหัสบัตรประชาชน</label>
                <div class="col-md-6">
                    <input id="pid" type="text" class="form-control" name="pid" value="{{ $user->pid }}" max=13 require>
                 </div>
            </div>
            <div class="form-group">
                 <label for="pid" class="col-md-4 control-label">Gender</label>
                        <div class="col-md-6">
                                <label class="radio-inline">
                                    @if ($user->gender == 1)
                                    <input type="radio" name="gender" id="gender_male" value="1" checked> ชาย
                                    @else
                                    <input type="radio" name="gender" id="gender_male" value="1" > ชาย
                                    @endif
                                </label>
                                <label class="radio-inline">
                                    @if ($user->gender == 2)
                                    <input type="radio" name="gender" id="gender_male" value="2" checked> หญิง
                                    @else
                                    <input type="radio" name="gender" id="gender_male" value="2" > หญิง
                                    @endif
                                </label>
                        </div>
             </div>
              <div class="form-group">
                    <label for="national" class="col-md-4 control-label">Nalionality</label>
                        <div class="col-md-6">
                            <select name = "national" class = "form-control">
                                    <option value="">--เลือก--</option>
                                @foreach ($national as $nation)
                                    @if ($user->national == $nation->id)                          
                                    <option value="{{$nation->id}}" selected>{{$nation->national_name}}</option>
                                    @else
                                    <option value="{{$nation->id}}">{{$nation->national_name}}</option>
                                    @endif
                                @endforeach
                                </select>
                        </div>
              </div>

        </form>
    </div>
</div>
@endsection
