<?php
$file = fopen("tags.csv", "r");
$tags=array();
while (($data = fgetcsv($file)) !== false) {
    foreach ($data as $i) {
        $tags=array_merge(array_splice($i, 1), $tags);
    }
}

echo var_dump($tags);
?>