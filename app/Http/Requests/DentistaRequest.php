<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DentistaRequest extends FormRequest {

	public function authorize() {
		return true;
	}

	public function rules() {
		$defaultRules = [
			'name' => '',
			'email' => '',
			'cro' => '',
			'cro_uf' => ''
		];
		
		return $defaultRules;
	}
}