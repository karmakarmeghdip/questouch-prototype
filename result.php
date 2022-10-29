<html>
    <head>
        <title>Result</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>
    <body class="background">
        <div class="List">
            <ul>
            <?php
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
                    echo " <button class='btn'>Download</button></li>";
                }
              }

              fclose($file);
            ?>
            </ul>
        </div>
    </body>
</html>