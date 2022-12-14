<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QUESTOUCH-Question on your one touch</title>
  <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
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