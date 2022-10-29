<html>
    <head>
        <title>Result</title>
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
        <section class="centerer">
        <div class="List">
            <ul>
            <?php
              if($_GET["search"]!='') {
              $tags = explode(" ", $_GET["search"]);
              $file = fopen("tags.csv", "r");

              while (($data = fgetcsv($file)) !== false) {
                $conforms=TRUE;
                foreach ($tags as $tag) {
                    $isincluded=FALSE;
                    foreach ($data as $i) {
                        if (strtolower($tag)===strtolower($i)) {
                            $isincluded=TRUE;
                        }
                    }
                    if(!$isincluded) {
                        $conforms=FALSE;
                    }
                }
                if ($conforms) {
                    echo "<li>";
                    foreach ($data as $i) {
                        echo htmlspecialchars($i)." ";
                    }
                    echo " <button class='btn'><b>Download</b></button></li>";
                }
              }

              fclose($file);
            }
            ?>
            </ul>
        </div>
        </section>
    </body>
</html>