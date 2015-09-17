<?php
if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	include("config.inc.php"); 
	$item_per_page = 3; 
	if(isset($_POST["page"])){
		$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); 
		if(!is_numeric($page_number)){die('Invalid page number!');} 
	}else{
		$page_number = 1; 
	}
	
	$results = $mysqli_conn->query("SELECT COUNT(*) FROM tblproducts");
	$get_total_rows = $results->fetch_row(); 
	$total_pages = ceil($get_total_rows[0]/$item_per_page);
	$page_position = (($page_number-1) * $item_per_page);
	$results = $mysqli_conn->query("SELECT * FROM tblproducts ORDER BY productID ASC LIMIT $page_position, $item_per_page");
	
	while($row = $results->fetch_assoc()) {		
	echo "<div class='col-md-9 col-lg-4'>";
	echo "<p class='col-xs-12'><b>".$row['productDesc']."</b></p>";
	echo "<p class='col-xs-12'>					
	<div class='recent-work-wrap'>
	<img alt ='' class='img-responsive img-thumbnail' src='Administrator/images/Products/".$row['Imagename']."' style='border-radius:5px; border:1px; height:200px; width:280px; border-color:blue;'/>
	<div class='overlay' style='background: transparent'> 
	<div class='recent-work-inner'>";
	 $imagelnk = "<img class='img-thumbnail' src='Administrator/images/Products/".$row['Imagename']."' width='400px' height='400px'>";
	echo '<a href="" id="previewdata" data-toggle="modal" data-target="#previewModal" data-img="'.$imagelnk.'">';
	echo "<i class='fa  fa-3x fa-eye' style='color: red; margin-top:95px; margin-left:75px;'></i></a>
	</div>
	</div>
	</div>
	</p>";			
		echo "<p class='col-xs-11' align='right'><b>&#8369; &nbsp;".number_format($row['productPrice'],2)."<b></p>";
		echo "<p class='col-xs-11' align='right'><button type='button' id='modaldata' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal'  data-areid='".$row['productID']."' data-productprice='".number_format($row['productPrice'],2)."' data-productpricehidden='".$row['productPrice']."' data-pricehidden='".$row['productPrice']."' data-productname='".$row['productDesc']."' data-special='".$row['productDescription']."' ><span class='fa fa-plus'></span> Add </button></p>";
		echo '</div>';	
	}  
	
	
	echo '<div class="container col-lg-11 col-lg-offset-8">';
	echo paginate_function($item_per_page, $page_number, $get_total_rows[0], $total_pages);
	echo '</div>';
}

function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
{
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ 
        $pagination .= '<ul class="pagination1">';
        
        $right_links    = $current_page + 2; 
        $previous       = $current_page - 1; 
        $next           = $current_page + 1; 
        $first_link     = true; 
        if($current_page > 1){
			$previous_link = ($previous==0)?1:$previous;
            $pagination .= '<li class="first"><a href="#" data-page="1" title="First">&laquo;</a></li>'; 
            $pagination .= '<li><a href="#" data-page="'.$previous_link.'" title="Previous">&lt;</a></li>'; 
                for($i = ($current_page-2); $i < $current_page; $i++){ 
                    if($i > 0){
                        $pagination .= '<li><a href="#" data-page="'.$i.'" title="Page'.$i.'">'.$i.'</a></li>';
                    }
                }   
            $first_link = false; 
        }
        
        if($first_link){ 
            $pagination .= '<li class="first active">'.$current_page.'</li>';
        }elseif($current_page == $total_pages){ 
            $pagination .= '<li class="last active">'.$current_page.'</li>';
        }else{
            $pagination .= '<li class="active">'.$current_page.'</li>';
        }
                
        for($i = $current_page+1; $i < 3 ; $i++){
            if($i<=$total_pages){
                $pagination .= '<li><a href="#" data-page="'.$i.'" title="Page '.$i.'">'.$i.'</a></li>';
            }
        }
        if($current_page < $total_pages){ 
				$next_link = ($i > $total_pages)? $total_pages : $i;
                $pagination .= '<li><a href="#" data-page="'.$next_link.'" title="Next">&gt;</a></li>';
                $pagination .= '<li class="last"><a href="#" data-page="'.$total_pages.'" title="Last">&raquo;</a></li>'; 
        }
        
        $pagination .= '</ul>'; 
    }
    return $pagination; 
}
?>

