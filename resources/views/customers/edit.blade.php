@extends('layouts.app')
@section('content')
	{{ Form::model($customer, ['action' => ['CustomerController@update', $customer->id], 'method' => 'patch']) }}
		@include('customers.partials.form', ['pageTitle' => 'Edit customer'])
	{{ Form::close() }}
@endsection
