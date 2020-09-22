<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator
{
   public function validateHello($attribute, $value, $parameters)
   {
	echo "HelloValidator.php<br />";
       return $value % 2 == 0;
   }

}
