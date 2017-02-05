@extends('layouts.app')
@section('content')
	{{ Form::model(null, ['action' => ['CustomerController@store'], 'method' => 'post']) }}
		@include('customers.partials.form', ['pageTitle' => 'Create customer'])
	{{ Form::close() }}
@endsection
