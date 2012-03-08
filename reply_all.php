<?php
require 'Extractor.php';
$string = "@MasBog this simple reply to all @MyFortunes";
//$found = Twitter_Extractor::create($tweet->text)->extractMentionedUsernames();
//$to_users = array_unique(array_merge($to_users, $found));
$found = Twitter_Extractor::create($string)->extractMentionedUsernames();
print_r($found);
?>
