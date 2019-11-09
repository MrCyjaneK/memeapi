<?php
header('Content-type: image/jpeg');

$r = rand(0,213700);

$out       = "./result$r.jpg";
$templatka = "./matchtemplate.jpg";
$url1      = escapeshellarg($_GET['url1']);
$input1    = "./tomatch1$r.jpg";
$input1fin = "./tomatch1fin$r.jpg";
$url2      = escapeshellarg($_GET['url2']);
$input2    = "./tomatch2$r.jpg";
$input2fin = "./tomatch2fin$r.jpg";

$commands = [
	"timeout 5 wget $url1 -O $input1",
	"timeout 5 wget $url2 -O $input2",
	"convert -resize '385x385!' $input1 $input1fin",
	"convert -resize '385x385!' $input2 $input2fin",
	"cp $templatka $out",
	"composite -compose multiply -gravity SouthWest -geometry +50+420 $input1fin $out $out",
	"composite -compose multiply -gravity SouthWest -geometry +470+420 $input2fin $out $out"
];

foreach ($commands as $cmd) {
	shell_exec($cmd);
}

readfile($out);
try {
unlink($out);
unlink($input2fin);
unlink($input1fin);
unlink($input1);
unlink($input2);
} catch (Exception $e) {

}