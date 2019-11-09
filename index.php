<?php
$file = time().rand(0,10000).'.jpg';
shell_exec("rm ./1*.jpg");
if ($_GET['type'] == "txt") {
	$txt = escapeshellarrg($_GET['txt']);
	$cmd = "convert -background lightblue -fill blue-font Candice -size 380x180 -gravity south label:'$txt' $file";
	shell_exec($cmd);
	header('Content-Type: image/jpeg');
	readfile($file);
	unlink($file);
	die();
}
if ($_GET['type'] == "tvp1") {
	$txt = escapeshellarrg($_GET['txt']);
	$cmd = "convert tvp1.jpg -font font.ttf -pointsize 34 -fill white -draw \"text 142,356 '".$txt."'\" $file";
	shell_exec($cmd);
	header('Content-Type: image/jpeg');
	readfile($file);
	unlink($file);
	die();
}
if ($_GET['type'] == "tvp2") {
	$txt = escapeshellarrg($_GET['txt']);
	$cmd = "convert tvp2.jpg -font font.ttf -pointsize 34 -fill white -draw \"text 142,356 '".$txt."'\" $file";
	shell_exec($cmd);
	header('Content-Type: image/jpeg');
	readfile($file);
	unlink($file);
	die();
}
if ($_GET['type'] == "tvp3") {
	$txt = escapeshellarrg($_GET['txt']);
	$cmd = "convert tvp3.jpg -font font.ttf -pointsize 34 -fill white -draw \"text 142,356 '".$txt."'\" $file";
	shell_exec($cmd);
	header('Content-Type: image/jpeg');
	readfile($file);
	unlink($file);
	die();
}
if ($_GET['type'] == "tvp4") {
	$txt = escapeshellarrg($_GET['txt']);
	$cmd = "convert tvp4.jpg -font font.ttf -pointsize 34 -fill white -draw \"text 195,488 '".$txt."'\" $file";
	shell_exec($cmd);
	header('Content-Type: image/jpeg');
	readfile($file);
	unlink($file);
	die();
}
if ($_GET['type'] == "tvp5") {
	$txt = escapeshellarrg($_GET['txt']);
	$cmd = "convert tvp5.jpg -font font.ttf -pointsize 34 -fill white -draw \"text 195,488 '".$txt."'\" $file";
	shell_exec($cmd);
	header('Content-Type: image/jpeg');
	readfile($file);
	unlink($file);
	die();
}
if ($_GET['type'] == "ss1") {
	$txt = escapeshellarrg($_GET['txt']);
	$cmd = "convert ss1.jpg -font font.ttf -pointsize 34 -fill \"#1c1c1c\" -draw \"text 263,455 '".$txt."'\" $file";
	ob_srart();
	shell_exec($cmd);
	ob_end_clean();
	header('Content-Type: image/jpeg');
	readfile($file);
	unlink($file);
	die();
}
if ($_GET['type'] == "ss2") {
	$txt = escapeshellarrg($_GET['txt']);
	$cmd = "convert ss2.jpg -font font.ttf -pointsize 34 -fill \"#483e25\" -draw \"text 266,455 '".$txt."'\" $file";
	shell_exec($cmd);
	header('Content-Type: image/jpeg');
	readfile($file);
	unlink($file);
	die();
}
if ($_GET['type'] == "stonogapic") {
	$txt = escapeshellarrg($_GET['txt']);
	$cmd = "convert stonogapic.jpg -font font.ttf -pointsize 50 -fill \"#ffffff\" -draw \"text 69,455 '".$txt."'\" $file";
	shell_exec($cmd);
	header('Content-Type: image/jpeg');
	readfile($file);
	unlink($file);
	die();
}
if ($_GET['type'] == "message") {
	$txt = explode(",",escapeshellarrg($_GET['txt']),2);
	$cmd = "convert message.jpg -font font.ttf -pointsize 30 -fill \"#000000\" -draw \"text 42,110 '".$txt[0]."'\" $file";
	shell_exec($cmd);
	$cmd = "convert $file -font font.ttf -pointsize 21 -fill \"#000000\" -draw \"text 42,130 '".chunk_split($txt[1], 60, PHP_EOL)."'\" tmp$file";
	shell_exec($cmd);
	header('Content-Type: image/jpeg');
	readfile("tmp".$file);
	unlink($file);
	unlink('tmp'.$file);
	die();
}

