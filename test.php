<?php  

$res = file_get_contents('http://localhost:8000/detect/enhanced-buzz-27424-1335452024-0.jpg');

$data = json_decode($res, true);

/*var_dump($data);*/

/*echo nl2br('Gender : '.$data["imageFaces"][0]["gender"]["gender"].'\n');
echo nl2br('Age Range : '.$data["imageFaces"][0]["age"]["ageRange"].'\n');*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>
<h2>Gender : <?php echo $data["imageFaces"][0]["gender"]["gender"]; ?></h2><br />
<h2>Age Range : <?php echo $data["imageFaces"][0]["age"]["ageRange"]; ?></h2>
</body>
</html>