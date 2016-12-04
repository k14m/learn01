<?php

//phpinfo();
$handle = opendir('/home/work/');
echo "<pre>";
    while (false !== ($entry = readdir($handle))) {
        echo "$entry\n";
    }
echo "</pre>";
closedir($handle);
?>
