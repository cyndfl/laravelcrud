@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Create User</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="" action="{{route('blog.store')}}" method="post">
        {{csrf_field()}}

        <h4>Name:</h4>
        <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
          <input type="text" name="name" class="form-control" placeholder="Name:">
          {!! $errors->first('name','<p class="help-block">:message</p>') !!}
        </div>

        <h4>Username:</h4>
        <div class="form-group{{ ($errors->has('username')) ? $errors->first('name') : '' }}">
          <input type="text" name="username" class="form-control" placeholder="Username:">
          {!! $errors->first('username','<p class="help-block">:message</p>') !!}
        </div>

        <h4>Email:</h4>
        <div class="form-group{{ ($errors->has('email')) ? $errors->first('name') : '' }}">
          <input type="text" name="email" class="form-control" placeholder="Email:">
          {!! $errors->first('email','<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="save">
        </div>
      </form>
    </div>
  </div>














  @stop
