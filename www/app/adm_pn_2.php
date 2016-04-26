<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Мой первый блог</title>

    <!-- Bootstrap -->
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/font-awesome.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- навигация --> 
    <div class="container">
        <div class="row">
            <h1>Название сайта</h1>
            <div class="navbar navbar-inverse">
                <div class="container">
                    <!-- кнопка для отображения меню на маленьких экранах -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu"> 
                            <span class="sr-only">открыть навишацию</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">ЛОГОТИП</a>
                    </div>
                    <!-- мееню -->
                    <div class="collapse navbar-collapse" id="responsive-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Пункт 1</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Пункт 2<b class="caret"></b></a>
                                <ul class="dropdown-menu" id="responsive-dropdownmenu-menu">
                                    <li><a href="#">Подпункт 1</a></li>
                                    <li><a href="#">Подпункт 2</a></li>
                                    <li><a href="#">Подпункт 3</a></li>
                                    <li><a href="#">Подпункт 4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Пункт 3</a></li>
                            <li><a href="#">Пункт 4</a></li>                            
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#post_plus" data-toggle="tab">Добавить пост</a></li>
                    <li><a href="#posts_ctrl" data-toggle="tab">Управление постами</a></li>
                    <li><a href="#users_ctrl" data-toggle="tab">Управление пользователями</a></li>
                </ul>
                <div class="tab-content">
                    <!-- Вкладка отвечающая за добавлениепостов-->
                    <div class="tab-pane fade in active" id="post_plus">
                        <div class="container">
                            <div class="row bs-example">
                                
                                    <caption>Название поста.</caption>
                                    <form>
                                        <input type="text" class="form-control" placeholder="Text input" id="name_post">
                                    </form>    
                                
                                <br>
                                
                                    <caption>Тело поста.</caption>
                                    <form>
                                        <textarea class="form-control" rows="10" placeholder="Textarea" id="body_post"></textarea>
                                    </form>
                                
                                <br>
                                <input type="submit" value="Сохранить" class="btn">
                            </div>
                        </div>    
                    </div>
                    <!-- Вкладка отвечающая за управление постами -->
                    <div class="tab-pane fade" id="posts_ctrl">
                        <p>
                            <?php
                                require_once 'app/function.php';
                                echo post_view ();
                            ?>
                        </p>
                    </div>
                    
                    <div class="tab-pane fade" id="users_ctrl">
                        <p>Управление пользователями</p>
                    </div>
                </div> 
            </div>
        </div>    
    </div>
</body>