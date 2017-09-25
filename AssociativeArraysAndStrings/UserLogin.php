<?php
$input = trim(fgets(STDIN));
$users = [];
while ($input != 'login') {
    $tokens = explode(' -> ', $input);
    list($username, $password) = $tokens;
    if (!key_exists($username, $users)) {
        $users[$username] = '';
    }
    $users[$username] = $password;

    $input = trim(fgets(STDIN));
}

$login = trim(fgets(STDIN));
$count_failures = 0;
while ($login != 'end') {
    $tokens = explode(' -> ', $login);
    list($user, $pass) = $tokens;
    if (key_exists($user, $users)) {
        if ($pass == $users[$user]) {
            echo $user . ': logged in successfully' . PHP_EOL;
        } else {
            $count_failures++;
            echo $user . ': login failed' . PHP_EOL;
        }
    } else {
        $count_failures++;
        echo $user . ': login failed' . PHP_EOL;
    }

    $login = trim(fgets(STDIN));
}
echo 'unsuccessful login attempts: ' . $count_failures;
