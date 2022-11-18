<?php 

$answer = file_get_contents('./helloWorld.php');

$pattern = "/<[?]php(\s)*echo\s['\"]Hello World !['\"]\s?;$/";

if (preg_match_all($pattern, $answer)) {
    echo("TECHIO> success true \r\n");
} else {
    echo("TECHIO> success false  \r\n");
}
?>