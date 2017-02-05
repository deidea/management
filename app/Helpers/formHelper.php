<?php


if (!function_exists('getFormValidationClass')) {
	function getFormValidationClass($errors, $field) {
		if (count($errors) == 0) {
			return null;
		}

		return $errors->has($field) ? 'has-error' : 'has-success';
	}
}

if (!function_exists('getFormErrorMessage')) {
	function getFormErrorMessage($errors, $field) {
		if ($errors->has($field)) {
			 return $errors->first($field, '<div class="alert alert-danger" role="alert">:message</div>');
		 }
	}
}

if (!function_exists('getFormFieldIcon')) {
	function getFormFieldIcon($errors, $field) {
		if (count($errors) == 0) {
			return null;
		}

		return $errors->has($field) ? 'remove' : 'ok';

	}
}
