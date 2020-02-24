<?php

/**
 *
 * This class is used for simple calculator
 *
 */

class SimpleCalculator
{
	
	public function calculate($data)
	{
		
		$firstNumber = $this->validate($data['firstNumber']);
		$secondNumber = $this->validate($data['secondNumber']);
		$btn = $data['btn'];

		switch ($btn) {
			case '+':
				$result = $firstNumber + $secondNumber;
				break;

			case '-':
				$result = $firstNumber - $secondNumber;
				break;
			case '*':
				$result = $firstNumber * $secondNumber;
				break;
			case '/':
				$result = $firstNumber / $secondNumber;
				break;
			}

		return $result;
	}



/**
 *
 * The function below checks whether entered data is numeric or not.
 *
 */
	private function validate($x)
	{
		if (is_numeric($x)) 
		{
			$validatedData = $x;
		}
		else
		{
			$validatedData = 0;
		}

		return $validatedData;
	}
}