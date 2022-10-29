<?php
$file = fopen("tags.csv", "r");
$tags=array("CU", "Physics");
while (($data = fgetcsv($file)) !== false) {
    $tags=array_merge(array_splice($i, 1), $tags);
}

echo var_dump($tags);
?>