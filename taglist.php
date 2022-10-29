<html>
<head>
    <title>Tags List</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body class="background">
<nav class="navbar background">
            <ul class="nav-list">
              <div class="logo">
                <img src="assets/logo.jpg">
              </div>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="http://wa.me/919475218087">Contact DTL</a></li>
            </ul>

           <!-- <div class="rightNav">
                <input type="text" name="search" id="search">
                <button class="btn btn-sm">Search</button>
            </div> -->
        </nav>
    <ul class="TagList">
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