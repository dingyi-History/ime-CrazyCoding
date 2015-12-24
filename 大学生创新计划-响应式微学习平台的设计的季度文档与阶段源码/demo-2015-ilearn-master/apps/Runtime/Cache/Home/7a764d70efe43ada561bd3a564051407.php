<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>i微学</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" href="/ilearn/Public/logo/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="imicrolearn" />
  <link rel="stylesheet" href="/ilearn/Public/amazeassets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/ilearn/Public/amazeassets/css/admin.css">
  <link rel="stylesheet" href="/ilearn/Public/i/css/ilearn.css">
<script>
   window.onload=msg;
  
  function msg(){
    var $modal = $('#msg');
    $modal.modal();
  }
  </script>


</head>
<body>
<header class="am-topbar am-topbar-inverse  " id="header"  data-am-sticky="{animation: 'slide-top'}">
  <div id="container" class="headerfix">
  <h1 class="am-topbar-brand">
    <a href="/ilearn/" >&nbsp;&nbsp;&nbsp;&nbsp;i微学&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topnav'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topnav">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
      <li class="am-hide-sm-only" ><a href="/ilearn/">首页</a></li>
      <li class="am-dropdown am-hide-sm-only" data-am-dropdown>
      <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          学习方向 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <?php if(is_array($alltype)): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/ilearn/course/typecourse?id=<?php echo ($vo["tid"]); ?>"><?php echo ($vo["tname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </li>
    </ul>

          
       <div class="am-topbar-right">
       
       <a href="/ilearn/way/showway"><button class="am-btn am-btn-success am-topbar-btn am-btn-sm">互动经验</button></a>
      <a href="/ilearn/course/showallcourse"><button class="am-btn am-btn-success am-topbar-btn am-btn-sm">教程总览</button></a>
       <a href="/ilearn/index/indexabout"><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">简介</button></a>
            <?php if(empty($_SESSION['userinfo'])): ?><a href="/ilearn/user/register"> <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">注册</button></a>
       <a href="/ilearn/user/login"><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">登录</button></a> 
            <?php else: ?> 
            <a href="/ilearn/user/userlikecourse">
            <button class="am-btn am-btn-warning am-topbar-btn am-btn-sm"> <?php echo ((isset($_SESSION['userinfo']['unickname']) && ($_SESSION['userinfo']['unickname'] !== ""))?($_SESSION['userinfo']['unickname']):"我是昵称"); ?><small>【点我】</small></button>
            </a>
            <a href="/ilearn/user/logout">
            <button class="am-btn am-btn-danger am-topbar-btn am-btn-sm">注销</button>
            </a><?php endif; ?>
        </div>

 
  
  </div>
  </div>
  <div id="colorborder"></div>
</header>






	<div class="am-g">
	<div id="indextitle">
		<div id="container">
		<br>
			<div class="am-g">
			<a href="/ilearn/way/showway">
				<div id="fangkuai" style="height:100%;background:blue;box-shadow: 0px 0px 5px 3px #888888; " class="am-u-sm-4">
				<br><br>
					<h1 class="am-text-center am-text-middle"style="color:white">互动经验</h1>
						<br><br>
				</div>
			</a>
			<a href="/ilearn/course/showallcourse">
				<div id="fangkuai" style="height:100%;background:purple;box-shadow: 0px 0px 5px 3px #888888; " class="am-u-sm-4">
				<br><br>
					<h1 class="am-text-center am-text-middle" style="color:white">教程总览</h1>
						<br><br>	
				</div>
			</a>
			<a href="/ilearn/user/userlikecourse">
				<div id="fangkuai" style="height:100%;background:green;box-shadow: 0px 0px 5px 3px #888888; " class="am-u-sm-4">
				<br><br>
					<h1 class="am-text-center am-text-middle" style="color:white">我的学习</h1>
						<br><br>	
				</div>
			</a>
			</div>
			<br>

		</div>
	</div>

	<div id="container">
	<hr>
	<div class="am-g">
	<div id="showcourse" class="am-u-sm-10 am-u-md-8 am-u-sm-centered am-u-md-uncentered am-u-lg-uncentered">

	<?php if(is_array($course)): $i = 0; $__LIST__ = array_slice($course,0,11,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><div id="onecourse"class="am-cf">
  
	<div >
  	<a href="/ilearn/course/showonecourse?id=<?php echo ($c["cid"]); ?>"><h3 style="padding:5px;margin:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($c["cname"]); ?>
	<small class="am-fr"><?php echo ($c["ctime"]); ?></small>
  	</h3></a>
  	<hr style="border-bottom:1px dashed #000; margin:5px;">
 	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($c["ctitle"]); ?></p>
	</div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>
	<a href="/ilearn/course/showallcourse"><button type="button" class="am-btn am-btn-defult am-btn-block">查看更多...</button>
	</a>
	<?php if(empty($_SESSION['userinfo'])): ?><a href="/ilearn/course/showaddcourse"><button type="button" class="am-btn am-btn-primary am-btn-block">登录后分享</button>
	</a>
	<?php else: ?>
	<a href="/ilearn/course/showaddcourse"><button type="button" class="am-btn am-btn-success am-btn-block">分享教程</button>
	</a><?php endif; ?>
	</div>

	

	<div id="indexsidebar" class="am-u-md-4  am-hide-sm-only">
		
		<div id="typeimg" class="am-u-sm-centered">
		<?php if(is_array($alltype)): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><a href="/ilearn/course/typecourse?id=<?php echo ($t["tid"]); ?>">
			<img id="imgtype" 
			class="am-img-responsive" 
			src="/ilearn/Public/images/typeimg/<?php echo ($t["timg"]); ?>.jpg" 
			alt="">
			</a><?php endforeach; endif; else: echo "" ;endif; ?>
			
		</div>



	</div>

	</div>
	</div>
</div>





<hr>

	<footer>
		<div class="am-g">
		<div id="colorborder"></div>
		<div id="footer">
		
		</div>
		<div id="colorborder"></div>
		</div>
	</footer>


<?php if(empty($_SESSION['msg'])): else: ?>
<div class="am-modal am-modal-alert" tabindex="-1" id="msg">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">i微学</div>
    <div class="am-modal-bd">
      <?php echo (session('msg')); ?>
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn">确定</span>
    </div>
  </div>
</div>
<?php  unset($_SESSION['msg']); endif; ?>
<script src="/ilearn/Public/amazeassets/js/jquery.min.js"></script>
<script src="/ilearn/Public/amazeassets/js/amazeui.min.js"></script>
<script src="/ilearn/Public/amazeassets/js/app.js"></script>

</body>
</html>