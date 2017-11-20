
<?php

	//$myfile = fopen("logCommitsBitBucket.txt", "w");
	//fwrite($myfile, $_SERVER['HTTP_X_GITHUB_EVENT']);
	//fclose($myfile);

	/*
	if(function_exists('exec')) {
    	echo "exec is enabled\n";

    	exec("sudo git clean -f -d 2>&1", $output, $return_val);
    	if($return_val !== 0) {
		    echo "Error 1\n";
		    print_r($output);   
			}	

    	exec("sudo git pull -f 2>&1", $output, $return_val);
		if($return_val !== 0) {
		    echo "Error 2\n";
		    print_r($output);
		}
		
    	echo "\nArquivos atualizados";
	}
	else {
		echo "\nexec is disabled";
	}
	*/

	if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push') {
	  //exec( 'cd /var/www/html/teste-bertholdo-github/ && git reset --hard HEAD && git pull' );
		
			$myfile = fopen("logCommitsBitBucket.txt", "w");
			
					
		exec("git pull -f 2>&1", $output, $return_val);
		if($return_val !== 0) {
		    //echo "Error 2\n";
		    //print_r($output);
			
			fwrite($myfile, $output);
		}
		else
		{
			fwrite($myfile, "ok");
		}
		
		fclose($myfile);
	}

?>
