<?php
$magickey = '0';
if (isset($_REQUEST['password'])) {
	$key = (($_REQUEST['password']));
	if ($key == $magickey) {
		echo '<p style="color:blue;font-size:30px;">Success</p>';
	} else {
		echo '<p style="color:red;font-size:30px;">Failed</p>';
	}
}
