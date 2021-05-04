@extends('..\layouts.app')

@section('content')

{!! Form::open(array('action' => 'DashboardController@store')) !!}

{!! Form::close() !!}

@endsection
