<?php


namespace Cart\Validation;


use Psr\Http\Message\ServerRequestInterface as Request;

use Cart\Validation\Contracts\ValidatorInterface;

use Respect\Validation\Exceptions\NestedValidationException;


class Validator implements ValidatorInterface
{

	protected $errors = [];

	public function validate(Request $request, array $rules)
	{

		foreach ($rules as $field => $rule){

			try {

				$rule->setName(ucFirst($field))->assert($request->getParam($field));

			} catch (NestedValidationException $e) {

				$this->errors[$field] = $e->getMessages();

			}
		}

		$_SESSION['errors'] = $this->errors;


		return $this;

	}


	public function fails()
	{

		return !empty($this->errors);
	}
}