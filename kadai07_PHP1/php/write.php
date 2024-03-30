<?php
            $data = array(
                $_POST["name"],
                $_POST["breed"],
                $_POST["year"] . '/' . $_POST["month"] . '/' . $_POST["day"],
                $_POST["email"],
                $_POST["note"],
                $_POST["image"],
            );

            // CSVファイルにデータを書き込む
            $file = fopen("data.csv","a");
            fputcsv($file, $data);
            fclose($file);

            // インデックスページにリダイレクトする
            header("Location: index.php");
            exit;
       
?>
