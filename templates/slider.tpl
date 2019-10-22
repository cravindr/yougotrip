
<!--=== Slider ===-->
<div class="container">
 
<div class="row-fluid " style="background:#FCFCFC" >
<div class="span4 row-form  bg-light_oom "  >
	<div class="row-fluid">
        <form  class="bg-light_oom" action="searchtour.php" method="post">
        	
          <!-- <p  style="color:#F60;font-size:20px;" > Search Tour Packages</p>-->
          <img src="image/search_trour_packages.jpg" width="325" height="44" />
           
        
            
            
                
            <div >
                <label><strong>Package Type</strong></label>
                <select name="packtype" id="packtype" >
				</select>
            </div>
            
            <div >
               <label><strong>Location</strong></label>
                <input class=" validate[required,maxSize[100]]" type="text" name="city" placeholder="city">
            </div>
            <div >
            <select name="theme" id="theme" >
        	</select>
         </div>
         <div class="controls form-inline">

               <button class="btn-u pull-left" type="submit">Search</button>
         </div>
       </form>
       
            <hr />
    </div><!--/row-fluid-->

</div>

<div class="span8 ">
<div class="slider-inner">
    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <img src="image/yougotrip-slide1.jpg" alt="" />
        </div>
        <div class="da-slide">
            <img src="image/yougotrip-slide2.jpg" alt="" />
        </div>
        <div class="da-slide">
            <img src="image/yougotrip-slide3.jpg" alt="" />
        </div>
        
        
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>        
        </nav>
    </div><!--/da-slider-->
</div><!--/slider-->
<!--=== End Slider ===-->
</div>
</div>
</div>
</div>