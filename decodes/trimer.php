<?php
foreach($argv as $k=>$a) {
    if ($k>0 && is_file($a)) {
	$inputFile = $a;
	break;
    }
}

$c = str_replace("\n", " XXX", file_get_contents($inputFile));
$c = str_replace("XXX XXX",   "\n\n",                   $c);
$c = str_replace("XXX",   " ",                   $c);
echo "$c\n";
/*
foreach(explode("\n",file_get_contents($inputFile)) as $k=>$line) {
    echo "'$line'\n";
}
//    foreach(explode("\n",getFileContents($inputFile)) as $k=>$line) {
 */
