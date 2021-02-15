<?php
	
	//output -
	//print "Hello PHP";
	//print ('hello php...');  //has return value, slower
	//echo "HELLO PHP"."test";        //no return value, faster, use . to concate
	
	/*$a =10; //variable $
	$name = 'Abrar';
	$cgpa = 2.5;*/
	//echo $a;
	
	//$student = array(1, 'abrar', 2.3, 'abrar@gmail.com');
	//$student= [1, 'abrar', 2.3, 'abrar@gmail.com'];
	
	$students = [
					[1, 'abrar', 2.3, 'abrar@gmail.com'],
					[2, 'mir', 3.0, 'mir@gmail.com'],
					[1, 'hossain', 2.5, 'hsn@gmail.com']
				];
				
	echo $students[2][3];
	
?>	