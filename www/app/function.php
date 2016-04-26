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


//функция вывода наименования постов во вкладку "управление постами"
function post_view () {
	$post=mysql_query("select * from posts");
	echo '<table class="table table-striped">';
	//echo '<caption>Name table.</caption>'; //Название таблицы
	echo '<thead><tr><th>ID поста</th><th>Название поста</th><th>Рдактировать</th><th>Удалить</th></tr></thead>';
	echo '<tbody>';
	while($act_post=mysql_fetch_array($post))
	{
		echo '<tr><th scope="row">'.$act_post['id_post']."&nbsp;</th><td>".$act_post['title_post']."&nbsp;</td><td>"."Редактировать"."&nbsp;</td><td>"."Удалить"."&nbsp;</td></tr>";
	}
	echo '</tbody></table>';
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
