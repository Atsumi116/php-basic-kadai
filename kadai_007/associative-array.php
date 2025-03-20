<!DOCTYPE html>
    <html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
// Step2: 連想配列を作成する
$product = array(
    "name" => "onion",
    "price" => 200,
    "weight" => 160
);

// Step3: 値を出力する
print_r($product);
?>
</p>

</html>