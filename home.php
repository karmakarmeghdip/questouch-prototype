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

        <main>
        <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="assets/logo.jpg" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">Question on your one touch.....</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">This is a preliminary step to provide previous years questions to all engineering students. But for now it is just in a trial phase. </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3"><a href="https://www.kgec.edu.in/">Learn More</a></button>
      </div>
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
        </main>

</body>
</html>