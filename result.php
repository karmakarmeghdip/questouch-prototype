<html>
    <head>
        <title>Result</title>
    </head>
    <body>
        <div class="List">
            <?php
              $tags = explode(" ", $_GET["search"]);

              $file = fopen("tags.csv", "r");

              while (($data = fgetcsv($file)) !== false) {
                $conforms=TRUE;
                foreach ($tags as $tag) {
                    if (!in_array($tag, $data, TRUE)) {
                        $conforms=FALSE;
                    }
                }
                if ($conforms) {
                    foreach ($data as $i) {
                        echo htmlspecialchars($i)." ";
                    }
                    echo "<br>";
                }
              }

              fclose($file);
            ?>
        </div>
    </body>
</html>