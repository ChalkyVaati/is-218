<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

if ($date - $tar > 0) {
	echo "The future ";
}
elseif ($date - $tar > 0) {
	echo "The past ";
}
else {
	echo "Oops ";
}

for ($i=0; $i < $date.length; $i++) {
	if ($date[$i] == '/') {
		$date[$i] = ' ';
		}
}
echo $date;

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>