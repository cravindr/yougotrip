
function fnBuidPagination($pagecount,$pageid=0)
{
	
	
echo'	<div class="pagination pagination-centered">
            <ul> ';
			if($pageid==1)
			{
				echo '<li><a href="#">Prev</a></li>';			
			}
			else
			{
				$prepage=$pageid-1;
				echo "<li><a onclick='pagination($prepage)'>Prev</a></li>";
				//echo '<li><a href="#">$prepage</a></li>';
			}
			
			for($i=1; $pagecount>=$i;$i=$i+1)
			{
				if($i==$pageid)
				{
					echo "<li class='active'><a onclick='pagination($i)'>$i</a></li>";
				}
				else
				{
					echo "<li><a onclick='pagination($i)'>$i</a></li>";
				}
             
               
              
			}
			
			if($pagecount==$pageid)
			{
					echo '<li><a href="#">Next</a></li>';		
			}
			else
			{
				$nextpage=$pageid+1;
				echo "<li><a onclick='pagination($nextpage)'>Next</a></li>";		
			}

    echo'        </ul>  </div>';
}
