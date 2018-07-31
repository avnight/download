<?php

$remote_ip = $_SERVER['REMOTE_ADDR']; 
echo $remote_ip;
if ($remote_ip == "219.80.217.79" || $remote_ip == "162.158.178.181" || $remote_ip == "60.217.229.96" || $remote_ip == "61.222.53.251" || $remote_ip == "61.221.155.100" || $remote_ip == "211.75.186.160") {
	echo 
	'</br><p style="font-size: 60px;"><a href="itms-services://?action=download-manifest&url=https://i999.tv/appfile/av9/manifest.plist" name="">AV9 IOS</a></p>
	</br>
	<p style="font-size: 60px;"><a href="" name="">AV9 Android</a></p>
	</br>
	<p style="font-size: 60px;"><a href="itms-services://?action=download-manifest&url=https://i999.tv/appfile/jjkk/manifest.plist">JJKK IOS</a></p>
	</br>
	<p style="font-size: 60px;"><a href="" name="">JJKK Android</a></p>';
} else {
	echo "無權觀看此頁面";
}
?>