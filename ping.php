<?php
	$ret;
	$host = 'x.x.x.x'; 
	$port = 80; 
	$waitTimeoutInSeconds = 1; 
	if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
	   $ret = "Success";
	} else {
	   $ret = "Error";
	} 
	fclose($fp);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/common/style.css">
<script type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$( document ).ready(function() {
});
</script>
</head>
<body>
<?php if($ret=="Success"){?> <img src=pass.jpg> <?php }else{ ?> <img src=error.jpg> <?php } ?>
</body>
</html> 
