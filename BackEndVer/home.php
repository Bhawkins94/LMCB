<?php
	$templateFile = fopen("pagetemplate.htm", "r") or die("ERR: Unable to access template");
	$fileContents = fread($templateFile,filesize("pagetemplate.htm"));
	fclose($templateFile);
	
	$customStyle = "<style>
			main > section {
				background-image: url('christmas.jpg');
				background-position: center top;
			}
			
			#donateButton{
				text-align: center; 
				color:white; 
				font-size: 3em; 
				font-weight: bold; 
				background-color: red; 
				border-radius: 25px; 
				width: 350px;
				display: inline-block;
			}
			
			#donateButton a:visited{
				color: white;
			}
			
			#donateButton a:link{
				color: white;
			}
		</style>"; //here's where to add custom page style
	
	$content = "<section>
				<!--<img src=\"christmas.jpg\"></img>-->
				<h1 style=\"text-align: center; color: white; font-size: 5em; font-weight: bold\">We've made Christmas for kids since 1930.</h1>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <p style=\"text-align: center; color: white; font-size: 2em; font-weight: bold; background-color: rgba(105, 105, 105, 0.5)\">
					Christmas is about family and friends. It is about sharing and giving. Christmas should be a happy time for everyone, especially for children. For over eighty years our number one goal has been to ensure that every child in our community has a smile on their face on Christmas Day.
                </p>
                <br><br>
				<div style=\"width:100%; text-align:center;\">
					<p id=\"donateButton\">
						<a href=\"donate.htm\">Donate Now</a>
					</p>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</section>

			<img src=\"mission-statement.png\" alt=\"Mission Statement Image\" height=\"422.25\" width=\"777.75\" class=\"center\">
            <br><br><br>"; //here's where to add html content
			
			
	$fileContents = str_replace("{{CUSTOM STYLE}}", $customStyle,$fileContents);
	$fileContents = str_replace("{{CONTENT}}", $content,$fileContents);
	echo $fileContents;
?>

