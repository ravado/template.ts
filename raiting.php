<?php 
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')
{
sleep(2); // для теста на локальном компе
echo "Спасибо за ваш голос! Новый рейтинг: ".$_GET["user_votes"].""/*.$_GET["id_arc"]*/;
}
?>