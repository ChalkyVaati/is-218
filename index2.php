<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
/* This is the start of question 3 */
if ($date - $tar > 0) {
	echo "The future <br>";
}
elseif ($date - $tar > 0) {
	echo "The past <br>";
}
else {
	echo "Oops <br>";
}
/* question 4*/
for ($i=0; $i < $date.length; $i++) {
	if ($date[$i] == '/') {
		$date[$i] = ' ';
		}
}
echo $date;

/* using the date string above question 5 */
$words = explode(" ", $date);
echo count($words). "<br>";

/* Question 6 uses the same code as question 5*/
$words = explode(" ", $date);
echo strlen($date). "<br>";

/*question 7 using the date string */
echo ord($date). "<br>";

/* question 8 */
$lastletter = array($date[1], $date[2]);
for ($a = 0; a < $lastletter.length; $a++) {
	echo $lastletter[$a];
}
echo "<br>"

for ($i=0; $i < $date.length; $i++) {
	if ($date[$i] == '') {
		$date[$i] = '/';
		}
}
$newdate = explode("/", $date). "<br>"
for($z = 0; z < $newdate.length; z++) {
	echo $newdate[$z];
}
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>