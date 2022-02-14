<?php
function nav($item)
{
    $item = [
        "index.php" =>"Главная ",
        "login.php" => "Вход",
        "register.php" =>"Регистрация ",
        "admin.php" => "Администрирование",
        "lc.php" =>"Личный кабинет ",
        "logout.php" => "Выход",
    ];
    echo "<nav>";
    $i =0;
    foreach($item as $key => $value)
    {
        if($i == $item)
       echo "<a href='$key' class='active'>$value</a>";
       else
       echo "<a href='$key' '>$value</a>";
       $i++;
    }
    echo "</nav>";
}
?>
