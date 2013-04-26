<?php
function afficheImage($imageNameComp, $width, $height){
	$imagePath = explode("/", $imageNameComp);
	$imageName = explode(".", $imagePath[count($imagePath)-1])[0];
	$destImg = "images/mini/".$imageName."_".$width."x".$height.".jpeg";
	if (file_exists($destImg)){
		$imgDest = imagecreatefromjpeg ($destImg);
		imagejpeg($imgDest, $destImg);
		echo '<img src="'.$destImg.'" />';
	}else{
		$imgSrc = imagecreatefromjpeg ($imageNameComp);
		$size = getimagesize($imageNameComp);
		$widthOrig = $size[0];
		$heightOrig = $size[1];	
		if ($height == null){
			$height = ($heightOrig * $width)/$widthOrig;
		}
		if ($width == null){
			$width = ($widthOrig * $height)/$heightOrig;
		}
		print_r($size);
		$imgDest = imagecreate($width, $height);
		imagecopyresampled ($imgDest, $imgSrc, 0, 0, 0, 0, $width, $height, $widthOrig, $heightOrig);
		imagejpeg($imgDest, $destImg);
		echo '<img src="'.$destImg.'" />';
	}
}