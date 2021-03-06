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
                        
                        <form action="" class="navbar-form navbar-right">
                        <!-- кнопка перехода в админ панель -->
                        <a href="adm_pn.php" class="btn btn-primary" >Admin panel</a>   
                        <!-- кнопка вызова модального окна авторизации-->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-1">Login</button>
                       
                            
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- модальное окно для авторизации -->
    <div class="modal fade" id="modal-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">
                        <i class="fa fa-close"></i>
                    </button>
                    <h4 class="modal-title">Нaзвание окна</h4>
                </div>
                <div class="modal-body">
                    <form action="" class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="E-mail" value="">
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" value="">
                            </div>
                            <div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-sign-in" aria-hidden="true"></i> IN
                            </button> 
                            </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!--<button class="btn btn-danger" type="button" data-dismiss="modal">Закррыть</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- записи на странице -->
    <div class="container">
        <!-- вторая навигация -->
        <div class="row">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">Элемент 1 <span class="badge">2</span></a></li>
                    <li><a href="#">Элемент 2 <span class="badge">24</span></a></li>
                    <li><a href="#">Элемент 3 <span class="badge">14</span></a></li>
                    <li><a href="#">Элемент 4 <span class="badge">34</span></a></li>
                </ul>
            </div>    
        </div>
        <!-- посты -->
        <div class="row">
            <div class="col-xs-6 col-sm-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/400x240" alt="">
                    <div class="caption">
                        <h3>Название поста</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-2">Подробнее <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- -------------- -->
            <div class="col-xs-6 col-sm-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/400x240" alt="">
                    <div class="caption">
                        <h3>Название поста</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="post_2.php" class="btn btn-success">Подробнее <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- ----------------------- -->
            <div class="col-xs-6 col-sm-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/400x240" alt="">
                    <div class="caption">
                        <h3>Название поста</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="post_3.php" class="btn btn-success">Подробнее <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/400x240" alt="">
                    <div class="caption">
                        <h3>Название поста</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         <a href="post_4.php" class="btn btn-success">Подробнее <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/400x240" alt="">
                    <div class="caption">
                        <h3>Название поста</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-2">Подробнее <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/400x240" alt="">
                    <div class="caption">
                        <h3>Название поста</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-2">Подробнее <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/400x240" alt="">
                    <div class="caption">
                        <h3>Название поста</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-2">Подробнее <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/400x240" alt="">
                    <div class="caption">
                        <h3>Название поста</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-2">Подробнее <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/400x240" alt="">
                    <div class="caption">
                        <h3>Название поста</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-2">Подробнее <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/400x240" alt="">
                    <div class="caption">
                        <h3>Название поста</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-2">Подробнее <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- модалка для постов-->
    <div class="modal fade" id="modal-2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">
                        <i class="fa fa-close"></i>
                    </button>
                    <h4 class="modal-title">Нaзвание окна</h4>
                </div>
                    <div class="modal-body">
                    <!-- Слайдер-->
                    <div id="carousel-1" class="carousel slide hidden-sm hidden-xs" >
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#carousel-1" data-slide="0"></li>
                            <li data-target="#carousel-1" data-slide="1"></li>
                            <li data-target="#carousel-1" data-slide="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://placehold.it/1200x240" alt="">
                                <div class="carousel-caption">
                                    <h3>Первый слайд</h3>
                                    <p>Описание первого слайда</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/1200x240" alt="">
                                <div class="carousel-caption">
                                    <h3>Второй слайд</h3>
                                    <p>Описание второго слайда</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/1200x240" alt="">
                                <div class="carousel-caption">
                                    <h3>Третий слайд</h3>
                                    <p>Описание третьего слайда</p>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel-1" class="left carousel-control" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"</span>
                        </a>
                        <a href="#carousel-1" class="right carousel-control" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"</span>
                        </a>
                    </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <img src="http://placehold.it/240x360" alt="" class="hidden-xs">
                                    <br> <!-- два br чтоб текст не сливался с картинкой-->
                                    <br>
                                    <p><em>11111 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</em></p>
                                </div>
                                <div class="row col-lg-8 col-md-8">
                                    <div class="col-lg-6 col-md-6">
                                        <p>2222222 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <p>3333333 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <p>4444444 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <p>5555555 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Закррыть</button>
                </div>
            </div>
        </div>
    </div>
</body>