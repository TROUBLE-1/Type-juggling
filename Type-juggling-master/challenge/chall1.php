<?php
if (isset($_REQUEST['key'])) {
	$key = intval($_POST['key']);
	if ($key == md5('fgasg')) {
		echo '<p style="color:blue;font-size:30px;">Success</p>';
	}else{
        echo '<p style="color:red;font-size:30px;">Failed</p>';
    }
}

?>