<!DOCTYPE html>
<html lang="ja">
<head>
    <title>データ表示</title>
    <link rel="stylesheet" href="../css/sample.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Economica:700" rel="stylesheet">

    <style>
        .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: 50px;
    gap: 20px; 
    font-size: 18px;
    
}

.card {
    border:5px solid #c0c0c0;
    border-radius:1em;
    padding: 10px;
    margin: 10px;
    width: 280px;
    display: inline-block;
    vertical-align: top;
    box-sizing: border-box;
}

.card img {
    width: 100%;
    height: auto;
    align-items: center;
}

.card-content {
    padding: 10px;
}
</style>

</head>
<body>
    <h3>Dog Model Database</h3>
 
    <div class="card-container">
        <?php
    $file = fopen("data.csv", "r");
    if ($file) {
        fgetcsv($file); // ヘッダーを無視する
        while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
            echo '<div class="card">';
            echo "<img src=\"" . $data[5] . "\" alt=\"Dog Image\" style=\"width: 250px; height: 250px; object-fit: cover;\"><br>";
            echo '<div class="card-content">';
            echo "<strong>Name:</strong> " . $data[0] . "<br>";
            echo "<strong>Breed:</strong> " . $data[1] . "<br>";
            echo "<strong>Birthday:</strong> " . $data[2] . "<br>";
            echo "<strong>Email:</strong> " . $data[3] . "<br>";
            echo "<strong>Memo:</strong> " . $data[4] . "<br>";
            echo '</div>'; // .card-content
            echo '</div>'; // .card
        }
        fclose($file);
    } else {
        echo "データファイルが存在しません。";
    }
    ?>
</div>
    
</body>
</html>
