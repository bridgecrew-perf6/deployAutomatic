<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanzamiento Cohete!</title>
</head>
<body>
    <button>Lanzar Cohete! <?php echo ?> </button>
    <h2>Lista Visitantes</h2>
    <?php
$url = "https://picsum.photos/v2/list";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$picture = json_decode(curl_exec($curl), true);
curl_close($curl);
?>

<?php
  if(!empty($picture)){
    echo 'Picture:';
    foreach($picture as $post){
      echo '<img src= "'. $post["download_url"] .'" />';
    }
  }
?>    
</body>
</html>