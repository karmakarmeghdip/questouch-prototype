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
            <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>File Name</th><th>College Name</th><th>Semester</th><th>Subject</th><th>Download</th>
                </tr>
            <?php
            $tags=array();
            if ($_GET["college_name"]!=="Any") {
                array_push($tags, $_GET["college_name"]);
            }
            if ($_GET["semester_name"]!=="Any") {
                array_push($tags, $_GET["semester_name"]);
            }
            if ($_GET["subject_name"]!=="Any") {
                array_push($tags, $_GET["subject_name"]);
            }
            if (count($tags) !== 0) {
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
                    echo "<tr>";
                    foreach ($data as $i) {
                        echo "<td>".htmlspecialchars($i)."</td>";
                    }
                    echo "<td><button class='btn'><b><a href='https://drive.google.com/file/d/1_LVkswM_uNVqvDaX2j06vtiwnUgO24Oh/view?usp=drivesdk'>Download</a></b></button></td></tr>";
                }
              }

              fclose($file);
            } else {
                $file = fopen("tags.csv", "r");
                while (($data = fgetcsv($file)) !== false) {
                    echo "<tr>";
                    foreach ($data as $i) {
                        echo "<td>".htmlspecialchars($i)."</td>";
                    }
                    echo "<td><button class='btn'><b><a href='https://drive.google.com/file/d/1_LVkswM_uNVqvDaX2j06vtiwnUgO24Oh/view?usp=drivesdk'>Download</a></b></button></td></tr>";
                }
              }
              fclose($file);
            }
            ?>
            </table>
        </div>
    </body>
</html>