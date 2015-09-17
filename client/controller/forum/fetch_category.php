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
	
	$results = $mysqli_conn->query("SELECT COUNT(*) FROM tblforumcategory where forumCatStatus = 1");
	$get_total_rows = $results->fetch_row(); 
	$total_pages = ceil($get_total_rows[0]/$item_per_page);
	$page_position = (($page_number-1) * $item_per_page);
	$results = $mysqli_conn->query("SELECT * FROM tblforumcategory where forumCatStatus = 1 ORDER BY forumCatID ASC LIMIT $page_position, $item_per_page");
	
	while($row = $results->fetch_assoc()) 
	{	
	$topicresults = $mysqli_conn->query("SELECT * FROM tbltopic where topicStatus = 1");
echo '	
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="panel panel-info">
	<div class="panel-heading clearfix">
		<h1 class="panel-title pull-left"><big><big><big><b>STI Alumni Forum</b></big></big></big></h1>
	</div>	

	<div class="panel-body">	
	<div class="panel panel-default">
	
	<div class="panel-heading">
		<h3 class="panel-title"> '.$row['forumCatTitle'].' </h3>		
	</div>
	
<div class="panel-body">

<p class="col-md-5"><i class="fa fa-tablet fa-fw"></i><b>Topic Title</p>
<p class="col-md-2"><i class="fa fa-thumb-tack fa-fw"></i>Posts</p>
<p class="col-md-2"><i class="fa fa-reply fa-fw"></i>Replies</p>
<p class="col-md-3"><i class="fa fa-calendar fa-fw"></i>Date Created</b></p>';
	while($tpc = $topicresults->fetch_assoc()) 
	{
		if($row['forumCatID'] == $tpc['forumCatID'])
		{
		echo '';
		echo '<p class="col-md-5"><a href="forum.php?page=topic&action=display&topicid='.$tpc["topicID"].'"><i class="fa fa-link fa-fw"></i>'.$tpc["topicTitle"].'</p></a>';	
		include_once "query.php";
		$q = new query;
		$post = $tpc["topicID"];
		$post = $q->posts($post);
		$reply = $tpc["topicID"];
		$reply = $q->replies($reply);
		echo '<p class="col-md-2" ><i class="fa fa-thumb-tack fa-fw"></i>&nbsp;&nbsp;&nbsp;'.$post.' </p>';
		echo '<p class="col-md-2"><i class="fa fa-reply fa-fw"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$reply.'</p>';
		echo '<p class="col-md-3">&nbsp;'.$tpc["dateCreated"].'</p>';			
		}
		else 
		{}
	}

	echo '</div>
	</div>
	</div>		
</div>
</div>
</div></div></div></div>';

	}  
	
	

	echo '<div class="col-md-9">';
	echo '</div>';
	echo '<div class="col-md-3">';
	echo paginate_function($item_per_page, $page_number, $get_total_rows[0], $total_pages);
	echo '</div><br/><br/>';
	
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

