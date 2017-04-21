@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Edit Data</h1>
    </div>
  </div>
  <div class="row">
    <form class="" action="{{route('blog.update',$blog->id)}}" method="post">
      <input name="_method" type="hidden" value="PATCH">
      {{csrf_field()}}

      <h4>Name:</h4>
      <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
        <input type="text" name="name" class="form-control" placeholder="Name:" value="{{$blog->name}}">
        {!! $errors->first('name','<p class="help-block">:message</p>') !!}
      </div>

       <h4>Username:</h4>
      <div class="form-group{{ ($errors->has('username')) ? $errors->first('username') : '' }}">
        <input type="text" name="username" class="form-control" placeholder="Username:" value="{{$blog->username}}">
        {!! $errors->first('username','<p class="help-block">:message</p>') !!}
      </div>

      <h4>E-mail:</h4>
      <div class="form-group{{ ($errors->has('email')) ? $errors->first('email') : '' }}">
        <input type="text" name="email" class="form-control" placeholder="E-mail:" value="{{$blog->email}}">
        {!! $errors->first('email','<p class="help-block">:message</p>') !!}
      </div>

      <h4>Password:</h4>
      <div class="form-group{{ ($errors->has('password')) ? $errors->first('password') : '' }}">
        <input type="text" name="password" class="form-control" placeholder="Password:" value="{{$blog->password}}">
        {!! $errors->first('password','<p class="help-block">:message</p>') !!}
      </div>




      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="save">
      </div>
    </form>
  </div>
  @stop
