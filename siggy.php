<?php
$text = $_POST['texting'];
$text2 = $_POST['texting2'];
$text3 = $_POST['texting3'];
$text4 = $_POST['texting4'];
$text5 = $_POST['texting5'];
$raced = $_POST['race'];
$raced = $_REQUEST['race'];
$tierd = $_POST['tier'];
$tierd = $_REQUEST['tier'];

If ( $raced == "Female Fighter" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("ffighter.png");
}
If ( $raced == "Male Fighter" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("mfighter.png");
}
If ( $raced == "Priest" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("KarMaleM6.png");
}
If ( $raced == "Slayer" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("KarMaleP6.png");
}
If ( $raced == "Male Gunner" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("KarMaleW6.png");
}
If ( $raced == "Female Gunner" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("KarMaleR6.png");
}
If ( $raced == "Female Mage" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("HumMaleP6.png");
}
If ( $raced == "Male Mage" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("HumMaleW6.png");
}
If ( $raced == "Thief" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("HumMaleR6.png");
}
If ( $raced == "Male Human Mage" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("HumMaleM6.png");
}
If ( $raced == "Female Human Priest" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("HumFemaleP6.png");
}
If ( $raced == "Female Human Warrior" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("HumFemaleW6.png");
}
If ( $raced == "Female Human Rogue" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("HumFemaleR6.png");
}
If ( $raced == "Female Human Mage" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("HumFemaleMage6.png");
}
If ( $raced == "Human Barbarian" AND $tierd == "Coming Soon!") {
$im = imagecreatefrompng("HumBarbW6.png");
}
$color = imagecolorallocate($im, 0, 0, 0);
$color2 = imagecolorallocate($im, 0, 0, 0);
$width = imagesx($im);
$height = imagesy($im);
$font = 3;
$font2 = 5;
$text = $_REQUEST['texting'];
$text2 = $_REQUEST['texting2'];
$text3 = $_REQUEST['texting3'];
$text4 = $_REQUEST['texting4'];
$text5 = $_REQUEST['texting5'];
$leftTextPos = ( $width - imagefontwidth(5)*strlen($text)-460);
$leftTextPos = ( $width - imagefontwidth(5)*strlen($text2)-460);
$leftTextPos = ( $width - imagefontwidth(5)*strlen($text3)-460);
$leftTextPos = ( $width - imagefontwidth(5)*strlen($text4)-460);
$leftTextPos = ( $width - imagefontwidth(5)*strlen($text5)-460);
$text = $_REQUEST['texting'];
$text2 = $_REQUEST['texting2'];
$text3 = $_REQUEST['texting3'];
$text4 = $_REQUEST['texting4'];
$text5 = $_REQUEST['texting5'];
imagestring($im, $font2, $leftTextPos, $height-100, "$text", $color);
imagestring($im, $font, $leftTextPos, $height-82, "Guild: $text2", $color2);
imagestring($im, $font, $leftTextPos, $height-66, "PvP Rank: $text4", $color);
imagestring($im, $font, $leftTextPos, $height-51, "Level: $text3", $color2);
imagestring($im, $font, $leftTextPos, $height-36, "Server: $text5", $color);
header("Content-Type: image/png");
header('Content-Disposition: attachment; filename="signature.png"');
imagepng($im);
imagedestroy($im);
?>