if ($_GET['type'] == "snap") {
	$imgname = "tmp$file";
	//print_r($_GET);
	shell_exec("timeout 5 wget \"".escapeshellarrg($_GET['photo'])."\" -O \"tmp$file\"");
	
	$height = explode(PHP_EOL,shell_exec("identify -format '%h' $imgname"))[0];
	$width = explode(PHP_EOL,shell_exec("identify -format '%w' $imgname"))[0];
	//print_r($height);
	$txt = escapeshellarrg($_GET['txt']);
	$cmd = "convert ".$imgname." -fill \"rgba(0, 0, 0, 0.45)\" -draw \"rectangle 0,".round($height/2 - $height/18)." ".$width.",".round($height/2 + $height/18). "\" -pointsize 38 -fill white -gravity center -draw \"text 0,0 '".$txt."'\" tst$file";
	shell_exec($cmd);
	header('Content-Type: image/jpeg');
	readfile("tst".$file);
	unlink($file);
	unlink('tmp'.$file);
	unlink('tst'.$file);
	die();
}

if ($_GET['type'] == "wypierdalaj") {
 header('Content-Type: image/jpeg');
 readfile("./WYPIERDALAJ/".scandir("./WYPIERDALAJ")[rand(2,count(scandir("./WYPIERDALAJ"))-1)]);
 //die();
}
if ($_GET['type'] == "ahshit") {
	//$txt = preg_replace("/[^a-zA-Z0-9 ]+/", "", $_GET['txt']);
	//$cmd = "convert ss2.jpg -font font.ttf -pointsize 34 -fill \"#483e25\" -draw \"text 266,455 '".$txt."'\" $file";
	//shell_exec($cmd);
	header('Content-Type: image/jpeg');
	readfile("./ahshit.jpg");
	//unlink($file);
	die();
}
if ($_GET['type'] == "stonks") {
	readfile("./stonks.jpg");
	die();
}
if ($_GET['type'] == "papaj") {
	//$file = $file.".mp4";
	//$txt = escapeshellarrg($_GET['txt']);
	//shell_exec("ffmpeg -i papaj.mp4 -filter_complex \"[0:v]drawtext=fontfile='font.ttf':text='$txt':fontsize=64:fontcolor=white\" $file");
	header('Content-Type: video/mp4');
	readfile("papaj.mp4");
	//unlink($file);
	die();
}
if ($_GET['type'] == "crab") {
	//$file = $file.".mp4";
	//$txt = escapeshellarrg($_GET['txt']);
	//shell_exec("ffmpeg -i papaj.mp4 -filter_complex \"[0:v]drawtext=fontfile='font.ttf':text='$txt':fontsize=64:fontcolor=white\" $file");
	header('Content-Type: video/mp4');
	readfile("classic.mp4");
	//unlink($file);
	die();
}
if ($_GET['type'] == "ona") {
	//$file = $file.".mp4";
	//$txt = escapeshellarrg($_GET['txt']);
	//shell_exec("ffmpeg -i papaj.mp4 -filter_complex \"[0:v]drawtext=fontfile='font.ttf':text='$txt':fontsize=64:fontcolor=white\" $file");
	header('Content-Type: video/mp4');
	readfile("onabytakchciala.mp4");
	//unlink($file);
	die();
}
if ($_GET['type'] == "shootingstars") {
	//$file = $file.".mp4";
	//$txt = escapeshellarrg($_GET['txt']);
	//shell_exec("ffmpeg -i papaj.mp4 -filter_complex \"[0:v]drawtext=fontfile='font.ttf':text='$txt':fontsize=64:fontcolor=white\" $file");
	header('Content-Type: video/mp4');
	readfile("shootingstars.mp4");
	//unlink($file);
	die();
}
if ($_GET['type'] == "stonoga") {
	//$file = $file.".mp4";
	//$txt = escapeshellarrg($_GET['txt']);
	//shell_exec("ffmpeg -i papaj.mp4 -filter_complex \"[0:v]drawtext=fontfile='font.ttf':text='$txt':fontsize=64:fontcolor=white\" $file");
	header('Content-Type: video/mp4');
	readfile("stonoga.mp4");
	//unlink($file);
	die();
}
if ($_GET['type'] == "woodys") {
	//$file = $file.".mp4";
	//$txt = escapeshellarrg($_GET['txt']);
	//shell_exec("ffmpeg -i papaj.mp4 -filter_complex \"[0:v]drawtext=fontfile='font.ttf':text='$txt':fontsize=64:fontcolor=white\" $file");
	header('Content-Type: video/mp4');
	readfile("woodys.mp4");
	//unlink($file);
	die();
}
function escapeshellarrg($t) {
	$t = str_replace("`","",$t);
	$t = str_replace("$","",$t);
	$t = str_replace("(","",$t);
	$t = str_replace(")","",$t);
    $t = str_replace("'","",$t);
    return str_replace('"',"",$t);
}
echo "Something's wrong, I can feel it.";