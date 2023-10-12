<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo _CSS_ROOT; ?>header.css">
    <link rel="stylesheet" href="<?php echo $sub_content['css']; ?>">
    <link rel="stylesheet" href="<?php echo _CSS_ROOT; ?>footer.css">

    <title>Document</title>
</head>

<body>
    <!-- header -->
    <?php require_once 'app/view/user/template/header.php';
    ?>
    <!-- header -->

    <!-- main -->
    <?php
    $this->render($content, $sub_content);
    ?>
    <!-- main -->


    <!-- footer -->
    <?php require_once 'app/view/user/template/footer.php' ?>
    <script src="<?php echo $sub_content['js'] ?>"></script>
    <!-- footer -->
</body>

</html>