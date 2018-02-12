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
echo substr($date, -2);
echo "<br>";

/* question 9 */
for ($i=0; $i < $date.length; $i++) {
	if ($date[$i] == '') {
		$date[$i] = '/';
		}
}

$newdate = explode("/", $date);
	echo $newdate[0]." ";
	echo $newdate[1]." ";
	echo $newdate[2];

echo "<br><br>";

/*question 10 */

$year = array("2012", "396", "300","2000", "1100", "1089");

foreach ($year as $value) {
	if ($value % 4 == 0) {
		echo "True ";
	}
	else {
		echo "False ";
	}
}
/*done*/
?>