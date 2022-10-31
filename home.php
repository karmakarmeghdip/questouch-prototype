<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QUESTOUCH-Question on your one touch</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <a class="navbar-brand" href="#"><img src="assets/logo.jpg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="http://wa.me/919475218087">Contact DTL</a></li>
            </ul>

           <!-- <div class="rightNav">
                <input type="text" name="search" id="search">
                <button class="btn btn-sm">Search</button>
            </div> -->
            </div>
        </nav>

        <section class="background firstSection">
          <div class="box-main">
              <div class="firstHalf">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                  <p class="text-big">Question on your one touch.....</p>
                  <p class="text-small">This is a preliminary step to provide previous years questions to all engineering students. But for now it is just in a trial phase. </p>
                    <div class="button">
                        <button class="btn"><a href="https://www.kgec.edu.in/">Learn More</a></button>
                    </div>

              <div class="secondHalf">
                  <img src="assets/kgec.jpg" alt="kgec image">
              </div>

              <div class="SearchBar">
                <form action="result.php" method="get" id="tag-query">
                  <input type="text" placeholder="Enter the tag.." name="search" id="search" list="tags" required>
                  <datalist id="tags">
                  <?php
                    $file = fopen("tags.csv", "r");
                    $tags=array("CU", "Physics");
                    while (($data = fgetcsv($file)) !== false) {
                        $tags=array_merge(array_splice($data, 1), $tags);
                    }
                    $tags=array_unique($tags);
                    foreach ($tags as $tag ) {
                        echo "<option value='".$tag."'>";
                    }
                    ?>
                  </datalist>
                  <input type="submit" id="btn1" value="Search">
                </form>
              </div>
              <button class="btn"><a href="taglist.php"><b>Show available tags</b></a></button>

            <div class="poster">
              <img src="assets/poster.jpg" alt="poster">
            </div>
          </div>
        </section>

</body>
</html>