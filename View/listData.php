<?php
/**
 * @var Entity\Data $entity
 * @var $dataCollection array
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach( $dataCollection as $entity ):?>
        <li><?php echo $entity->getName() ?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>