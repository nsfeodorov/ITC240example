<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>


<div id="site_content">	
	  
<div id="content">
        	
		<div class="content_item">  	  
		  <h3>Customer Data</h3>
		  <p>
            
<?php  
$sql = "select * from test_Customers";

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results  
	while ($row = mysqli_fetch_assoc($result))
    {
	   echo "<p>";
	   //echo "FirstName: <b>" . $row['FirstName'] . "</b><br />";
	   //below should like to customer_view page and includes the link to the page
        echo '<a href="customer_view.php?id=' . $row['CustomerID'] . '">' . $row['FirstName'] . '</a><br />';
        echo "LastName: <b>" . $row['LastName'] . "</b><br />";
	   echo "Email: <b>" . $row['Email'] . "</b><br />";

        echo "</p>";
    }
}else{//no records
	echo '<div align="center">What! No customers?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database

?>
</p>          		  		
		  
            
            
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




<?php include 'includes/footer.php';?>