<meta charset="utf-8">
<?php

ini_set ('error_reporting', E_ALL);
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);

require_once 'config.php';
 //функция вывода постов 
function post (){
    $post = mysql_query("select * from posts;");
    while($act_post=mysql_fetch_array($post))
    {
        echo "<br><img src=".$act_post['photo_post']."><br><br>";
        echo "Название поста = ".$act_post['title_post']."<br><br>";
        echo "Эпиграф = ".$act_post['epigraph_post']."<br><br>";
        echo "Пост= ".$act_post['boby_post']."<hr>";
    }
    //return $post;
}
/*
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo $value."<br>";
}
// массив $arr сейчас таков: array(2, 4, 6, 8)
unset($value); // разорвать ссылку на последний элемент
*/

/*
$post = mysql_query("select * from posts;");
if($post)
{
    $posts = mysql_fetch_array($post);
    echo "<br>Название поста = ".$posts['title_post']."<br><br>";
    echo "Эпиграф = ".$posts['epigraph_post']."<br><br>";
    echo "Пост= ".$posts['boby_post']."<br><br>";
    echo "<img src=".$posts['photo_post'].">";
}
else
{
  echo "<p><b>Error: ".mysql_error()."</b></p>";
  exit();
}
*/



?>
