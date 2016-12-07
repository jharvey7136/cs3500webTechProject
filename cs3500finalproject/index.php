<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
    
      <!-- css -->
  <link rel="stylesheet" href="icons-css3-transitions-source/css/demo.css">

  <!-- modernizr -->
  <script src="icons-css3-transitions-source/js/common/modernizr.js"></script>
    
    
    <head> 
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" href="style/normalize.css">
        <link rel="stylesheet" href="style/main.css">
        <title>K-zoo Skate Zoo skatepark </title>

    </head>


<body>
    <div class="header">
            <div class="content">
                <div class="logo">
                    <img src="images/zoogifsm.gif" alt="Home" >
                </div>
                
                    <?php include("icons-css3-transitions-source/icons.html"); ?>
                
                <div class="nav">
                    <ul>
                        <li><a class="active" href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Park layout</a></li>
                        <li><a href="#">Live Stream</a></li>
                        <li><a href="#">Waiver</a></li>
                    </ul>

                </div>

            </div>
    </div>
    
<container> 
    
    <div id="wrapper">

		<h1>NEWS</h1>
		<hr />

		<?php
			try {

				$stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
				while($row = $stmt->fetch()){
					
					echo '<div>';
						echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
						echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
						echo '<p>'.$row['postDesc'].'</p>';				
						echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';
                        echo '<hr />';
					echo '</div>';

				}

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>
        
	</div>
    
    <div class="info">
        <h2>Hours: </h2>
            <b>3-9 Monday -Friday <br> 12-6 Saturday <br> 12-6 Sunday</b>
        <h2>Prices: </h2>
            <b>$6 Members <br> $11 Non-Members <br><br> $65 - One Year Membership (Non-Refundable)</b>
        <h2>Address: </h2>
            
            <b>1502 Ravine Rd. <br>Kalamazoo, Mi.<br> 49004 
                <br><hr /><br> Phone #: 269-345-9550 <br> Email: szinfo@skatezoo.com</b>
        <br><br><br>
        <div class="donate">

            <a href="#">
            <img border="0" src="images/donate.gif">
            </a>

        </div>
    </div>
    

    
</container>
    <div id="footer">
        <div class="footer">
            <b>K-zoo Skate Zoo    ©  1998-2016</b>
            <div>
            <a class="link" href="#">Contact</a>
            <a class="link" href="#">Email</a>
        </div>
    </div>
        
    </div>
    
    
    
    
</body>
    
</html>