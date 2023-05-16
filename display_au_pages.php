<?php

	error_reporting(E_ERROR);

	function findLastPage($url) {
	  $min = 1;
	  $max = 100;
	  while ($min <= $max) {
	    $mid = floor(($min + $max) / 2);
	    $testUrl = str_replace("/01/hdimage.jpg","/".sprintf('%02d', $mid)."/hdimage.jpg",$url);
	    $response = @file_get_contents($testUrl);
	    if ($response === false) {
	      $max = $mid - 1;
	    } else {
	      $min = $mid + 1;
	    }
	  }
	  return $max;
	}

	if (empty($_POST['images'])){

		$images = array();
		$imageNameToSave = array();

		$filenamedate = date('Y-m-d',time());
		$dateForLinks = date('Ymd',time());

		//$paperStringFull = Array("agra-city","aligarh-city","almora","ambala","ambedkar-nagar","amethi","jpnagar","auraiya","faizabad","azamgarh","badaun","baghpat","bahraich","balia","balrampur","banda","barabanki","bareilly-city","basti","bhadohi","bhiwani","bhopal","bijnor","bilaspur","bulandsahar","chamba","chandauli","chandigarh-city","charkhi-dadri","dehradun-city","delhi-city","deoria","etah","etawa","faridabad","farrukhabad","fatehabad","fatehpur","firozabad","garhwal","ghaziabad","trans-hindon-area","ghazipur","gonda-balrampur","gorakhpur-city","greater-noida","gurgaon","hamirpur-dharamshala","hamirpur","hapur","hardoi","haridwar","hathras","hisar","jalandhar","jalaun","jammu-city","jounpur","jhajjar","jhansi-city","jind","kaithal","kangra","kannauj","kanpur-ghatampur","kanpur-city","karnal","kasganj","kathua","kaushambi","kotdwar","kullu","kurukshetra","kushinagar","khiri","lalitpur","lucknow-city","mharajgunj","mainpuri","mandi","mathura","mau","meerut-city","mirzapur","mohali","moradabad-city","muzaffarnagar","haldwani","narnaul","noida","panchkula","panipat","pilibhit","pithoragarh","pratapgarh","allahabad-city","gangapar","prayagraj-naini","raebareli","rajasthan","rampur-dharamshala","rampur","rewari","rishikesh","rohtak-city","roorkee","saharanpur-city","sambhal","santkabirnagar","shahjahanpur","shimla","siddharthnagar","sirmaur","sirsa","sitapur","solan","sonbhadra","sonipat","sultanpur","udhampur","udhamsingh-nagar","una","unnao","varanasi-city","vikas-nagar","yamuna-nagar");

		$paperString = Array("agra-city","ambala","bhopal","bilaspur","chandigarh-city","dehradun-city","delhi-city","faridabad","ghaziabad","gurgaon","haridwar","jalandhar","jammu-city","jhansi-city","kanpur-city","kurukshetra","lucknow-city","meerut-city","mohali","moradabad-city","noida","allahabad-city","shimla","varanasi-city");

		echo '<div id="crawlinfo"></div>';

		for($edition=0;$edition<count($paperString);$edition++){

			$response = file_get_contents("https://epaper.amarujala.com/".$paperString[$edition]."/".$dateForLinks."/01.html?format=img&ed_code=".$paperString[$edition]);

			$a = explode('/hdimage.jpg"',$response);
			$b = explode('<link rel="preload" href="',$a[0]);
			$imageLinkPage1 = $b[1]."/hdimage.jpg";

			$lastPage = findLastPage($imageLinkPage1);

			$number = 1;

			for($i=1;$i<=$lastPage;$i++){

				$pgImageURL = str_replace("/01/hdimage.jpg","/".sprintf('%02d', $i)."/hdimage.jpg",$imageLinkPage1);

				array_push($images,$pgImageURL);
				$filepath = "AU_".explode("-",$paperString[$edition])[0]."_".$filenamedate."_".$number."_hin.jpg";
				array_push($imageNameToSave,$filepath);

				echo '<script>document.getElementById("crawlinfo").innerHTML = "Crawling through: '.explode("-",$paperString[$edition])[0].' Page '.$number.'"</script>';
				ob_flush();
				flush();

				$number++;	

			}

		}
	}
	else{
		$images = explode(',', $_POST['images']);
		$imageNameToSave = explode(',', $_POST['imageNameToSave']);
	}
	$num_images = count($images);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-R5XEKj5P3q5uOITrB07uxwRQ2zHvNnL7tMNf+yozjmmiX3qyx5KMVPb/8+pxpsuMGGVdWXm1MzPNVn0EAni/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="display_images.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.12/css/jquery.Jcrop.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.12/js/jquery.Jcrop.min.js"></script>
	<style>
	.previews {
	     width: 550px;
	     .source {
	       float: left;
	       overflow: hidden;
	       img {
	         //max-width: 400px;
	         //height: auto;
	       }
	     }
	     .crop {
	       float: right;
	       overflow: hidden;
	       img {
	         border: 1px solid black;
	       }
	     }
	   }
	.jcrop-holder img{
	         object-fit: contain !important;
	         width: 100%;
	         max-width: 500px;
	         height: 400px;
	       }
	   .jcrop-holder,.crop{
	       width: 500px;
	       position: relative;
	       height: 400px;
	       aspect-ratio: 1/1;
	   }
	   .crop img{
	       object-fit: contain !important;
	       width: 500px;
	       height: 350px;
	       aspect-ratio: 1/1;
	   }
	    .previews {
	      width: 100%;
	       height: 500px;
	       overflow-y: auto;
	   }
	   .jcrop-holder>div{
	       height: initial;
	   }
	 #loader {
	  position: fixed;
	  left: 0;
	  top: 0;
	  width: 100%;
	  height: 100%;
	  z-index: 9999;
	  background: #0000006e url('new_loader.gif') no-repeat center center;
	}

	/* Hide the loader element by default */
	#loader.hidden {
	  display: none;
	}
	</style>
