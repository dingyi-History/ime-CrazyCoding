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
</head>
<body>
<header class="am-topbar am-topbar-inverse  " id="header"  data-am-sticky="{animation: 'slide-top'}">
  <div id="container" class="headerfix">
  <h1 class="am-topbar-brand">
    <a href="../ilearn" >&nbsp;&nbsp;&nbsp;&nbsp;i微学&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topnav'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topnav">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
      <li class="am-hide-sm-only" ><a href="#">首页</a></li>
      <li class="am-dropdown am-hide-sm-only" data-am-dropdown>
      <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          学习方向 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <?php if(is_array($alltype)): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="#"><?php echo ($vo["tname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
     <li><a href="#">待处理</a></li>
          <li><a href="#">待处理</a></li>
        </ul>
      </li>
    </ul>

          
       <div class="am-topbar-right">
        <a href="#"><button class="am-btn am-btn-success am-topbar-btn am-btn-sm">简介</button></a>
       <a href="#"><button class="am-btn am-btn-success am-topbar-btn am-btn-sm">互动经验</button></a>
      <a href="#"><button class="am-btn am-btn-success am-topbar-btn am-btn-sm">教程分享</button></a>
            <?php if(empty($showusername)): ?><button class="am-btn am-btn-success am-topbar-btn am-btn-sm">注册</button>
        <button class="am-btn am-btn-success am-topbar-btn am-btn-sm">登录</button>
            <?php else: ?> 
            <button class="am-btn am-btn-success am-topbar-btn am-btn-sm"> <?php echo ($showusername); ?></button><?php endif; ?>
        </div>

 
  
  </div>
  </div>
  <div id="colorborder"></div>
</header>







	<div id="indextitle">
		<div id="container">
			<div class="am-g">




			</div>
		</div>
	</div>
	

			<div id="container">
				<div class="am-g">

					<?php for ($i=0; $i <12; $i++) { ?>
	 
					<div id="course" class="am-u-sm-10 am-u-sm-centered am-u-md-4 am-u-md-uncentered am-u-lg-3 am-u-lg-uncentered ">
						

					</div>	

				<?php } ?>

				</div>

				<ul class="am-pagination am-pagination-centered">
  <li class="am-disabled"><a href="#">&laquo;</a></li>
  <li class="am-active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>

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
<script src="/ilearn/Public/amazeassets/js/jquery.min.js"></script>
<script src="/ilearn/Public/amazeassets/js/amazeui.min.js"></script>
<script src="/ilearn/Public/amazeassets/js/app.js"></script>

</body>
</html>