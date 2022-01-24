<?php
namespace Methods
{
    class ArrayManipulator
    {
        public static function GetNumberArrayFrom1To($number)
        {
            $numberArray = [];
            for ($i = 1; $i <= $number; $i++) {
                array_push($numberArray, $i);
            }

            return $numberArray;
        }

        public static function GetPrimeNumberArrayFrom($array)
        {
            $primeNumberArray = [];
            for ($i = 0; $i < count($array); $i++) {
                $number = $array[$i];
                $numbersFilterBy = [2, 3, 5, 7];
                $isPrime = true;
                for ($j = 0; $j < count($numbersFilterBy); $j++) {
                    $numberFilterBy = $numbersFilterBy[$j];
                    if ($number % $numberFilterBy == 0 && $number != $numberFilterBy) {
                        $isPrime = false;
                    }
                }

                if ($isPrime) {
                    array_push($primeNumberArray, $number);
                }
            }

            return $primeNumberArray;
        }

        public static function GetPalindromeNumberArrayFrom($array)
        {
            $palindromeArray = [];
            foreach ($array as $number) {
                $numberStr = strval($number);
                $reversedNumberStr = strrev($numberStr);
                if ($numberStr == $reversedNumberStr) {
                    array_push($palindromeArray, $number);
                }
            }

            return $palindromeArray;
        }

        public static function GetGeneratedPasswordStringFrom($numberArray, $passwordLength)
        {
            $passwordStr = "";
            while (strlen($passwordStr) < $passwordLength) {
                $index = rand(0, count($numberArray) - 1);
                $numberStr = strval($numberArray[$index]);
                if (strlen($numberStr) + strlen($passwordStr) <= $passwordLength) {
                    $passwordStr .= $numberStr;
                }
            }

            return $passwordStr;
        }
    }
}
