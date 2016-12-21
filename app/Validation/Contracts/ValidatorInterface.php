<?php

namespace Cart\Validation\Contracts;


use Psr\Http\Message\ServerRequestInterface as Request;



interface ValidatorInterface
{

	public function validate(Request $Request, array $rules);

	public function fails();
}