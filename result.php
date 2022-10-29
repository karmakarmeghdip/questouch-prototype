<html>
    <head>
        <title>Result</title>
    </head>
    <body>
        <div class="List">
            <?php
              $tags = explode(" ", $_GET["search"]);
              echo $tags;

              $file = fopen("tags.csv", "r");

              while (($data = fgetcsv($file)) !== false) {
                foreach ($data as $i) {
                  echo htmlspecialchars($i)." ";
                }
                echo "<br>";
              }

              fclose($file);
            ?>
        </div>
    </body>
</html>