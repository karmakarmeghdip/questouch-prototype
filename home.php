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
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3 mb-5"><a href="https://www.kgec.edu.in/" style="color: white; text-decoration: none;">Learn More</a></button>
      </div>
    </div>
              <form action="result_bs.php" method="get" id="Tags" class="text-start" style="max-width: 400px; margin-inline: auto;">
                <div class="form-group mb-3">
                <label class="mb-1" for="exampleFormControlInput1">Choose College</label>
              <select name="college_name" class="form-select" form="Tags">
  <option hidden selected value="">Select any college</option>
  <?php
                    $file = fopen("tags.csv", "r");
                    $tags=array();
                    while (($data = fgetcsv($file)) !== false) {
                        array_push($tags, $data[1]);
                    }
                    $tags=array_unique($tags);
                    foreach ($tags as $tag ) {
                        echo "<option value='".$tag."'>".$tag."</option>";
                    }
                    ?>
                    </select>
                    </div>
                    <div class="form-group mb-3">
                <label class="mb-1" for="exampleFormControlInput1">Choose Semester</label>
              <select name="semester_name" class="form-select" form="Tags">
  <option hidden selected value="">Select any semester</option>
  <?php
                    $file = fopen("tags.csv", "r");
                    $tags=array();
                    while (($data = fgetcsv($file)) !== false) {
                        array_push($tags, $data[2]);
                    }
                    $tags=array_unique($tags);
                    foreach ($tags as $tag ) {
                        echo "<option value='".$tag."'>".$tag."</option>";
                    }
                    ?>
                    </select>
                    </div>
                    <div class="form-group mb-3">
                <label class="mb-1" for="exampleFormControlInput1">Choose Subject</label>
              <select name="subject_name" class="form-select" form="Tags">
  <option hidden selected value="">Select any subject</option>
  <?php
                    $file = fopen("tags.csv", "r");
                    $tags=array();
                    while (($data = fgetcsv($file)) !== false) {
                        array_push($tags, $data[3]);
                    }
                    $tags=array_unique($tags);
                    foreach ($tags as $tag ) {
                        echo "<option value='".$tag."'>".$tag."</option>";
                    }
                    ?>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <div class="overflow-hidden">
      <div class="container px-5">
        <img src="assets/poster.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="1280" loading="lazy">
      </div>
    </div>
  </div>
          </div>
        </main>

</body>
</html>