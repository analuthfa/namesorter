<?php


//read all words in txt 
function readdata($file_lines){
	//and create array, indexing based on new line
	foreach($file_lines as $line){
		$array1[]= $line;
	}
	return $array1;
}


function sorting($array1){
	$arrlength = count($array1);
	for($i=0;$i<$arrlength; $i++){
		//explode string to array by white space,
		$ns = explode(' ',$array1[$i]);
		//create multidimensional array, and get last word from string
		$name[] = array('lastname'=>array_pop($ns),
							'fullname' =>$array1[$i]);
		
	}
	//sort array order by lastname, ascending
	array_multisort( array_column($name, "lastname"), SORT_ASC, $name );
	return $name;
}

//load file .txt
$file_lines = file('unsorted-names-list.txt');
//call function readdata()
$data = readdata($file_lines);
//call function sorting()
$sorted = sorting($data);
//print sorted lastname
for($i=0;$i<count($data); $i++){
	echo $sorted[$i]['fullname']."<br>";
}


?>