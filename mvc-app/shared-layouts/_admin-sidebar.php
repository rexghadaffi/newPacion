
<div class="col-md-2">
    <div class="list-group">	
        <a id="navHome" class="list-group-item" href="Home.php"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>
       <?php
        include "../core/database.php";

        $admin = $_SESSION['user'];
        $result5 = mysqli_query($con, "SELECT * FROM tblcompanyuser where userName = '$admin' ");
                  	$row5  = mysqli_fetch_array($result5);
                   	if ($row5["userTypeID"] == 1) {
                        echo '<a id="navAdmin" class="list-group-item" href="admin_record.php?control=view_record&func=listall"><i class="fa fa-users fa-fw"></i>&nbsp; Admin</a>
        ';  
                        echo '<a id="navType" class="list-group-item" href="forum_record.php?control=page&func=display"><i class="fa fa-user-secret fa-fw"></i>&nbsp; Forum</a>';
                         
                            }
				   
       ?>
      
     		<a id="navClient" class="list-group-item" href="user_record.php?control=view_record&func=listall"><i class="fa fa-graduation-cap fa-fw"></i>&nbsp; Alumni</a>
		<a id="navNews" class="list-group-item" href="news_record.php?control=view_record&func=listall"><i class="fa fa-newspaper-o fa-fw"></i>&nbsp; News</a>     
        <a id="navJobs" class="list-group-item" href="job_record.php?control=view_record&func=listall"><i class="fa fa-suitcase fa-fw"></i>&nbsp; Jobs</a>          
        <a id="navActivities" class="list-group-item" href="activities_record.php?control=view_record&func=listall"><i class="fa fa-birthday-cake fa-fw"></i>&nbsp; Activities</a>   
          <a id="navContent" class="list-group-item" href="edit_content.php"><i class="fa fa-edit fa-fw"></i>&nbsp; Front-end Content</a>      
    <a id="navCourses" class="list-group-item" href="courses.php"><i class="fa fa-edit fa-fw"></i>&nbsp; Courses Maintenance</a>
    <a id="navDenied" class="list-group-item" href="deniedalumni.php"><i class="fa fa-edit fa-fw"></i>&nbsp; Denied Alumni</a>

    </div>
</div>