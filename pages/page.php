<?php 
    session_start();
    session_name("login");

    //check if they should have access
	if(!$_SESSION['login']){
		header('Location: index.php');
	}
    
    $title = "Page title";
    $content ="content";
    $prefix ="../"; 
    $styleFile ="style2.css";
    $script ="pageScript.js";

    include "../head.php";
        
?>

You are in, <?php echo $_SESSION['name'];?>!!!<br/>
	<a href="logout.php">[clear the session]</a>



<?php include "../foot.php"; ?>