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
  .emotion{width:42px; height:20px; background:url("/zhxjmdc/1/Public/Images/icon.gif") no-repeat 2px 2px; padding-left:20px; cursor:pointer}
  .emotion:hover{background-position:2px -28px}
  /*提示文字样式*/
  form.cmxform label.error, label.error {
    color: red;
  }
</style>
    <!-- 回到顶部 -->
    <div id="scrollTop" >
        <div class="level-2"></div>
        <div class="level-3"></div>
    </div>

    <div class="container middle">

      <div class="row">

        <div class="col-sm-9 blog-main">

          <div class="blog-post article">
            <h5 class="crumbs"><span>当前位置：首页》文章</span></h5>
            <div class="article-title"><h2 class="blog-post-title"><?php echo ($article["title"]); ?></h2></div>
            <div class="article-tips"><p class="blog-post-meta">
              <?php echo date("F j Y",$article['time'])?> by <?php echo ($article["author"]); ?></p></div>
            <div class="article-content">
              <p><?php echo ($article["content"]); ?></p>
            </div>
            <!--<div class="article-meta">-->
              <!--<p class="blog-post-meta">-->
                <!--转载请注明出处：<br/>-->
                <!--<span>救命稻草-&nbsp;Another blog post</span></p>-->
            <!--</div>-->
          </div><!-- /.blog-post -->
<!-- 评论弹窗 -->
          <div class="article-comment-btn">
            <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
             <i class="fa fa-plus"></i><span>评论</span>
            </a>
          </div>
          <div class="collapse" id="collapseExample">
            <div class="well article">
              <div class="article-title">
                <h4 class="blog-post-title">Comment</h4>
              </div>
              <!-- <div class="article-tips"><p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p></div> -->

              <div class="article-content form-horizontal">
                <form class="cmxform" id="commentForm" method="post" action="">
                  <div class="form-group">
                    <label class="col-sm-2 control-label article-comment-lable">Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" id="username" placeholder="用户名..." required>
                      <input type="hidden" value="<?php echo ($article["arid"]); ?>" id="arid">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label article-comment-lable">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="email" placeholder="邮箱(不公开)..." required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label article-comment-lable">Content</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="content" id="content" rows="3" style="resize:none;" placeholder="说点什么吧..." required></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label article-comment-lable"></label>
                    <div class="col-sm-10 article-comment-send">
                      <span class="emotion"></span>
                      <button type="submit" class="sub_btn btn btn-info">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

<!-- 回复弹窗 -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">            
          <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel">Response</h4>
            </div>
            <form class="cmxform" id="commentForm-two" method="post" action="">
            <div class="modal-body">
                <div class="form-group">
                  <label class="control-label">Username:</label>
                  <input type="text" class="form-control" name="sname" id="sname" placeholder="用户名...">
                  <input type="hidden" id='pcid'>
                </div>
                <div class="form-group">
                  <label class="control-label">Email:</label>
                  <input type="text" class="form-control" name="semail" id="semail" placeholder="邮箱(不公开)...">
                </div>
                <div class="form-group">
                  <label class="control-label">Content:</label>
                  <textarea class="form-control" name="scontent" id="scontent" placeholder="说点什么吧..." style="resize:none;"></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
            </form>
          </div>
          </div>
          </div>

<!-- 评论 -->
           <div class="blog-post article" id="article-comment">
            <?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="row article-comment">
              <div class="col-sm-1"><img class="article-comment-img" src="<?php echo ($v["head_pic"]); ?>"></div>
              <div class="col-sm-11">
                <div class="article-comment-name">
                  <strong><?php echo ($v["name"]); ?></strong>
                  <span class="comment-response" onclick="response('<?php echo ($v["cid"]); ?>')" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" data-backdrop="false">
                    <i class="fa fa-commenting-o">&nbsp;回复</i>
                  </span>
                </div>
                <div class="article-comment-time">
                  <?php echo date("Y年 n月 j日 H:i",$v['time'])?>
                </div>
                <div class="article-comment-content">
                  <p><?php echo ($v["content"]); ?></p>
                </div>
              </div>
            </div>
            <hr id="son<?php echo ($v["cid"]); ?>" class="article-comment-hr">
            
<!-- ******************子****************************************************************** -->
            <?php if(is_array($v['son'])): $i = 0; $__LIST__ = $v['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><div id="son<?php echo ($s["cid"]); ?>">
              <div class="row article-comment-son">
                <div class="col-sm-1"><img class="article-comment-img" src="<?php echo ($s["head_pic"]); ?>"></div>
                <div class="col-sm-11">
                  <div class="article-comment-name">
                    <strong><?php echo ($s["name"]); ?></strong>
                    <span class="comment-response" onclick="response('<?php echo ($s["cid"]); ?>')" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                      <i class="fa fa-commenting-o">&nbsp;回复</i>
                    </span>
                  </div>
                  <div class="article-comment-time">
                    <?php echo date("Y年 n月 j日 H:i",$s['time'])?>
                  </div>
                  <div class="article-comment-content">
                  <p><strong>@<?php echo ($s["parent"]); ?></strong><?php echo ($s["content"]); ?></p>
                </div>
                </div>
              </div>
              <hr class="article-comment-hr-son">
            </div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
<!-- ******************子************************************************************************* -->
          </div>

          <!--<div class="comment-load-more"><a>加载更多...</a></div>-->

        </div><!-- /.blog-main -->
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
    </div><!-- /.row -->
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
<script type="text/javascript">
  $(function(){
    $('.emotion').qqFace({
      id : 'facebox',
      assign:'content',
      path:'/zhxjmdc/1/Public/Js/plugins/qqFace/arclist/'	//表情存放的路径
    });
  });
  //查看结果
  function replace_em(str){
    str = str.replace(/\</g,'&lt;');
    str = str.replace(/\>/g,'&gt;');
    str = str.replace(/\n/g,'<br/>');
    str = str.replace(/\[em_([0-9]*)\]/g,'<img src="/zhxjmdc/1/Public/Js/plugins/qqFace/arclist/$1.gif" border="0" />');
    return str;
  }

  function response(pcid){
      $('#pcid').val(pcid);
  }

  $().ready(function() {
    $("#commentForm").validate({
      rules: {
        email : {
          required: true,
          email   : true
        },
        username : {
          required: true,
        },
        content :{
          required: true,
        }
      },
      messages: {
        username : "请输入您的用户名",
        email    : "请输入正确的邮箱",
        content  : "内容不能为空"
      },
      submitHandler: function(form) {
        var url     = "<?php echo U('Home/Article/article_comment_add');?>";
        var content = replace_em($('#content').val());
        debugger
        articleComment(url,content);
      }
    });

    $("#commentForm-two").validate({
      rules: {
        semail : {
          required: true,
          email   : true
        },
        sname : {
          required: true,
        },
        scontent :{
          required: true,
        }
      },
      messages: {
        sname : "请输入您的用户名",
        semail    : "请输入正确的邮箱",
        scontent  : "内容不能为空"
      },
      submitHandler: function(form) {
        var url = "<?php echo U('Home/Article/article_comment_son_add');?>";
        articleResponse(url);
        $('#exampleModal').modal('hide');
      }
    });
  });
</script>