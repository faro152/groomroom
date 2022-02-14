<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГрумРум</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="LG"><img src="LG.ico" width="150px"></div>
        <div class="LGT"> <p wi>ГрумРум</p></div></header>
       <?php
       include 'nav.php';
       nav(3);
      
       ?>
    <div class="register">
        <form action="registeraction.php" class="form" method="POST" id="regform">   
        <input type="text" placeholder="ФИО" name="fio" required id="fio" class="validate">
        <input type="text" placeholder="Логин" name="login" required class="validate" id="login">
        <input type="email" placeholder="Email" name="email" required class="validate">
        <input type="password" placeholder="Пароль" name="password" required class="validate" id="password">
        <input type="password" placeholder="Еще раз пароль" name="confirm" required class="validate" id="confirm">
        <label><input type="checkbox" id="pd">Согласие на обработку ПД</label>
        <button>Зарегистироваться</button>
        <p id="error" class="error"></p>

        </form>
    </div><script src="main.js"></script>
</body>
</html>