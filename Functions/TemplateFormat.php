<?php
$inputLine = trim(fgets(STDIN));
$tokens = preg_split("/, /", $inputLine);

function createXmlForm($arr) {
    $html = '<?xml version="1.0" encoding="UTF-8"?>' . "\n" . '<quiz>';
    for ($i = 0; $i < count($arr); $i += 2) {
        $question = $arr[$i];
        $answer = $arr[$i + 1];
        $html .= "\n" . '  <question>' . "\n" . '    ' . $question . "\n" . '  </question>' . "\n" . '  <answer>' . "\n" . '    ' . $answer . "\n" . '  </answer>';
    }
    $html = $html . "\n" . '</quiz>';
    return $html;
}
$xml = createXmlForm($tokens);
echo $xml;
