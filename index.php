
<!DOCTYPE html>
<html>
<!--
Downloaded from: https://github.com/sunmandev/audio_tube/
Created by: sunmandev 
My website: http://sunman.epizy.com   
!-->
<head>
    <title>Audio Tube</title>
<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet">
</head>

<body>
<div class="logo">
    <img src="logo.png">
</div>

<form action="" method="POST">
    <?php include("process.php");?>
    <input type="text" name="url" placeholder="Enter the youtube video link" autocomplete="off">
    <input type="submit" name="Download" value="Download">
</form>
<div class="copyrights-div"><p>Created by <a href="https://github.com/sunmandev/audio_tube/">sunmandev</a></p></div>
</body>

</html>