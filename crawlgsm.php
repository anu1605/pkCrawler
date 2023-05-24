<?php

	error_reporting(E_ERROR);
	set_time_limit(7200);
	require  "/var/www/d78236gbe27823/vendor/autoload.php";
	use thiagoalessio\TesseractOCR\TesseractOCR;

	$date = date('d-m-Y',time());
	$filenamedate = date('Y-m-d',time());

	$paperArray = array("ahmedabad","ahmedabad-east","gujarat-samachar-plus","mumbai","baroda","surat","rajkot","bhavnagar","bhuj","kheda-anand","gandhinagar","mehsana","sabarkantha","surendranagar","bharuch-panchmahal","vapi-valsad","bhavnagar-local","patan","banaskantha","junagadh","ravipurti");
	//$paperArray = array("baroda","rajkot");

	for($ppr=0;$ppr<count($paperArray);$ppr++){

		$number = 1;
		$url = "https://epaper.gujaratsamachar.com/".$paperArray[$ppr]."/".$date."/1";
		$response = file_get_contents($url);
		$a = explode("https://epaperstatic.gujaratsamachar.com/epaper/thumbnail/",$response);

		for($pagefinder=1;$pagefinder<count($a);$pagefinder++){

			$b = explode('">',$a[$pagefinder]);
			$pageimageurl = "https://epaperstatic.gujaratsamachar.com/epaper/".$b[0];

    		$image = file_get_contents($pageimageurl);

    		$filepath = "/var/www/d78236gbe27823/marketing/Whatsapp/images/GSM_".$paperArray[$ppr]."_".$filenamedate."_".$number."_guj.jpg";

    		$handle = fopen($filepath,"w");
    		fwrite($handle,$image);
    		fclose($handle);

			$x = 0;
			$y = 0;
			$width = 950;
			$height = 500;

			$cropped_image = crop_image($filepath, $x, $y, $width, $height);
			$tempFile = tempnam(sys_get_temp_dir(), 'tesseract_');
			imagejpeg($cropped_image, $tempFile);
			$text = (new TesseractOCR($tempFile))->run();
			unlink($tempFile);
			imagedestroy($cropped_image);

	    	if(strpos(strtoupper($text),"CLASSIFIEDS")){

				if(file_exists(str_replace("/images/","/images/processed/",$filepath))){
					echo "Grabbed a valid Classifieds page image from ".$pageimageurl." But the file already exists in processed files as ".$filepath."<br>";
					$number++;
					unlink($filepath);
				}
				else{
		    		echo "Grabbed a valid Classifieds page image from ".$pageimageurl." And dumped at ".$filepath."<br>";
					$number++;
				}

	    	}
	    	else {
	    		echo "Found a valid page image at ".$pageimageurl." but rejected as it doesn't seem to be a classifieds page<br>";
	    		unlink($filepath);
	    	}

	    	ob_flush();
	    	flush();
		}

	}

	function crop_image($source_path, $x, $y, $width, $height) {

	    $source_image = imagecreatefromjpeg($source_path);
	    $cropped_image = imagecreatetruecolor($width, $height);
	    imagecopy($cropped_image, $source_image, 0, 0, $x, $y, $width, $height);
	    imagedestroy($source_image);
	    return $cropped_image;

	}

?>