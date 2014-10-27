<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Blog' clonable='1' commentable='1'>
  <cms:editable name='blog_con' type='richtext' />
  <cms:editable name='blog_img'
    crop='1'
    width='610'
    height='150'
    type='image'
    />

  <cms:folder name="news" title="News" />

  </cms:template>

  <cms:if k_is_page>
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
                        <a class="navbar-brand" href="#">Dolfst-Blog</a>
                      </div>
                    
                      <div class="collapse navbar-collapse" id="navbar-collapse-02">
                        <ul class="nav navbar-nav">               
                          <li ><a href="/">Главная<span class="navbar-unread">1</span></a></li>
                          <li class="active"><a href="#">Блог</a></li>
                          <li><a href="#">Обо мне</a></li>  
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
                          <li><a href="#"><span class="visible-sm visible-xs">Settings<span class="fui-gear"></span></span><span class="visible-md visible-lg"><span class="fui-gear"></span></span></a></li>
                        </ul>
                      </div><!-- /.navbar-collapse -->
                    </nav><!--End Menu-->

        
      <div class="row">
  <div class="col-xs-6 col-md-3">
<cms:embed 'blog_sidebar.html' />
      </div>
    <div class="col-xs-12 col-sm-6 col-md-8">
      <!-- Blog Post -->
			<div class="post">
				<!-- Post Title -->
				<h3 class="title"><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h3>
				<!-- Post Title -->
				<p class="sub"><a href="#"><cms:show k_page_foldertitle /></a> &bull; <cms:date k_page_date format='jS M, y'/>; <a href="#"><cms:show k_comments_count /></a></p>
				<div class="hr dotted clearfix">&nbsp;</div>
				<!-- Post Title -->
				<img class="img-rounded img-responsive" src="<cms:show blog_img />" alt=""/>
				<!-- Post Content -->
				<p><cms:show blog_con /></p>
				<!-- Post Links -->
				<p class="clearfix">
					<a href="<cms:link masterpage='blog.php' />" class="btn btn-sm btn-primary" ><span class="fui-arrow-left"></span> Назад в Блог</a>
				</p>
			</div>
			<div class="hr clearfix">&nbsp;</div>
      <cms:embed 'comments_form.html' />
      
      <div class="hr dotted clearfix">&nbsp;</div><br>
			
			<cms:if k_comments_count >
			<h3><img src="images/icons/chat.svg" alt=""> Комментарии:</h3><br>
			<ol class="commentlist">
			  <cms:comments page_id=k_page_id order='asc' >
				<li class="comment"> 
				<div class="gravatar"> 
					<cms:gravatar email="<cms:show k_comments_author_email />" size="60" />
					<a name="<cms:show k_comment_anchor />">     
				</div> 
				<div class="comment_content"> 
					<div class="clearfix">
						<cite class="author_name"><a href=""><cms:show k_comment_author /></a></cite>       
						<div class="comment-meta commentmetadata"><cms:date k_comment_date format='F j, Y' /></div> 
					</div>
					<div class="comment_text tooltip-inner"> 
						<p><cms:show k_comment /></p> 
					</div> 
				</div> 
				</li> 
				</cms:comments>
			</ol> 
			<cms:else />
			<h3><img src="images/icons/button.svg" alt=""> Нет комментариев.</h3>
			</cms:if>
      
    </div>

    </div>



    </div></div><!-- /.container -->

    
    <div class="mtl">
      <div class="bottom-menu bottom-menu-inverse">
        <div class="container">
          <div class="row">
            <div class="col-md-3 navbar-brand">
              With <a href="#fakelink" class="fui-heart"></a> from Minsk
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
<cms:else />
   <cms:embed 'blog_list.html' />

</cms:if>

<?php COUCH::invoke(); ?>
