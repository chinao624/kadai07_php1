<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>送信画面</title>
    <link rel="stylesheet" href="../css/sample.css">
    
<link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Economica:700" rel="stylesheet">
</head>

<body>
<header>
        <h1>Dog Model List</h1>
     <img src="../img/header.jpg" alt="header">
    </header>
  
    <div class=container>
    <h3>Register model dog data</h3>
    <form id ="wrap" action="write1.php" method="post" enctype="multipart/form-data">

    <div>
                <label for="name">Name</label>
                <input type="text" name="name" />
            </div>

            <div>
                <label for="breed">Breed</label>
                <input type="text" name="breed"  />
            </div>
    <div>
                <label for="birthday">Birthday</label>
                <select name="year">
                <?php
    // 年の選択肢
    for ($i = 2010; $i <= 2030; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    ?>                
    </select>
    <span style="font-size: small";>年</span>
                <select name="month">
                <?php
    // 月の選択肢
    for ($i = 1; $i <= 12; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    ?>
                </select>
                <span style="font-size: small";>月</span>

                <select name="day">
                <?php
    // 日の選択肢
    for ($i = 1; $i <= 31; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    ?>
                </select>
                <span style="font-size: small";>日</span>
            </div>

            <div>
                <label for="weight">Weight</label>
                <select name="weight">
                <?php
    // 体重の選択肢
    for ($i = 0; $i <= 60; $i+=0.5) {
        echo "<option value='$i'>$i</option>";
    }
    ?>
                </select>
                <span style="font-size: small";>Kg</span>
            </div>

            <div>
                <label for="email">Owner's Email</label>
                <input id ="email" name="email" type="text" />
            </div>
        <div>
            <label for="note">Note</label>
        <textarea name="note"></textarea>
        </div>

        <div>
                <label for="image">Photo</label>
                <input type="file" name="image" />
            </div>


<div class="save_btn"><button id="save" type="submit">SAVE</button></div>
    </form>
    </div>
</body>
</html>