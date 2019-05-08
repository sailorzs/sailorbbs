@extends('layouts.app')
@section('title', $user->name . ' 信息编辑')


@section('content')
    <div class="container">
      <div class="col-md-8 offset-md-2">
        <div class="card">

          <div class="card-header">
            <h4>
              <i class="glyphicon glyphicon-edit"></i>编辑个人资料
            </h4>
          </div>

          <div class="card-body">
            <form method="POST" action="{{ route('users.update', $user->id) }}" accept-charset="UTF-8">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="PUT">
              
              @include('shared._error')

              <div class="form-group">
                <label for="name-field">用户名</label>
                <input class="form-control" id="name-field" name="name" type="text" value="{{ old('name', $user->name) }}">
              </div>

              <div class="form-group">
                <label for="email-field">邮 箱</label>
                <input class="form-control" id="email-field" name="email" type="text" value="{{ old('email', $user->email) }}">
              </div>

              <div class="form-group">
                <label for="introduction-field">个人简介</label>
                <textarea class="form-control" id="introduction-field" name="introduction" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
              </div>

              <div class="well well-sm">
                <button type="submit" class="btn btn-primary">保存</button>
              </div>

            </form>


          </div>







        </div>






      </div>







    </div>
@stop
