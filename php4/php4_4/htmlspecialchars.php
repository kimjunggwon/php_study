<?php
    $msg = "서울<->제주도 'Eat & Run' 투어";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>엔터티 변환</title>
</head>
<body>
    <?php
        echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
    ?>
</body>
</html>