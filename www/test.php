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
                        <a class="navbar-brand" href="#">ЛОГОТИП</a>
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
                        <!-- авторизация-->
                        <form action="" class="navbar-form navbar-right">
                        <!-- кнопка вызова модального окна авторизации-->
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal-1">Login</button>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- слайдер -->
    <div id="carousel-1" class="carousel slide">
        <ol class="carousel-indicators">
            <li class="active" data-target="#carousel-1" data-slide="0"></li>
            <li data-target="#carousel-1" data-slide="1"></li>
            <li data-target="#carousel-1" data-slide="2"></li>
        </ol>
            
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://placehold.it/800x240" alt="">
                <div class="carousel-caption">
                    <h3>Первый слайд</h3>
                    <p>Описание первого слайда</p>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/800x240" alt="">
                <div class="carousel-caption">
                    <h3>Второй слайд</h3>
                    <p>Описание второго слайда</p>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/800x240" alt="">
                <div class="carousel-caption">
                    <h3>Третий слайд</h3>
                    <p>Описание третьего слайда</p>
                </div>
            </div>
        </div>
            
    <a href="carousel-1" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"</span>
    </a>
    <a href="carousel-1" class="right carousel-control" data-side="next">
        <span class="glyphicon glyphicon-chevron-right"</span>
    </a>
    </div>
        
        
</body>