<?php
$root = "uploads/";
$folders = array_filter(glob($root.'*'), 'is_dir');

echo "<h1>Uploaded Photos</h1>";

foreach ($folders as $folder) {
    $folderName = basename($folder);
    echo "<h2>$folderName</h2>";

    $files = glob("$folder/*.*");

    foreach ($files as $file) {
        $url = $file;
        echo "<img src='$url' width='200' style='margin:10px;'>";
    }
}
?>
