<?php $FLAGS="ISILAB{UpL0@d_F1le_P4g€}"; ?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Training ISI</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
		
          <h1><a href="index.php">Training<span class="logo_colour">ISI</span></a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
		
          <li ><a href="index.php">Home</a></li>
          <li><a href="categorie.php">Catégories</a></li>
          <li class="selected"><a href="upload.php">Upload</a></li>
	   <li><a href="contacts.php">Contact</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <?php include('./includes/repositories.inc.php'); ?>
           
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <?php include('./includes/last_categories.inc.php'); ?>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
		  <div class="sidebar_item">
            <?php include('./includes/news.inc.php'); ?>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
	  
      <div id="content">
        <!-- insert the page content here -->

          <h1>Upload</h1>
         <p>Proche de notre communauté, nous vous offrons la possiblité de soumettre votre outil à notre équipe !</p>

          <form class="form_settings " enctype="multipart/form-data" action="" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
          <p>Uploadez votre outil : </p><hr><br/><input name="uploadedfile" class="inputfile" type="file" /><br />
          <input type="submit" class="submit" value="Upload File" />
          </form>
          <?php
          $uploaded_name = $_FILES[ 'uploadedfile' ][ 'name' ];
          $uploaded_size = $_FILES[ 'uploadedfile' ][ 'size' ];

          $info = new SplFileInfo($uploaded_name);
          $ext = $info->getExtension();

          if(  (strtolower($ext) == "jpg" || strtolower($ext) == "jpeg" || strtolower($ext) == "png") )
              if ( ( $uploaded_size < 100000 ) && ctype_upper($uploaded_name[0]))
                echo "<p>Bien joué, code de la faille : UPLOAD2HARD-ISI</p>";
          else
              echo '<div class=\'error\'>Image non upload, nous n\'acceptons que les images au format PNG, JPEG ou JPG</div>';
          ?>
    </div>
    </div>
    <?php include('./includes/footer.inc.php'); ?>
  </div>
</body>
</html>