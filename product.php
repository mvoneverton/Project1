<?php

$output = '';

if ($_GET['id']) {
  $productId = $_GET['id'];
  if ($productId == 1) {
    $output = 'You chose the Mac';
  } else if ($productId == 2) {
    $output = 'You chose the Ubuntu';
  } else if ($productId == 3) {
    $output = 'You chose the Windows';
  } else {
    $output = 'Your entry is not valid, please try again.';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

  <?php include "header.php"; ?>

  <?php echo $output; ?>

  <?php include "footer.php"; ?>

</body>
</html>