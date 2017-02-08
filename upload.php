<?php
		$obj = new FormUpload;
		if (!isset($_POST['titre']) and !isset($_POST['descripption']) and !isset($_POST['file']))
		{
		echo $obj;
		}
		else
		echo "envoie";
		
				
		?>