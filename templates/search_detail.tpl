<div class="span6 booking-blocks">
             <div class="pull-left booking-img da-img ">
               <a  onclick="displayPackDetails({$pack_id},'{$pack_category}')"> <img src={$pack_image} alt=""></a>
                <ul class="unstyled">
                   <li><i style=color:#FD7800 > {$category_desc}</i></li>
                   <li> {$pack_title}</li>
                </ul>
             </div>
             <div style="overflow:hidden;">
                <h2><a class="btn-more hover-effect" onclick="displayPackDetails({$pack_id},'{$pack_category}')">{$pack_title}</a></h2>
                <ul class="unstyled inline">
                   <li><i class="icon-star"></i></li>
                   <li><i class="icon-star"></i></li>
                   <li><i class="icon-star"></i></li>
                   <li><i class="icon-star"></i></li>
                   <li><i class="icon-star-empty"></i></li>
                </ul>
                <p>{$pack_desc}. <a class="btn-more btn-u hover-effect" onclick="displayPackDetails({$pack_id},'{$pack_category}')"> read more</a></p>
             </div>
          </div>