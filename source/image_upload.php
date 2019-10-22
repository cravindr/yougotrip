<?php

/*
	FUNCTIONS:-
	-----------
	1. imageUpload()
	2. renameImage()
*/

/*
 *	imageUpload()
 *	-------------
 *
 *	This function helps to upload images to certain folder using browse button
 *
 *  Paramaters :-
 *  ------------
 *  1. $image_name - this is the name given to input box of type file [ex. <input type="file" name="image" />]
 *	2. $ext		   - Not used still, but this parameter can be changed for dynamic folder name to pass
 *
 *
 *	Return Paramater :-
 *	------------------
 *	$img_name_modified -- this function returns modified image name with folder name, which is url of image stored
 *
 */
 
	function imageUpload($image_name,$ext){
		
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES[$image_name]["name"]);
		$extension = end($temp);
			
		
		//&& ($_FILES[$image_name]["size"] < 200000)
		
		if ((($_FILES[$image_name]["type"] == "image/gif")
		|| ($_FILES[$image_name]["type"] == "image/jpeg")
		|| ($_FILES[$image_name]["type"] == "image/jpg")
		|| ($_FILES[$image_name]["type"] == "image/pjpeg")
		|| ($_FILES[$image_name]["type"] == "image/x-png")
		|| ($_FILES[$image_name]["type"] == "image/png"))
		&& in_array($extension, $allowedExts))
		  {
			 
			  if ($_FILES[$image_name]["error"] > 0)
				{
					//echo "Return Code: " . $_FILES[$image_name]["error"] . "<br>"; 
					return 0; // error code 
				}
			  else
				{
				
					if (file_exists("user_image/" . $_FILES[$image_name]["name"]))
					  {
					  		//echo $_FILES[$image_name]["name"] . " already exists. ";
							//return 0; 
							$imgname =  $_FILES[$image_name]["name"];
							return renameImage(0,$imgname,$image_name); 
							
					  }
					else
					  {						  	
						  	//$img_name_modified = Date('YmdHis');
							//$img_name_modified = "user_image/".$img_name_modified.$ext.".".$extension;
							$img_name_modified = "user_image/". $_FILES[$image_name]["name"];
						    move_uploaded_file($_FILES[$image_name]["tmp_name"],$img_name_modified);
							
							//echo "user_image/" . $_FILES[$img_name_modified]["name"];
							
						    //echo "Stored in: " . "user_image/" . $_FILES[$image_name]["name"];
							return $img_name_modified; // image successfully uploaded
					  }
				}
		  }
		else
		  {
			//echo "Invalid file";
			return 0; // error code 
		  }
	}
	
	
/*
 *	renameImage()
 *	-------------
 *
 *	This function adds incremented number at end if many images have same name
 *
 *  Paramaters :-
 *  ------------
 *  1. $v		   -
 *	2. $imgname	   - 
 *	3. $image_name -
 *
 *	Return Paramater :-
 *	------------------
 *	$img_name_modified -- this function returns modified image name 
 *
 */
 
	function renameImage($v,$imgname,$image_name){
		
		$temp = explode(".", $imgname);
		$extension = end($temp);
		$imgshort = $temp[0];
		$imgext = $imgshort.$v; 
		$imgfull = $imgext.".".$extension;
		if (file_exists("user_image/" .$imgfull))
		{
			$v = $v +1;
			return renameImage($v,$imgname,$image_name);
		}else{
			
			$img_name_modified = "user_image/". $imgfull;
			move_uploaded_file($_FILES[$image_name]["tmp_name"],$img_name_modified);
			return $img_name_modified;
		}
		
	}

?>