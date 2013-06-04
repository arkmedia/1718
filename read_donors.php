<?php
$codes = array('$99 and under', '$100 - $499', '$500 - $999', '$1,000 - $4,999', '$5,000 - $9,999', '$10,000 - $24,999', '$25,000+');
date_default_timezone_set('America/Chicago');
error_reporting(E_ERROR);
$fl = fopen('donors_reformat.csv', "r");
$amts = array();
while ($ln = fgets($fl)) {
	$arr = explode(",", $ln);
	$fname = $arr[0];
	$lname = $arr[1];
	$sfname = $arr[2];
	$slname = $arr[3];
	$amount = $arr[4];
	if (!array_key_exists($amount, $amts)) {
		$amts[$amount] = array();
	}

	$amts[$amount][] = array('fname' => $fname, 'lname' => $lname, 'sfname' => $sfname, 'slname' => $slname);

}
fclose($fl);
?>

