<?php
$magickey = '0';
if (isset($_REQUEST['password4'])) {
	$key = md5($_REQUEST['name4'].$_REQUEST['password4']);
    echo '<p style="color:green;font-size:30px;">md5:'. $key. '</p>';
	if ($key == $magickey) {
		echo '<p style="color:blue;font-size:30px;">Success</p>';
	} else {
		echo '<p style="color:red;font-size:30px;">Failed</p>';
	}
}