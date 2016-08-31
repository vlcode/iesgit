<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>IES</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

    <!--Header-->
    <?php require 'blocks/header.php'; ?>
    <!-- /header -->
    
    <!--Slider-->
    <section id="slide-show" class="hidden-xs hidden-sm">
     <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right img-responsive" src="images/sample/slider/img1.png" alt="" />
                        <h2>Учеба за границей</h2>
                        <h3 class="gap">Мы поможем Вам достичь Ваших целей</h3>
                        <a class="btn btn-large btn-transparent" href="#">Подробнее</a>
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right img-responsive" src="images/sample/slider/img2.png" alt="" />
                        <h2>Поддержка студентов</h2>
                        <h3 class="gap">Комплексная помощь до и во время учебы</h3>
                        <a class="btn btn-large btn-transparent" href="#">Подробнее</a>
                    </div>
                </div>
            </div>
            <!--Slider Item2-->

            <!--Slider Item3-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                   <div class="container">
                    <img class="pull-right img-responsive" src="images/sample/slider/img3.png" alt="" />
                    <h2>Выгодное предложение</h2>
                    <h3 class="gap">Благодаря партнёрству мы добиваемся лучших условий для наших студентов</h3>
                    <a class="btn btn-large btn-transparent" href="#">Подробнее</a>
                </div>
            </div>
        </div>
        <!--Slider Item3-->

    </div>
    <!--/Slider Items-->

    <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->
    
    
    <section class="main-info">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h4>Заполните форму и наши специалисты помогут Вам с выбором университета</h4>
                <p class="no-margin">Потратив 2 минуты Вашего времени, Вы делаете первый шаг навстречу Вашей мечте о престижном зарубежном образовании </p>
            </div>
            <div class="col-md-3">
                <a class="btn btn-success btn-large pull-right" href="http://shapebootstrap.net">Внести данные</a>
            </div>
        </div>
    </div>
</section>

<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>Что мы предлагаем</h3>
            <p class="lead">Сотрудничество с нами выгодно для Вас не только во время поступления, но и во время получения образования в зарубежном университете</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Подготовка документов для поступления</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>            

            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Помощь и консультации в получении иностранной визы</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>            

            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium icon-rounded"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Консультации с выбором университета</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Помощь в адаптации в новой стране</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>            

            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Полная юридическая поддержка на всех этапах поступления</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>            

            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Индивидуальный подход к каждому клиенту</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--/Services-->

<section id="recent-works">
    <div class="container">
        <div class="center">
            <h3>Лучшие предложения</h3>
            <p class="lead">Изучите самые популярные университеты среди наших клиентов</p>
        </div>  
        <div class="gap"></div>
        <ul class="gallery">
            <!--Item 1-->
            <li class="col-sm-3">
                <div class="preview">
                    <a href="#"><img alt=" " src="images/portfolio/thumb/item1.jpg" class="img-responsive"></a>
                    <div class="overlay">
                    </div>
                    
                </div>
                <div class="desc">
                    <a href="index.php"> <h5>Lorem ipsum dolor sit amet</h5></a>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item1.jpg" alt=" " class="img-responsive">
                    </div>
                </div>                 
            </li>
            <!--/Item 1--> 

            <!--Item 2-->
            <li class="col-sm-3">
                <div class="preview">
                    <a href="#"><img alt=" " src="images/portfolio/thumb/item2.jpg" class="img-responsive"></a>
                    <div class="overlay">
                    </div>
                    
                </div>
                <div class="desc">
                    <a href="index.php"> <h5>Lorem ipsum dolor sit amet</h5></a>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item2.jpg" alt=" " class="img-responsive">
                    </div>
                </div>                 
            </li>
            <!--/Item 2-->

            <!--Item 3-->
            <li class="col-sm-3">
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item3.jpg" class="img-responsive">
                    <div class="overlay">
                    </div>
                    
                </div>
                <div class="desc">
                   <a href="index.php"> <h5>Lorem ipsum dolor sit amet</h5></a>
                </div>
                                
            </li>
            <!--/Item 3--> 

            <!--Item 4-->
            <li class="col-sm-3">
                <div class="preview">
                    <a href="#"><img alt=" " src="images/portfolio/thumb/item4.jpg" class="img-responsive"></a>
                    <div class="overlay">
                    </div>
                    
                </div>
                <div class="desc">
                    <a href="index.php"> <h5>Lorem ipsum dolor sit amet</h5></a>
                </div>
                <div id="modal-4" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item4.jpg" alt=" " class="img-responsive">
                    </div>
                </div>                 
            </li>
            <!--/Item 4-->               

        </ul>
    </div>

</section>
    
    
    

    <!--/Footer-->
    <?php require 'blocks/footer.php'; ?>
    <!--/Footer-->



<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>