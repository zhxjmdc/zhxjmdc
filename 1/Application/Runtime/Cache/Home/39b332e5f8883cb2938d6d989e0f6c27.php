<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width,user-scalable=no, minimum-scale=1.0, initial-scale=1.0,target-densitydpi=low-dpi" />
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="/zhxjmdc/1/Public/Images/favicon.ico">
<title></title>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
  <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Bootstrap core CSS -->
    <link href="/zhxjmdc/1/Public/Js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Js/swiper/css/swiper.min.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Js/font-awesome/css/font-awesome.min.css" rel="stylesheet" >

    <!-- Custom styles for this template -->
    <link href="/zhxjmdc/1/Public/Css/header.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Css/home.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Css/footer.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Css/sidebar.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Js/plugins/back_top/css/special.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Css/article.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Css/demo.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Css/life.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Css/search.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Css/guest.css" rel="stylesheet">

    <link href="/zhxjmdc/1/Public/Js/plugins/timeline/css/reset.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Js/plugins/timeline/css/timeline.css" rel="stylesheet">
    <link href="/zhxjmdc/1/Public/Css/style.css" rel="stylesheet">

    <!-- 代码高亮 -->
    <link href="/zhxjmdc/1/Public/Js/plugins/highlight/styles/monokai-sublime.css" rel="stylesheet">
  </head>   
  <body ondragstart="return false;">
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- <div class="navbar-header">
        <img alt="Brand" src="/zhxjmdc/1/Public/Images/logo.png">
    </div> -->

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand header-home" href="<?php echo U('Home/Index/index');?>">
        <img alt="Brand" src="/zhxjmdc/1/Public/Images/logo.png">
      </a>
    </div>

    <div class="collapse navbar-collapse header-column" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if(is_array($header)): foreach($header as $key=>$v): ?><li><a href="/zhxjmdc/1/index.php/Home/Index/<?php echo ($v["href"]); ?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <form action="<?php echo U('Home/Search/keyword_search');?>" method="post" onsubmit="return submitFn(this);">
              <div class="search-wrapper">
                  <div class="input-holder">
                      <input type="text" class="search-input" name="value" placeholder="Type to search" />
                      <button class="search-icon" type="submit" onclick="searchToggle(this, event);"><span></span></button>
                  </div>
                  <!--<span class="close" onclick="searchToggle(this, event);"></span>-->
                  <div class="result-container">

                  </div>
              </div>
          </form>
      </ul>
    </div>
  </div>
</nav>
  <script type="text/javascript">
      function searchToggle(obj, evt){
          var container = $(obj).closest('.search-wrapper');

          if(!container.hasClass('active')){
              container.addClass('active');
              evt.preventDefault();
          }
          else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
              container.removeClass('active');
              // clear input
              container.find('.search-input').val('');
              // clear and hide result container when we press close
              container.find('.result-container').fadeOut(100, function(){$(this).empty();});
          }
      }

      function submitFn(obj){
          debugger
          var value = $(obj).find('.search-input').val().trim();

          if(!value.length){
//              _html = "请输入您要搜索的关键字";
//              $(obj).find('.result-container').html('<span style="color:#FF9C9C;">' + _html + '</span>');
//              $(obj).find('.result-container').fadeIn(100);
//              setTimeout(function(){
//                  $(obj).find('.result-container').html('');
//                  $(obj).find('.result-container').fadeIn(100);
//              },2000);
              return false;
          }else{
              return true;
          }
      }
  </script>
<style type="text/css">
  @media screen and (max-width: 768px){
    .page-count {
      display: inline;
    }
  }
