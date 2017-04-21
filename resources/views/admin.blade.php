@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    You are logged in as <strong>ADMIN</strong>

                    <a href="{{route('blog.index')}}" class="btn btn-info pull-right">Access Database</a><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection