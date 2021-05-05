@extends('../layouts.app')
@section('content')

{!!Form::open(array('action' => 'DashboardController@update'))!!}
{!! Form::label('name', 'Name:') !!}
 {!! Form::text('name',$user->name , ['class' => 'form-control']) !!}
 {!! Form::label('email', 'Email:') !!}
 {!! Form::text('email',$user->email, ['class' => 'form-control']) !!}
 {!! Form::label('password', 'Password:') !!}
 {!! Form::text('password',$user->password, ['class' => 'form-control']) !!}
 {!! Form::hidden('id',$user->id , ['class' => 'form-control']) !!}
 {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
 {{ Form::close() }}
<a href="/user/index" class="badge badge-dark">Go Back </a>
 @endsection
