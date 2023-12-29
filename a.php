<?php
// PHPで変数に値を設定する
$valueFromPHP = "PHPからのデータです！";
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHPからJavaScriptに値を渡す</title>
    <script src="a.js"></script>
</head>
<body>
    <h1>PHPからのデータ表示</h1>
    <div id="php_data_display"></div>

    <script>
        // PHPから受け取った値をJavaScript変数に格納する
        var valueFromPHP = <?php echo json_encode($valueFromPHP); ?>;
        
        // JavaScriptからPHPへ値を渡す
        sendDataToPHP(valueFromPHP);
    </script>
</body>
</html>
