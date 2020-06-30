<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 4:36 PM
 */

class FizzBuzz
{
    public $status;


    public function __construct($number)
    {
        $isMode3 = $number % 3 == 0;
        $isMode5 = $number % 5 == 0;
        if($isMode3 && $isMode5) {
            $this->status =  "FizzBuzz";
        } elseif ($isMode3) {
            $this->status = "Fizz";
        } elseif ($isMode5) {
            $this->status = "Buzz";
        } else {
            $this->status =  $number."";
        }
    }

    public function __toString()
    {
        return $this->status;
    }
}