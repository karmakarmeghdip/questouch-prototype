<?php
$file = fopen("tags.csv", "r");
$tags=array("CU", "Physics");
while (($data = fgetcsv($file)) !== false) {
    $tags=array_merge(array_splice($data, 1), $tags);
}

foreach ($tags as $tag ) {
    echo $tag."<br>";
}
?>