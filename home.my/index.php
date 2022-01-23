<?php
namespace Program
{
    require 'Methods.php';

    $numberTotalCount = $argv[1];
    $passwordMaxLength = $argv[2];
    define('passwordMinLength', 3);
    $passwordMaxLengthIsValid = $passwordMaxLength >= passwordMinLength;

    if ($passwordMaxLengthIsValid) {
        $numberArray = \Methods\ArrayManipulator::GetNumberArrayFrom0To($numberTotalCount);
        $primeNumberArray = \Methods\ArrayManipulator::GetPrimeNumberArrayFrom($numberArray);
        $palindromeNumberArray = \Methods\ArrayManipulator::GetPalindromeNumberArrayFrom($numberArray);
        $passwordLength = rand(passwordMinLength, $passwordMaxLength);
        $password = \Methods\ArrayManipulator::GetGeneratedPasswordStringFrom($primeNumberArray, $passwordLength);

        echo "Prime numbers : " . join(" ", $primeNumberArray), PHP_EOL;
        echo "Palindrome numbers : " . join(" ", $palindromeNumberArray), PHP_EOL;
        echo "Password : " . $password, PHP_EOL;
    } else {
        echo "Password length can't be less than 3 symbols";
    }
}

