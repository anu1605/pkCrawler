<?php

//https://marketing.buzzgully.com/marketing/Whatsapp/crawltoi.php?papername=TOI&city=Ahmedabad&date=20/04/2023&pg=6&position=3

error_reporting(E_ERROR);
set_time_limit(7200);

// $_REQUEST["date"] = '20/04/2023';

if(isset($_REQUEST["date"])) $date = $_REQUEST["date"];
else $date = date('d/m/Y',time());

$papers = array("TOI","ET","MT","Mirror");

for($paper=0;$paper<count($papers);$paper++){

	$papername = $papers[$paper];

	if(isset($_REQUEST["papername"]) AND $papername<>$_REQUEST["papername"]){
		echo "Skipping.... ".$papername."\n";
		continue;
	}

	if($papername == "TOI"){
		$cityname = array("Ahmedabad","Bangalore","Bhopal","Chandigarh","Chennai","Delhi","Goa","Hyderabad","Jaipur","Kochi","Kolkata","Lucknow","Mumbai");
		$citycode = array("toiac","toibgc","toibhoc","toicgct","toich","cap","toigo","toih","toijc","toikrko","toikc","toilc","toim");
		$lang = 'eng';
	}

	if($papername == "ET"){
		$cityname = array("Bangalore","Mumbai","Delhi","Kolkata");
		$citycode = array("etbg","etmc","etdc","etkc");
		$lang = 'eng';
	}

	if($papername == "MT"){
		$cityname = array("Nagpur","Mumbai","Pune","Sambhaji","Nashik");
		$citycode = array("mtnag","mtm","mtpe","mtag","mtnk");
		$lang = 'mar';
	}

	if($papername == "Mirror"){
		$cityname = array("Bangalore","Mumbai","Pune");
		$citycode = array("vkbgmr","vkmmir","pcmir");
		$lang = 'eng';
	}

	for($i=0;$i<count($citycode);$i++){

		if(isset($_REQUEST["city"]) AND $cityname[$i]<>$_REQUEST["city"]){
			echo "Skipping..... ".$cityname[$i]."\n";
			continue;
		}

		if($papername == "Mirror" AND $cityname[$i] == "Mumbai"){

			$date_array = explode("/", $date);
			$processdate = $date_formatted = $date_array[2] . "-" . $date_array[1] . "-" . $date_array[0];
			$dayofweek = date('l', strtotime($processdate));
			if($dayofweek<>'Sunday'){
				echo "There is no Mirror published from Mumbai on ".$dayofweek.", ".$date.". It publishes only on Sundays";
				continue;
			}

		}

		$number = 1;

		$date_array = explode("/", $date);
		$date_formatted = $date_array[2] . "/" . $date_array[1] . "/" . $date_array[0];

		$failedPageCount = 0;

		for ($pg = 1; $pg <= 40; $pg++) {

			if(isset($_REQUEST["pg"]) AND $pg<>$_REQUEST["pg"]){
				echo "Skipping Page..... ".$pg."\n";
				continue;
			}

			if($failedPageCount>3){
				echo "Seems Pages over. Skipping... ".$pg."\n";
				continue;
			}

			$imageFound = "No";

			for ($img = 1; $img <= 50; $img++) {

				if(isset($_REQUEST["position"]) AND $img<>$_REQUEST["position"]){
					echo "Skipping Position..... ".$img."\n";
					continue;
				}

				$url = "https://asset.harnscloud.com/PublicationData/".$papername."/".$citycode[$i]."/" . $date_formatted . "/Advertisement/".str_pad($pg,3,"0",STR_PAD_LEFT)."/".str_replace("/","_",$date)."_".str_pad($pg,3,"0",STR_PAD_LEFT)."_".str_pad($img,3,"0",STR_PAD_LEFT)."_".$citycode[$i].".jpg";

				//echo $url."\n";
				
				$img_size_array = getimagesize($url);
				$width = $img_size_array[0];

				if($width>0){

					$imageFound = "Yes";
					$failedPageCount = 0;

					if($width>200 and $width<250){

						$file_name = $papername."_" . $cityname[$i] . "_" . str_replace("/","-",$date_formatted) . "_" . $number . "_".$lang.".jpg";
						if(file_exists("/var/www/d78236gbe27823/marketing/Whatsapp/images/".$file_name)){
							echo $papername." => A file of width ".$width." with ".$file_name." already exists in images\n";
							$number++;
						}
						else if(file_exists("/var/www/d78236gbe27823/marketing/Whatsapp/images/processed/".$file_name)){
							echo $papername." => A file of width ".$width." with ".$file_name." already exists in processed images\n";
							$number++;
						}
						else{
							$response = file_get_contents($url);
							file_put_contents("/var/www/d78236gbe27823/marketing/Whatsapp/images/" . $file_name, $response);
							echo $papername." => A new file of width ".$width." is saved as ".$file_name."\n";
							$number++;
						}

					}
					else{

						echo $papername." => The image at position ".$img." On Page No. ".$pg." of ".$cityname[$i]." (".$citycode[$i].") is of width ".$width." and is not a classified image\n";

					}

				}
				else{

					echo $papername." => There is no image at position ".$img." On Page No. ".$pg." of Edition ".$cityname[$i]." (".$citycode[$i].")\n";					
				}
				ob_flush();
				flush();
			}

			if($imageFound=="No") $failedPageCount++;
		}
	}
}
?>