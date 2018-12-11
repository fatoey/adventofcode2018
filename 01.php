<?php
$data = file_get_contents('01-input.txt');


$testdata = array (+1, -2, +3, +1,+1, -2, +3, +1);


$array = explode(PHP_EOL, $data);

//print_r($array);
$total=0;

foreach ($array as $key => $value) {
	$total = $total + $value;	
}
echo "part one = " . $total;

echo "<br>";
echo "<br>";
echo "<br>";



$frequency = array();
$current_frequency = 0;
foreach ($testdata as $key => $value) {
	$current_frequency = $current_frequency + $value;
	//echo $current_frequency . "<br>";
	array_push($frequency, $current_frequency);	
	//array_search($current_frequency, $frequency,true);	
}

foreach ($frequency as $key => $value) {
	echo $value . "<br>";
	
	//echo array_search($value, $frequency, true);
	/*
if (in_array($value, $frequency))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
  */

}




?>