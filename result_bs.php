<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Result</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <a class="navbar-brand" href="#">QT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="http://wa.me/919475218087">Contact DTL</a></li>
            </ul>
          </div>
        </nav>
<!--        <div class="List">
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
                    echo " <button class='btn'><b><a href='https://drive.google.com/file/d/1_LVkswM_uNVqvDaX2j06vtiwnUgO24Oh/view?usp=drivesdk'>Download</a></b></button></li>";
                }
              }

              fclose($file);
            }
            ?>
            </ul>
        </div> -->

        <?php var_dump($_GET["tag"]); ?>
    </body>
</html>