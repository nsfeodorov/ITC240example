<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>LARGEBUCK$ Coffee</title>
    <meta name="robots" content="noindex,nofollow" />
	<!-- below is a google font, go to https://www.google.com/fonts to get yours! -->
	<link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<link id="mainStylesheet" rel="stylesheet" href="css/default.css" />
        
    
    <?php
    
    date_default_timezone_set("America/Los_Angeles");
    
    $dayOfWeek = date("l");

    switch ($dayOfWeek) {
    
        case "Monday":   
        $color = "#000066";
        $pic = "images/monday.jpg"; 
        $alt="Triple Shot Espresso tastes great on a Monday morning!";
        $sentence = "Monday's Coffee Special:";
        $coffee = "Triple Shot Espresso";
        
        break;
    
        case "Tuesday":   
        $color = "#006666";
        $pic = "images/tuesday.jpg"; 
        $alt="Our Mocha tastes great on a Tuesday!";
        $sentence = "Tuesdays's Coffee Special:";
        $coffee = "Mocha";
            
        break;    
    
        case "Wednesday":   
        $color = "#660066";
        $pic = "images/wednesday.jpg"; 
        $sentence = "Wednesday's Coffee Special:";
        $coffee = "Tall Americano";
            
        break;    
    
        case "Thursday":   
        $color = "#cc6699";
        $pic = "images/thursday.jpg";
        $alt="Our Caramelized Honey Latte tastes great on a Thursday!";
        $sentence = "Thursday's Coffee Special:";
        $coffee = "Caramelized Honey Latte";
        
        break;
    
        case "Friday":   
        $color = "#FF7518";
        $pic = "images/friday.jpg";
        $alt="Our Pumpkin Spice Latte tastes great on a Friday!";
        $sentence = "Friday's Coffee Special:";
        $coffee = "Pumpkin Spice Latte";
            
        break;    
    
        case "Saturday":   
        $color = "#ffcc66";
        $pic = "images/saturday.jpg";
        $alt="Our Cinnamon Dolce Latte tastes great on a Saturday!";
        $sentence = "Saturday's Coffee Special:";
        $coffee = "Cinnamon Dolce Latte";
            
        break;    
    
        case "Sunday":   
        $color = "#66ccff";
        $pic = "images/sunday.jpg"; 
        $alt="Our Espresso Con Panna tastes great on a Sunday!";
        $sentence = "Sunday's Coffee Special:";
        $coffee = "Espresso Con Panna";
    
}
    
    ?>
    
    
    <style type="text/css">
        
        html {background-color:<?php echo $color ?>}
        
		.masthead{
			font-family: 'Holtwood One SC', serif; /* required for google font */
			font-size:3em;
		}
	
		#logo{
			float:right;
			display:inline-block;
			padding:2px;
			max-width:100px; /* actual size of image */
			width:20%; /* approximate size taken on screen in maximum view */
		}
	
		#coffee {
			float:left;
			display:inline-block;
			padding:20px;
			max-width:300px; /* best if actual size of image */
			width:33%; /* approximate size taken on screen in maximum view */
		}

        h3.slogan{
           font-style:italic; /* make the slogan italics */ 
        }
        
        h2 {color:<?php echo $color ?>}
        
        strong {color:<?php echo $color ?>}
        
    </style>
   
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>
<body>
	<header>
	    <img src="images/largebucks-logo.jpg" alt="You drink our coffee, we make large bucks!" class="flexible" id="logo" />
		<h1 class="masthead">LARGEBUCK$ COFFEE</h1>
		<nav>
			<ul>
				<li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
			</ul>
		</nav>
	</header>
    <main>
		 <header><h3 class="slogan">You drink our coffee, we make large bucks!</h3></header>
        <p>
   
   <img src="<?php echo $pic ?> " alt="photo of coffee" id="coffee" />
        
        <h2><?php echo $sentence ?> <?php echo $coffee ?> </h2> 
       
        <p><strong><?php echo $coffee ?></strong>--relax and enjoy. Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed.</p>
        
        <p>Enjoy our <?php echo $coffee ?> with a Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin.</p>

        <p><b>At LargeBuck$ we aspire to:</b>Aesthetic gentrify YOLO McSweeney's typewriter single-origin coffee. Slow-carb hella listicle lomo, Helvetica single-origin coffee butcher stumptown. Chambray try-hard church-key mumblecore, tote bag PBR cardigan. Retro Austin Brooklyn.</p>
		
		<p>
		Text provided by <a href="http://hipsum.co/" target="_blank">Hipster Ipsum</a>
		</p>
     </main>
    <footer>
      <small>&copy; 2014-<?php echo date("Y");?> All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer --> 
	
</body>
</html>


		 