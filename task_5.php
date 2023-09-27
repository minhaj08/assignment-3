<?php
function pass_generator($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $password = $lowercase[rand(0, strlen($lowercase) - 1)] .
        $uppercase[rand(0, strlen($uppercase) - 1)] .
        $numbers[rand(0, strlen($numbers) - 1)] .
        $specialChars[rand(0, strlen($specialChars) - 1)];

    $remainingLength = $length - 4;

    $allCharacters = $lowercase . $uppercase . $numbers . $specialChars;

    for ($i = 0; $i < $remainingLength; $i++) {
        $randomIndex = rand(0, strlen($allCharacters) - 1);
        $password .= $allCharacters[$randomIndex];
    }

    $password = str_shuffle($password);

    return $password;
}


$generatedPassword = pass_generator(12);


echo "Password: " . $generatedPassword . "\n";
