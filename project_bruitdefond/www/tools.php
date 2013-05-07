<?php
function afficheImage($imageNameComp, $width, $height){
	$imagePath = explode("/", $imageNameComp);
	$imageName = explode(".", $imagePath[count($imagePath)-1])[0];
	$size = getimagesize($imageNameComp);
	$widthOrig = $size[0];
	$heightOrig = $size[1];	
	if ($height == null){
		$height = round(($heightOrig * $width)/$widthOrig);
	}
	if ($width == null){
		$width = round(($widthOrig * $height)/$heightOrig);
	}
	$destImg = "";
	for($i = 0; $i < count($imagePath) -1; $i++){
		$destImg .= $imagePath[$i]."/";
	}
	$destImg .= "mini/".$imageName."_".$width."x".$height.".jpeg";
	if (!file_exists($destImg)){	
		$imgSrc = imagecreatefromjpeg ($imageNameComp);
		$imgDest = imagecreatetruecolor($width, $height);
		imagecopyresampled ($imgDest, $imgSrc, 0, 0, 0, 0, $width, $height, $widthOrig, $heightOrig);
		imagejpeg($imgDest, $destImg, 100);
	}
	echo '<a href="'.str_replace(" ", "%20", $imageNameComp).'"><img src="'.str_replace(" ", "%20", $destImg).'" alt="'.$imageName.'" /></a>';
}
