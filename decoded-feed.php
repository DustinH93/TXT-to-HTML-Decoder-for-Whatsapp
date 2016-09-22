<!DOCTYPE HTML>
<html>
    <head>
        <title>Whatsapp Decoder</title>
        <!-- 
        Author: Dustin Hesse
        Version: 1.0.0
        -->
    <meta charset="utf-8">
    </head>
    <body>
    
        <?php
		
			echo	'<h1>Whatsapp Decoder</h1>';
		
		$wa = $_POST["text"];	
		
		$wa = str_replace("IMG", "<img src='IMG", $wa);	
		
		$wa = str_replace(".jpg", ".jpg' width='250px'/>", $wa);
		
		$wa = str_replace("PTT", "<a href='PTT", $wa);
		
		$wa = str_replace(".opus", ".opus' title='Download Soundfile' />Download Soundifle</a>", $wa);
		
		$wa = preg_replace( "/\r|\n/", "<br />", $wa);
	
	
			echo $wa;
		
				?>
    </body>
</html>