</style>
  <div class="container middle marketing home">
      <div class="row featurette">
        <div class="col-sm-9 blog-main">
          <!-- 3d轮播  -->
          <div class="blog-post pic-play">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                  <div class="swiper-slide bg1"></div>
                  <div class="swiper-slide bg2"></div>
                  <div class="swiper-slide bg3"></div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <?php if(is_array($article)): foreach($article as $key=>$v): ?><div class="row blog-article">
            <div class="blog-article-tipsss">
              <h2 class="blog-post-title home-title">
                <a href="<?php echo U('Home/Article/article_detail',array('arid'=>$v['arid']));?>"><?php echo ($v["title"]); ?></a>
              </h2>
              <div class="col-xs-12 col-sm-4 col-md-3 tips"><div><i class="fa fa-user"></i>By <?php echo ($v["author"]); ?></div></div>
              <div class="col-xs-12 col-sm-5 col-md-4 tips"><div><i class="fa fa-clock-o"></i><?php echo date("F j Y",$v['time']);?></div></div>
              <div class="col-xs-12 col-sm-3 col-md-3 tips"><div><i class="fa fa-tag"></i><?php echo ($v["typename"]); ?></div></div>
            </div>
          </div>

          <div class="row blog-article-content featurette">
            <?php echo ($v["path"]); ?>
            <div class="home-article-content">
              <p><?php echo ($v["describe"]); ?>......</p>
              <p class="read-detail">
                <span><a href="<?php echo U('Home/Article/article_detail',array('arid'=>$v['arid']));?>">阅读全文</a></span>
              </p>
            </div>
            <hr class="hr1">
            <div class="col-xs-6 col-sm-4 col-md-2 tips"><div><i class="fa fa-commenting-o"></i>(<?php echo ($v["comment_count"]); ?>)</div></div>
            <div class="col-xs-6 col-sm-4 col-md-2 tips"><div><i class="fa fa fa-eye"></i>(<?php echo ($v["browse_count"]); ?>)</div></div>
            <div class="col-xs-12 col-sm-4 col-md-2 tips"><div><i class="fa fa-share-alt"></i>SHARE</div></div>
          </div><?php endforeach; endif; ?>
          <div class="page"><?php echo ($Page); ?></div>
        </div>
        <div class="col-sm-3">
  <div class="sidebar-module sidebar-box1">
      <h1>救命稻草</h1>
      <img alt="image" class="img-circle" style="border: 3px solid #FFF;" src="/zhxjmdc/1/Public/Images/a8.jpg">
      <div class="sidebar-blog">
        <a class="btn btn-xs btn-success"><i class="fa fa-signal"></i>&nbsp;文章&nbsp;<?php echo ($total); ?></a>
        <a class="btn btn-xs btn-primary"><i class="fa fa-weixin"></i>&nbsp;ZhxJmdc</a>
      </div>
  </div>

  <!-- <div class="sidebar-module sidebar-box2">
    <h3>
      <i class="fa fa-search"></i>
      Find...
    </h3>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
  </div> -->

  <div class="sidebar-module sidebar-box3">
      <h3><i class="fa fa-map-signs"></i>Recent</h3>
      <ol class="list-unstyled sidebar-box3-list">
        <li>
          <a href="<?php echo U('Home/Article/article_detail',array('arid' =>$recent['0']['arid']));?>">
            <span class="badge">1</span><?php echo ($recent['0']['title']); ?>
          </a>
        </li>
        <li>
          <a href="<?php echo U('Home/Article/article_detail',array('arid' =>$recent['1']['arid']));?>">
            <span class="badge badge2">2</span><?php echo ($recent['1']['title']); ?>
          </a>
        </li>
        <li>
          <a href="<?php echo U('Home/Article/article_detail',array('arid' =>$recent['2']['arid']));?>">
            <span class="badge badge3">3</span><?php echo ($recent['2']['title']); ?>
          </a>
        </li>
        <li>
          <a href="<?php echo U('Home/Article/article_detail',array('arid' =>$recent['3']['arid']));?>">
            <span class="badge badge4">4</span><?php echo ($recent['3']['title']); ?>
          </a>
        </li>
        <li>
          <a href="<?php echo U('Home/Article/article_detail',array('arid' =>$recent['4']['arid']));?>">
            <span class="badge badge5">5</span><?php echo ($recent['4']['title']); ?>
          </a>
        </li>
        <li>
          <a href="<?php echo U('Home/Article/article_detail',array('arid' =>$recent['5']['arid']));?>">
            <span class="badge badge6">6</span><?php echo ($recent['5']['title']); ?>
          </a>
        </li>
      </ol>
  </div>
  
  <div class="sidebar-module sidebar-box4">
    <h3><i class="fa fa-tags"></i>Tags</h3>
    <ol class="list-unstyled sidebar-box4-list">
      <?php if(is_array($tags)): foreach($tags as $key=>$v): ?><li>
          <a href="<?php echo U('Home/Index/article',array('aid'=>$v['aid']));?>"><span><?php echo ($v["typename"]); ?>(<?php echo ($v["article_count"]); ?>)</span></a>
        </li><?php endforeach; endif; ?>        
    </ol>
  </div>

  <div class="sidebar-module sidebar-box5">
    <h3><i class="fa fa-pencil"></i>Personal</h3>
    <ol class="list-unstyled sidebar-box5-list">
      <li>
        ......................
      </li>
    </ol>
  </div>
</div><!-- /.blog-sidebar -->
      </div>
  </div><!-- /.container -->
  <footer class="blog-footer footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
  </footer>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/zhxjmdc/1/Public/Js/jquery/jquery-1.9.1.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
  <script src="/zhxjmdc/1/Public/Js/bootstrap/js/bootstrap.min.js"></script>
  <script src="/zhxjmdc/1/Public/Js/swiper/js/swiper.jquery.min.js"></script>
  <script src="/zhxjmdc/1/Public/Js/swiper/js/swiper.min.js"></script>
  <script src="/zhxjmdc/1/Public/Js/common/home.js"></script>
  <script src="/zhxjmdc/1/Public/Js/pic-adapt/pic_adapt.js"></script>
  <script src="/zhxjmdc/1/Public/Js/plugins/jquery.more.js"></script>
  <script src="/zhxjmdc/1/Public/Js/plugins/back_top/js/mumayi_top.js"></script>
  <script src="/zhxjmdc/1/Public/Js/plugins/validate/jquery.validate.min.js"></script>
  <script src="/zhxjmdc/1/Public/Js/plugins/timeline/js/modernizr.js"></script>
  <script src="/zhxjmdc/1/Public/Js/plugins/timeline/js/main.js"></script>
  <script src="/zhxjmdc/1/Public/Js/plugins/highlight/highlight.pack.js"></script>
  <script src="/zhxjmdc/1/Public/Js/plugins/qqFace/js/jquery-browser.js"></script>
  <script src="/zhxjmdc/1/Public/Js/plugins/qqFace/js/jquery.qqFace.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>