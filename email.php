<?php
   
		$email='arygeneration8@gmail.com';
		$subjek='tes';
		$pesan='as';
		if (mail($email, $subjek, $pesan)) {
			echo "keh";
		}
		else
		{
			echo "string";
		}
		
?>