<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="icons-css3-transitions-source/css/demo.css">

<head>
    <meta charset="utf-8">
    <title>Blog - <?php echo $row['postTitle'];?></title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
<div class="header">
  <div class="content">
    <div class="logo"> <img src="images/zoogifsm.gif" alt="Home" > </div>
    <?php include("icons-css3-transitions-source/icons.html"); ?>
    <div class="nav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="#">About</a></li>
        <li><a href="park.php">Park layout</a></li>
        <li><a href="stream.php">Live Stream</a></li>
        <li><a href="waiver.html">Waiver</a></li>
      </ul>
    </div>
  </div>
</div>
    
	<div id="wrapper">

		<h1>Blog</h1>
		<hr />
		<p><a href="./">Blog Index</a></p>


		<?php	
			echo '<div>';
				echo '<h1>'.$row['postTitle'].'</h1>';
				echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<p>'.$row['postCont'].'</p>';				
			echo '</div>';
		?>
        
	</div>
    <?php include("info.html"); ?>
    <?php include("footer.html"); ?>
    
</body>
</html>