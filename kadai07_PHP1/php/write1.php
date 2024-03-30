<?php
// phpinfo(); PHPの状態を確認

// var_dump($_FILES);
// exit();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ファイルがアップロードされたか？
    // var_dump($_FILES); exit();  
    // 条件分岐で$_FILESのどこでひっかかったのか中身を見て確認

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        // アップロードされたファイルを一時保存
        $uploadDir = "uploads/";
        // 保存するファイル名を生成（元のファイル名basenameを使用する場合）
        $uploadFile = $uploadDir . basename($_FILES["image"]["name"]);
        
// var_dump($uploadFile);
// exit();
        // ファイルを移動して保存
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
            // ファイルが正常に保存された場合は、その情報をCSVに書き込む
               $data = array(
                $_POST["name"],
                $_POST["breed"],
                $_POST["year"] . '/' . $_POST["month"] . '/' . $_POST["day"],
                $_POST["email"],
                $_POST["note"],
                $uploadFile 
            );

            // CSVファイルにデータを書き込む
            $file = fopen("data.csv","a");
            fputcsv($file, $data);
            fclose($file);

            // インデックスページにリダイレクトする
            header("Location: index.php");
            exit;
        } else {
            echo "ファイルのアップロードに失敗しました。";
        }
    } else {
        echo "ファイルが選択されていないか、アップロード中にエラーが発生しました。";
    }
}
?>
