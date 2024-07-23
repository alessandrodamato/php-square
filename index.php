<?php

if (isset($_POST['size'])) {
  $form_data = $_POST['size'];
} else {
  $form_data = 3;
}

function generateSquare($size){
  if($size > 0 && $size <= 50) {
    $str_square = '';
    $fa_length = 41;
    for ($i = 0; $i < $size*$size; $i++) { 
      $str_square .= '<i class="fa-regular fa-square mx-1"></i>';
    }
    echo chunk_split($str_square, $size*$fa_length, '<br>');
  } else {
    echo 'Inserire un numero tra 1 e 50';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>PHP Square</title>
</head>
<body style="background-color: purple;">
  
  <div class="text-center">
    <h1 class="my-5 text-warning">PHP Square</h1>
    <form class="container w-25" method="POST">
      <div class="input-group mb-3">
        <input style="border-color: #ffc108; " name="size" type="number" class="form-control bg-transparent text-warning" placeholder="Inserisci un numero tra 1 e 50" value="<?php echo $form_data ?>">
        <button class="btn btn-warning" type="submit">Genera</button>
      </div>
    </form>
    <h3 style="line-height: 32px" class="text-warning"><?php generateSquare($form_data) ?></h3>
  </div>

</body>
</html>