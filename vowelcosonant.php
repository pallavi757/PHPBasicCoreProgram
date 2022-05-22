<?php 
    $vowels = ['a','e','i','o','u'];//declare static array
    $letter = readLine("Enter a character: ");//read character from user using readLine() and stored in letter varible

    if (in_array(strtolower($letter), $vowels)) 
    {
        echo $letter." is a Vowel";
    }
     else 
     {
        echo $letter." is a Consonant";
     }