</head>
<body>
	<div class="filter-label">
		<label for="filter">Filter:</label>
		<span id="filter-count"><?php echo "(" . $num_images . " of " . $num_images . ")"; ?></span>
	</div>
	<div>
		<input type="text" id="filter" name="filter" class="filter-input">
		<a href="javascript:void(0)" onclick="clear_au_folder()" class='btn btn-primary' style="float:right;">Clear AU Folder</a>
	</div>
	<div style="margin-bottom: 20px;"></div>
	
		<div class="gallery">

		<?php

			$i=0;
			for($i=0;$i<count($images);$i++){

				$image = $images[$i];
				$filename = $imageNameToSave[$i];

				echo '<div class="image" id="'.$filename.'"><img class="thumbnail" src="' . $image . '" alt="' . $filename . '" onclick = initCropper("'.$image.'","'.$filename.'")><div class="filename">' . $filename . '&nbsp;&nbsp;<a onclick=saveFullPage("'.$image.'","'.$filename.'") style="margin-left: 100px;border: 2px solid green;padding: 5px;border-radius: 5px;cursor: pointer;">Save Full Page</a></div></div>';
			}
		?>
	</div>
	<form method="POST" action="display_au_pages.php" id="submit_form">
		<input type="hidden" name="image_url" id="image_url">
		<input type="hidden" name="file_name" id="file_name">
		<input type="hidden" name="after_edit_cropped_imge" id="after_edit_cropped_imge">
		<input type="hidden" name="action" id="action">
		<input type="hidden" name="images" value="<?php echo implode(',', $images); ?>">
		<input type="hidden" name="imageNameToSave" value="<?php echo implode(',', $imageNameToSave); ?>">
		<button type="submit" style="display:none;" ></button>
	</form>
	<div id="loader"></div>
	<div class="modal fade" id="edit_image_ad_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="width:900px;">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Image Edit</h5>
					<button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="edit_image">
					<div class="previews">
						<div class="source">
							<h3>Source image</h3>
							<div id="image_input"></div>
							<div id="image_input_original" style="display:none;"></div>
						</div>
						<div class="crop">
							<h3>Crop preview</h3>
							<img id="image_output" />
							<img id="image_output_original_size" style="display:none;"/>
							<input type="hidden" id="edit_file_name" name = "edit_file_name">
						</div>
					</div>
				</div>  
				<div class="modal-footer">
					<a href="javascript:void(0)" class="btn btn-secondary" onclick="update_image()">Save</a>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
		  $("#loader").fadeOut();
		});

		// claer au image folder
		function clear_au_folder()
		{
			$("#action").val('Clear_au_image_folder');
		    var formData = $("#submit_form").serialize();
		    $.ajax({
				type: 'POST',
				url: 'au_ajax.php',
				data: formData,
				beforeSend:function()
	            {
	                $("#loader").fadeIn();
	            },
				success: function(response) {
					$("#loader").fadeOut();
					alert(response);
				},
				error: function(xhr, status, error) {
					$("#loader").fadeOut();
					alert("Faced an error");
				}
			});
   		}

		// update cropped image
		function update_image()
		{
			$("#after_edit_cropped_imge").val($("#image_output_original_size").attr('src'));
			$("#action").val('update_cropped_image');
		    var formData = $("#submit_form").serialize();
		    $.ajax({
				type: 'POST',
				url: 'au_ajax.php',
				data: formData,
				beforeSend:function()
	            {
	                $("#loader").fadeIn();
	            },
				success: function(response) {
					$("#loader").fadeOut();
					alert("Cropped Successfully");
					$("#edit_image_ad_modal").modal('hide');
					setTimeout(document.getElementById("file_name").scrollIntoView({
					   behavior: 'smooth'
					 }),2000);
					document.getElementById("modal").style.display = "none";
				},
				error: function(xhr, status, error) {
					$("#loader").fadeOut();
					alert("Faced an error");
				}
			});
		}

		// download image on server

		function saveFullPage(image_name,filename){
			$("#image_url").val(image_name);
			$("#file_name").val(filename);
			$("#action").val('save_full_page');
		    var formData = $("#submit_form").serialize();
		    $.ajax({
				type: 'POST',
				url: 'au_ajax.php',
				data: formData,
				beforeSend:function()
	            {
	                $("#loader").fadeIn();
	            },
				success: function(response) {
					$("#loader").fadeOut();
					alert("Full Page Saved For Processing");
				},
				error: function(xhr, status, error) {
					$("#loader").fadeOut();
					alert("Faced an error");
				}
			});
		}			

		function initCropper(image_name,filename){
			$("#image_url").val(image_name);
			$("#file_name").val(filename);
			$("#action").val('upload_images_on_server');
		    var formData = $("#submit_form").serialize();
		    $.ajax({
				type: 'POST',
				url: 'au_ajax.php',
				data: formData,
				beforeSend:function()
	            {
	                $("#loader").fadeIn();
	            },
				success: function(response) {
					var image_url ='./au_images/'+filename;
					var file_name = filename;
					cropped_images(image_url,file_name);
				},
				error: function(xhr, status, error) {
					$("#loader").fadeOut();
					alert("Faced an error");
				}
			});
		}
		var multiplyFactor;
		// Crop Images
		function cropped_images(image_name,filename)
		{
			$("#image_input").html("");
			$('#image_output').attr('src','');
			$("#image_url").val(image_name);
			$("#file_name").val(filename);
			$("#edit_file_name").val(filename);

			var imageUrl = image_name;
			var maxWidth = 500;

			var image = new Image();

			image.onload = function() {

				var canvasinput = document.createElement('canvas');
				var canvasOriginalSize = document.createElement('canvas');

				var width = image.width;
				var height = image.height;

				multiplyFactor = 1;

				if (width > maxWidth) {
					height *= maxWidth / width;
					multiplyFactor = maxWidth / width;
					width = maxWidth;
				}

				canvasinput.width = width;
				canvasinput.height = height;
				canvasOriginalSize.width = image.width;
				canvasOriginalSize.height = image.height;

				var ctx = canvasinput.getContext('2d');
				var ctxOriginal = canvasOriginalSize.getContext('2d');

				ctx.drawImage(image, 0, 0, image.width, image.height, 0, 0, width, height);
				ctxOriginal.drawImage(image,0,0,image.width, image.height, 0, 0, image.width, image.height);


				$('#image_input').html(['<img src="', canvasinput.toDataURL(), '"/>'].join(''));
				$('#image_input_original').html(['<img src="', canvasOriginalSize.toDataURL(), '"/>'].join(''));
				$("#loader").fadeOut();
				$("#edit_image_ad_modal").modal('show');

				var img = $('#image_input img')[0];
				var imgOriginal = $('#image_input_original img')[0];

				var canvasoutput = document.createElement('canvas');
				var canvasOriginalForOutput = document.createElement('canvas');

				var ctx = canvasoutput.getContext('2d');
				var ctxOriginalForOutput = canvasOriginalForOutput.getContext('2d');

				$('#image_input img').Jcrop({
					bgColor: 'black',
					bgOpacity: .6,
					onSelect: imgSelect
				});

				$('#image_input_original img').Jcrop({
					bgColor: 'black',
					bgOpacity: .6,
					onSelect: imgSelect
				});

				function imgSelect(selection) {

					myx = selection.x / multiplyFactor;
					myy = selection.y / multiplyFactor;
					myw = selection.w / multiplyFactor;
					myh = selection.h / multiplyFactor;

					canvasoutput.width = selection.w;
					canvasoutput.height = selection.h;

					canvasOriginalForOutput.width = myw;
					canvasOriginalForOutput.height = myh;

					ctx.drawImage(img, selection.x, selection.y, selection.w, selection.h, 0, 0, canvasoutput.width, canvasoutput.height);
					ctxOriginalForOutput.drawImage(imgOriginal, myx, myy, myw, myh, 0, 0, canvasOriginalForOutput.width, canvasOriginalForOutput.height);

					$('#image_output').attr('src', canvasoutput.toDataURL());
					$('#image_output_original_size').attr('src', canvasOriginalForOutput.toDataURL());
				}
			};
			image.src = imageUrl;
		}

		// Filter images by filename

		function filterImages() {
			var filter = document.getElementById("filter").value.toLowerCase();
			var images = document.querySelectorAll(".gallery .image");
			var num_matches = 0;

			for (var i = 0; i < images.length; i++) {
				var filename = images[i].querySelector(".filename").textContent.toLowerCase();
				if (filename.includes(filter)) {
					images[i].style.display = "block";
					num_matches++;
				} else {
					images[i].style.display = "none";
				}
			}

			// Update the filter count
			document.getElementById("filter-count").textContent = "(" + num_matches + " of " + <?php echo $num_images; ?> + ")";
		}

		document.getElementById("filter").addEventListener("blur", filterImages);

		// Call the function on page load
		window.addEventListener("load", filterImages);

	</script>

</body>
</html>