<?php 

require_once ('vendor/autoload.php');

    // create a new instance of the class
    $image = new Zebra_Image();
    
    $brands = array(
      "ASOS",
      "OQvestir",
      "amaro",
      "khelf",
      "schutz"
    );
    
    if (isset($_GET['link_img']) && $_GET['link_img'] != '') {
      $imagem = $_GET['link_img'];
    } else {
      $imagem = 'https://www.stellamodas.com.br/wp-content/uploads/sandalia-baixa-com-tiras-bege-1.jpg';
    }
    
    $dimensions = getimagesize($imagem);
    
    $w = $dimensions[0];
    $h = $dimensions[1];
    
    $ratios = [
      'small' => 500/$w,
    //   'large' => 1000/$w
    ];
    
    $resource = imagecreatefromstring( file_get_contents( $imagem ) );
    
    foreach ( $ratios as $name => $ratio ) {
    
      $w2 = $w * $ratio;
      $h2 = round($h * $ratio);
    
      $output = imagecreatetruecolor($w2, $h2);
    
      if ( ! file_exists( "img/{$brands[1]}" ) ) {
        mkdir( "img/{$brands[1]}", 0777, true );
      }
      
      $img = "img/{$brands[1]}/{$brands[0]}_steal_the_look_pictures_{$name}.jpg";
      
      imagecopyresampled($output, $resource, 0, 0, 0, 0, $w2, $h2, $w, $h);
						
	  imagejpeg($output, $img, 100);
	  
	  imagedestroy($output);
	  
	  $image->source_path = $img;
      
      $image->target_path = $img;
      
      $image->jpeg_quality = 100;
      
      $image->preserve_aspect_ratio = true;
      $image->enlarge_smaller_images = true;
      $image->preserve_time = true;
      $image->apply_filter('smooth', 30);
      // $image->sharpen_images = true;
      
      $image->resize(200, 200, ZEBRA_IMAGE_BOXED, '#FFF');
	  
    }

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>test crop image</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
  <style>
    body {
      background-color: #ccc; 
    }
  </style>
  
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <form action="" class="form">
          <fieldset>
            <legend>image crop</legend>
            <div class="form-group">
              <label for="">Link da imagem:
                <input type="text" name="link_img" class="form-control">
              </label>
              <input type="submit" value="cropar imagem" class="btn btn-primary"/>
            </div>
          </fieldset>
        </form>
        
      </div>
      
      <div class="col-md-6">
        <p class="lead">Imagem Original</p>
        <?php echo "<div style='padding: 15px;'><img class='figure-img img-fluid' src='{$imagem}'></div>"; ?>
      </div>
      <div class="col-md-6">
        <p class="lead">Imagem Cropada</p>
        <?php echo "<div style='padding: 15px;'><img class='figure-img img-fluid' src='img/{$brands[1]}/{$brands[0]}_steal_the_look_pictures_{$name}.jpg'></div>"; ?>
      </div>
      
    </div>
    
  </div>
  
  
  
</body>
</html>