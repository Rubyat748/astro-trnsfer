<?php
$folder = $_POST['folder'] ?? 'default';
if (!isset($_FILES['image'])) {
    die("No file");
}

$upload_dir = "uploads/$folder/";

if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

$filename = time() . "_" . basename($_FILES["image"]["name"]);
$target = $upload_dir . $filename;

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
    echo "OK";
} else {
    echo "ERROR";
}
?>
