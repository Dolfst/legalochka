<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='About' />
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Dolfst-Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="../ui-kit-projects/css/ui-kit-styles.css">
<link rel="stylesheet" href="../../flat-ui/bootstrap/css/bootstrap-responsive.css">
<link rel="stylesheet" href="../../flat-ui/css/flat-ui.css">
<!-- Using only with Flat-UI (free)-->
<link rel="stylesheet" href="../../common-files/css/icon-font.css">
<!-- end -->
<link rel="stylesheet" href="/Developer/common-files/css/animations.css">
<link rel="stylesheet" href="/Developer/ui-kit/ui-kit-projects/css/ui-kit-styles.css">
  </head>
  <body>
    <!--Start Menu--> <div class="container">
    	<nav class="navbar navbar-inverse navbar-embossed navbar-lg" role="navigation">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-02">
                          <span class="sr-only">Toggle navigation</span>
                        </button>
                        <a class="navbar-brand" href="/">Dolfst-Blog</a>
                      </div>
                    
                      <div class="collapse navbar-collapse" id="navbar-collapse-02">
                        <ul class="nav navbar-nav">               
                          <li ><a href="/">Главная<span class="navbar-unread">1</span></a></li>
                          <li ><a href="/blog.php">Блог</a></li>
                          <li class="active"><a href="/about.php">Обо мне</a></li>  
                         </ul>            
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Дополнительно <b class="caret"></b></a>
                            <span class="dropdown-arrow"></span>
                            <ul class="dropdown-menu">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Полезные ссылки</a></li>
                            </ul>
                          </li>
                          <li><a href="#"><span class="visible-sm visible-xs">Настройки<span class="fui-gear"></span></span><span class="visible-md visible-lg"><span class="fui-gear"></span></span></a></li>
                        </ul>
                      </div><!-- /.navbar-collapse -->
                    </nav><!--End Menu-->

        
      <div class="row">
      
      <section class="projects-1">
<div class="container">
<div class="head-box">
<div class="brand">
<span class="fui-arrow-right"></span> О нас</div>
<p><cms:editable name='main_content' type='richtext'> original content </cms:editable></p>
<div class="features">
<div>
<span class="fui-book"></span> Aligned to grid
</div>
<div>
<span class="fui-bubble"></span> Don’t waste your time
</div>
</div>
</div>
<div class="projects">
<div class="project-wrapper">
<div class="project">
<div class="photo-wrapper">
<div class="photo">
<img src="/Developer/common-files/icons/Calendar@2x.png" alt="">
</div>
<div class="overlay"><span class="fui-eye"></span>
</div>
</div>
<div class="info">
<div class="name">Flat UI Pro</div>
<b>Designer</b> who makes easy to change and easy to create new elements.
</div>
</div>
</div>
<div class="project-wrapper">
<div class="project">
<div class="photo-wrapper">
<div class="photo">
<img src="/Developer/common-files/icons/Key@2x.png" alt="">
</div>
<div class="overlay"><span class="fui-eye"></span>
</div>
</div>
<div class="info">
<div class="name">Startup Kit</div>
<b>Designer</b> who makes easy to change and easy to create new elements.
</div>
</div>
</div>
<div class="project-wrapper">
<div class="project">
<div class="photo-wrapper">
<div class="photo">
<img src="/Developer/common-files/icons/Book@2x.png" alt="">
</div>
<div class="overlay"><span class="fui-eye"></span>
</div>
</div>
<div class="info">
<div class="name">Impressionist UI</div>
<b>Designer</b> who makes easy to change and easy to create new elements.
</div>
</div>
</div>
</div>
</div>
<!--/.container-->
</section>
  <!--<div class="col-xs-6 col-md-3">
    
      <div class="demo-col">
          <ul class="nav nav-list">
            <li class="nav-header"><!--Subjects--></li><br>
            <!--<li>
              <a href="#fakelink">
                Идеи
                <span class="badge pull-right">19</span>
              </a>
            </li>
            <li class="active">
              <a href="#fakelink">
                Новости
                <span class="badge pull-right">1</span>
              </a>
            </li>
            <li>
              <a href="#fakelink">
                Картинки
                <span class="badge pull-right">3</span>
              </a>
            </li>
            <!--<li class="divider"></li>
            <li class="nav-header">Condition</li>
            <li>
              <a href="#fakelink">
                Brand new
                <span class="badge pull-right">69</span>
              </a>
            </li>
            <li>
              <a href="#fakelink">
                Read-used
                <span class="badge pull-right">21</span>
              </a>
            </li>
            <li>
              <a href="#fakelink">
                Work-used
                <span class="badge pull-right">40</span>
              </a>
            </li>-->
          </ul>
        </div></div>
    <div class="col-xs-12 col-sm-6 col-md-8">
    </div>
    </div>



    </div></div><!-- /.container -->

    
    <div class="mtl">
      <div class="bottom-menu bottom-menu-inverse">
        <div class="container">
          <div class="row">
            <div class="col-md-3 navbar-brand">
              With <a href="https://vk.com/dima361" class="fui-heart"></a> from Minsk
            </div>

            <div class="col-md-7">
              <ul class="bottom-links">
                <li><a href="#fakelink">Обо мне</a></li>
                <!--<li><a href="#fakelink">Store</a></li>
                <li class="active"><a href="#fakelink">Jobs</a></li>
                <li><a href="#fakelink">Privacy</a></li>
                <li><a href="#fakelink">Terms</a></li>
                <li><a href="#fakelink">Follow Us</a></li>-->
                <li><a href="#fakelink">Помощь</a></li>
                <li><a href="#fakelink">Ссылки</a></li>
              </ul>
            </div>

            <div class="col-md-2">
              <ul class="bottom-icons">
                <li><a href="#fakelink" class="fui-user"></a></li>
                <li><a href="#fakelink" class="fui-facebook"></a></li>
                <li><a href="#fakelink" class="fui-twitter"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- /bottom-menu-inverse -->
    </div>





<!--#include file="modal.html"-->




    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>

    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
  </body>
</html>

<?php COUCH::invoke(); ?>
