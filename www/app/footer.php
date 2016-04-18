<html>
<body>

<?php
/*
require 'app/config.php';
// тестовый запрос
for ($i=1;$i<=5;$i++)
{
    $ath = mysql_query("select title_subcat from subcategories where id_cat = 3 and id_subcat = $i;");
    $author = mysql_fetch_array($ath);
    //echo $author['id_cat']."<br>";
    echo $author['title_subcat']."<br>";
}*/
    
   /* require 'app/config.php';
    for ($i=1;$i<=4;$i++)
    {
        $cat = mysql_query("select title_cat from categories where id_cat = $i;");
        $categories = mysql_fetch_array($cat);
        echo $categories['title_cat'].'<br>';
        for ($a=1;$a<=5;$a++)
        {
            $subcat = mysql_query("select title_subcat from subcategories where id_cat = $i and id_subcat = $a;");
            $subcategories = mysql_fetch_array($subcat);
            //echo $author['id_cat']."<br>";
            echo '_______'.$subcategories['title_subcat'].'<br>'; 
        }
    }*/
    
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.js"></script>
  </body>
</html>