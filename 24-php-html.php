<?php

$zorros = ["https://randomfox.ca/images/1.jpg", "https://randomfox.ca/images/2.jpg", "https://randomfox.ca/images/3.jpg"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Hola! Esto es HTML desde PHP!</h1>

    <?php foreach($zorros as $zorro) { ?>
        <img src="<?php echo $zorro; ?>" >
    <?php } ?>

</body>
</html>