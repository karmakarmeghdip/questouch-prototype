<html>
<head>
    <title>Tags List</title>
</head>
<body><ul>
<?php
$file = fopen("tags.csv", "r");
$tags=array("CU", "Physics");
while (($data = fgetcsv($file)) !== false) {
    $tags=array_merge(array_splice($data, 1), $tags);
}
$tags=array_unique($tags);
foreach ($tags as $tag ) {
    echo "<li>".$tag."</li>";
}
?>
</ul></body>
</html>