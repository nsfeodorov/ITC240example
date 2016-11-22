<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<?php
if(isset($_GET['day']))	
{
$myDay =$_GET['day'];

}else{

//show today!
$myDay = date("l");
}
?>

<div id="site_content">	
	  
<div id="content">
        	
		<div class="content_item">  	  
		  <h3>Welcome to Sprockets</h3>
	
            <p>Mention Sprockets and recieve a discount at Largebucks coffee on their daily specials.  See a list of their daily specials below.</p>
        
        <p><a href="largebucks-coffee/index.php?date=Monday">Monday</a></p>
        <p><a href="largebucks-coffee/index.php?date=Tuesday">Tuesday</a></p>
        <p><a href="largebucks-coffee/index.php?date=Wednesday">Wednesday</a></p>
        <p><a href="largebucks-coffee/index.php?date=Thursday">Thursday</a></p>
        <p><a href="largebucks-coffee/index.php?date=Friday">Friday</a></p>
        <p><a href="largebucks-coffee/index.php?date=Saturday">Saturday</a></p>
        <p><a href="largebucks-coffee/index.php?date=Sunday">Sunday</a></p>
        
		  
		</div><!--close content_item-->
		
	    <div class="sidebar_container">       
		
		  <div class="sidebar">
            <div class="sidebar_item">
              <h2>New Website</h2>
              <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
            </div><!--close sidebar_item--> 
          </div><!--close sidebar-->     		
		
        </div><!--close sidebar_container-->			
      
	  </div><!--close content--> 
  
  	</div><!--close site_content--> 


	

        
	  
	
  
    <!-- footer starts here -->
    
 <?php include 'includes/footer.php';?>