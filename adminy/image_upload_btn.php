<?php
session_start();

  $btncount=$_GET['piccount'];
  $noofbox=$_GET['noofbox'];
$var='';
$start=($noofbox-$btncount)+1;
//echo "No of box=".$btncount. "Total Box  =".$noofbox. "start with=".$start;




for( $i=$start ;$i<=$noofbox;$i++){

$var= $var . '

<div class="row-form">
          <div class="span2">Image:</div>
          <div class="span4">
            <div class="fileupload fileupload-new " data-provides="fileupload">
                <div class="fileupload-new thumbnail span2" >
                <img src="" width="100%"/>
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
                <input type="file" name="pro_image'. $i.'" id="pro_image'. $i.'" /></span>
                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
           </div>
       </div>';





}

echo $var;
?>