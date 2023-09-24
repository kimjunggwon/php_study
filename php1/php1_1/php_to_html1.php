<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_to_html1</title>
</head>
<body>
    <?php
        $year1 = "1998년";
        $year2 = "2023년";
    ?>

    <div class="main-contents">
        태어난 년도는
        <h1>
            <?php echo $year1; ?>
        </h1>
        입니다.
        <br>
        현재 년도는
        <h1>
            <?php echo $year2; ?>
        </h1>
    </div>
</body>
</html>