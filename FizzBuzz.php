<?php

class FizzBuzz
{
    private int $limit;
    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    public function generateResponse()
    {
        $response = [];

        for ($i = 1; $i <= $this->limit; $i++) {
            $response[] = $this->getFizzBuzz($i);
        }

        return $response;
    }

    /**
     * Calculate the FizzBuzz value for a given number.
     *
     * @param int $number The number for which to calculate the FizzBuzz value
     * @return string|int The FizzBuzz value for the given number
     */
    private function getFizzBuzz($number)
    {
        $value = '';

        if ($number % 3 == 0) {
            $value .= 'Fizz';
        }
        
        if ($number % 5 == 0) {
            $value .= 'Buzz';
        }

        return $value ?: $number;
    }
}