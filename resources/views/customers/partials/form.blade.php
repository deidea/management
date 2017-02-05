<h3>{{ $pageTitle }}</h3>

<hr />

<div class="form-group has-feedback {{ getFormValidationClass($errors, 'short') }}">
	{{ Form::label('short', 'Short Code*', ['class' => 'control-label']) }}
	{{ Form::text('short', null, ['class' => 'form-control', 'placeholder' => 'Enter Short Code']) }}
	<span class="glyphicon glyphicon-{{ getFormFieldIcon($errors, 'short') }} form-control-feedback"></span>
</div>

{!! getFormErrorMessage($errors, 'short') !!}

<div class="form-group has-feedback {{ getFormValidationClass($errors, 'name') }}">
	{{ Form::label('name', 'Name*', ['class' => 'control-label']) }}
	{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Customer\'s name']) }}
	<span class="glyphicon glyphicon-{{ getFormFieldIcon($errors, 'name') }} form-control-feedback"></span>
</div>

{!! getFormErrorMessage($errors, 'name') !!}

<div class="form-group has-feedback {{ getFormValidationClass($errors, 'website') }}">
	{{ Form::label('website', 'Website*', ['class' => 'control-label']) }}
	{{ Form::text('website', null, ['class' => 'form-control', 'placeholder' => 'Enter Website']) }}
	<span class="glyphicon glyphicon-{{ getFormFieldIcon($errors, 'website') }} form-control-feedback"></span>
</div>

{!! getFormErrorMessage($errors, 'website') !!}

<small>*mandatory fields</small>

<hr />

{{ link_to_action('CustomerController@index', 'Cancel', [], ['class' => 'btn btn-default']) }}
{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
