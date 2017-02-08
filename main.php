<!DOCTYPE html>
<?php
include 'functions.php';
$gelen=$_FILES["dosya"]["tmp_name"];
$hedef="images/".$_FILES["dosya"]["name"];
move_uploaded_file($gelen,$hedef);
$img = $hedef;
$pieces = explode(".", $img);
if(strtolower($pieces[1])=="png"){
	$im = imagecreatefrompng($img);
}
else if(strtolower($pieces[1]=="jpg")||strtolower($pieces[1]=="jpeg")){
	$im = imagecreatefromjpeg($img);
}
else{
	echo "Only png and jpeg files are supported.";
	@unlink($img);
	exit;
}
list($width, $height, $type, $attr) = getimagesize($img);
$i=0;
$gd = imagecreatetruecolor($width, $height);
echo "Name : ".$img."<br>";
echo "Width : ".$width."<br>";
echo "Height : ".$height."<br>";
echo "Working";
$function = $_POST['function'];
//echo "<table>";
for((int) $start_x=0;$start_x<$width;$start_x++){
	for((int) $start_y=0;$start_y<$height;$start_y++){		
		$color_index = imagecolorat($im, $start_x, $start_y);
		$color_tran = imagecolorsforindex($im, $color_index);
		$red = $color_tran["red"];
		$green = $color_tran["green"];
		$blue = $color_tran["blue"];
		$image_get[$start_x][$start_y] =$red.$green.$blue;
		$colors=$function($red,$green,$blue);
		$color = imagecolorallocate($gd,$colors[0],$colors[1],$colors[2]); 
		//echo '<td width="1px" height="1px">.</td>';
		imagesetpixel($gd,$start_x,$start_y, $color);
	}
	//echo "</tr>";
}
$count_arr = array_icount_values($image_get);
//print_r($count_arr);
//echo "</table>";
$new_image=$pieces[0].'_new.png';
imagepng($gd,$new_image);
imagedestroy($gd);
echo "<br> Done <br>";
echo '<a href="view.php?img='.$img.'&new='.$new_image.'">View</a>'

?>