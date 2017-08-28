<?php
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);
$nums = array_map('intval', $nums);

$command = trim(fgets(STDIN));

while ($command != 'print') {
    $command = explode(' ', $command);
    switch ($command[0]) {
        case 'add':
            $index = intval($command[1]);
            $value = intval($command[2]);
            array_splice($nums, $index, 0, $value);
            break;

        case 'addMany':
            $index = intval($command[1]);
            $elements = [];
            for ($i = 2; $i < count($command); $i++) {
                $elements[] = intval($command[$i]);
            }
            array_splice($nums, $index, 0, $elements);
            break;

        case 'contains':
            $element = $command[1];
            if (in_array($element, $nums)) {
                echo array_search($element, $nums);
            } else {
                echo -1;
            }
            echo "\n";
            break;

        case 'remove':
            $index = intval($command[1]);
            array_splice($nums, $index, 1);
            break;

        case 'shift':
            $position = intval($command[1]);
            for ($r = 0; $r < $position; $r++) {
                $nextLast = $nums[0];
                for ($i = 0; $i < count($nums) - 1; $i++) {
                    $nums[$i] = $nums[$i + 1];
                }
                $nums[count($nums) - 1] = $nextLast;
            }
            break;

        case 'sumPairs':
            $tempArr = [];
            if (count($nums) % 2 == 0){
                for ($i = 0; $i < count($nums) - 1; $i += 2) {
                    $tempArr[] = $nums[$i] + $nums[$i + 1];
                }
            } else {
                for ($i = 0; $i < count($nums); $i += 2) {
                    if ($i != count($nums) - 1) {
                        $tempArr[] = $nums[$i] + $nums[$i + 1];
                    } else {
                        $tempArr[] = $nums[$i];
                    }
                }
            }
            $nums = $tempArr;
            break;
    }

    $command = trim(fgets(STDIN));
}
echo "[";
echo implode(', ', $nums);
echo "]";