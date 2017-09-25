<?php
$input = trim(fgets(STDIN));

$results = [];

while ($input != "Result") {
    $input = explode('|', $input);

    list($first, $second, $score) = $input;
    $first = sanitizeString($first);
    $second = sanitizeString($second);

    if (strtoupper($first) == $first) {
        $team = $first;
        $player = $second;
    } else {
        $team = $second;
        $player = $first;
    }

    if (!array_key_exists($team, $results)) {
        $results[$team] = [
            'players' => [],
            'totalScore' => 0
        ];
    }
    if (!array_key_exists($player, $results[$team]['players'])) {
        $results[$team]['players'][$player] = 0;
    }
    $results[$team]['totalScore'] += $score;
    $results[$team]['players'][$player] += $score;

    $input = trim(fgets(STDIN));
}

//$results = [
//    'team' => [
//        'players' => [
//            'Ivan' => 10,
//            'Dragan' => 20
//        ],
//        'totalScore' => 30
//    ]
//];

// order array by it's inner element totalScore descending
// -1 will move 1 position behind
// 1 will move 1 ahead
// 0 will slack
uasort($results, function($first, $second) {
   if($first['totalScore'] === $second['totalScore']) return 0;
   if($first['totalScore'] > $second['totalScore']) return -1;
   return 1;
});

foreach ($results as $team => $teamData) {
    echo "{$team} => {$teamData['totalScore']}" . PHP_EOL;

    arsort($teamData['players']);
    foreach ($teamData['players'] as $playerName => $score) {
        echo "Most points scored by {$playerName}" . PHP_EOL;
        break;
    }
}

function sanitizeString($str) {
    preg_replace("/\W+/", '', $str);
}
