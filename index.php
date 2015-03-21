<?php 
require_once('function.php');
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
 $random = mt_rand(1, 5);
 if ($detect->isMobile() ) {
    require_once('mobile/index.php');
}else{
?>
<!doctype html>
<html  lang="zh_CN">
<!--图片原型来自网络，并经过本人二次加工；文案内容为原创，请勿抄袭！-->
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" /> <!--fuckbaidu -->
    <title>DeveMobile 主题主页 | DeveWork</title>
    <meta name="keywords" content="DeveMobile,WordPress,手机主题,移动主题," />
    <meta name="description" content="DeveMobile主题是由DeveWork 的Jeff 开发的一款WordPress 移动（手机）主题，基于Html5+CSS3开发，采用Android 5.0 Material Design风格，配以Off Canvas 侧边栏导航，自带主题后台选项，另有相关文章、广告管理，社会化分享、WebApp等实用功能" />
    <link rel='stylesheet' href='<?php echo $path ?>index/style2.css<?php echo $ver ?>' type='text/css'>
    <link rel='stylesheet' href='<?php echo $path ?>main2.css<?php echo $ver ?>' type='text/css'>
    <link rel="stylesheet" href="<?php echo $path ?>index/fontello/css/fontello.css<?php echo $ver ?>">
    <link rel="dns-prefetch" href="http://2.devework.com">
    <!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
    <script type="text/javascript" src="<?php echo $path ?>index/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $path ?>index/jquery.onepage-scroll.js<?php echo $ver ?>"></script>
</head>
<body>
    <div class="loading-home rectangle-bounce">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
  <div class="wrapper">
		<?php require_once('fixheader.php');?>
	  <div class="main">
       <section class="page0" id="pattern-draw"> 
          <div class="page_container">
            <div class="focus">
              <div class="image"></div>
                <div class="intro">
                  <div class="intro_txt yuehei">
                    <p class="text1">WordPress Mobile Theme</p>
                    <p class="text2">DeveMobile</p>
                    <p class="text3">乘风破浪，顺势移动互联网！</p>
                  </div>
                  <p class="intro_btn">
                    <span class="download">
                              <a href="http://store.devework.com/product/devemobile" title="立即购买">立即购买</a>
                    </span>
                        <span class="preview">
                            <a href="http://devework.com/theme/easemobile/" title="购买另外一款移动主题EaseMobile" id="downloadBtnfree" >EaseMobile</a>
                              <!--<span class="txt" id="tipPopup"></span>-->
                        </span>
                  </p>
                </div>
            </div>

          </div>            
      <p class="nav-down"><a id="MoveDown" class="pulsate-opacity"><i class="icon-down"></i></a></p>
      </section>        
      <section class="page1">
        <div class="page_container">
          <h1 class="siyuan">移动时代，触摸互联</h1>
          <h2>2013年 中国移动互联网市场规模已突破<strong>1060</strong>亿<br>
 			2014年 中国智能手机出货量约<strong>4.52</strong>亿部<br>
      2015年 中国移动互联网市场规模预计达<strong>4296</strong>亿<br>
		  </h2>
          <p class="datafrom">* 数据来源：艾瑞咨询(iiMedia Research)、中国互联网协会报告</p>
          <p class="credit">移动互联网时代，您的WordPress 站点<br>需要这么一款移动（手机）主题！</p>
  	    </div>
  	    <img src="<?php echo $path ?>index/phone2.png" alt="phones">
      </section>
	    
	    <section class="page2">
	      <div class="page_container">
          <h1 class="siyuan">简约，却不简单；扁平，亦小有水平</h1>
            <span class="left">
              <ul>
                <li class="icon-android">Materials Design风格</li>
                
            <li class="icon-pagelines">7种皮肤配色</li>
                <li class="icon-menu">Off Canvas 侧边栏</li>
              </ul>
            </span>
            <span class="right">
              <ul>
                <li class="icon-html5">HTML5+CSS3</li>
                <li class="icon-eye">WebFont 矢量图标</li>
                <li class="icon-picture">主题核心不含图片</li>
              </ul>
            </span>
          <!--<p class="">不是我故意显摆，但 TA 真的还挺出众</p>-->
	      </div>
      </section>
	    
	    <section class="page3">
	      <div class="page_container">
          <h1 class="siyuan">看着舒心，用着流畅</h1>
          <h2>
            轻量级主题，核心JS 代码仅15kb；<br>
            最大限度地压缩精简代码；<br>
			更采用设备硬件进行 GPU加速。<br>
		  </h2>
		  <p class="p3p">畅快滑动之间，尽享移动互联</p>
  	    </div>
      </section>

       <section class="page4">
        <div class="page_container">
          <h1 class="siyuan">不是 APP，堪比 APP</h1>
             <h2>
				不仅仅适合手机浏览器、微信、微博客户端浏览，<br>
				更借助Web App模式，让网站瞬间变成一个本地APP。<br>
      		</h2>
          <p class="credit"></p>
        </div>
      </section>
     

    </div>
  </div>
      <script src="<?php echo $path ?>index/d3.v3.min.js"></script>
        <script src="<?php echo $path ?>index/trianglify.min.js"></script>
        <script>
            $(document).ready(function(){
                //main functions
                $(".main").onepage_scroll({
                  sectionContainer: "section",
                  loop: true,
                     //updateURL: true, 
                  responsiveFallback: 600
                });
                //鼠标点击事件，下一页
                $('#MoveDown').click(function() {
                  $(".main").moveDown();
                });
                //low ploy
                var t = new Trianglify();
                var pattern = t.generate(document.body.clientWidth, document.body.clientHeight);
                var dwdraw =document.getElementById("pattern-draw");
                dwdraw.setAttribute('style', 'background-image: '+pattern.dataUrl);
                //loading
                setTimeout(function () {  
                    $('.loading-home').css('opacity','0');
                    $('.wrapper').css('opacity','1');    
                 }, 1000);
               });
        </script>
</body>
<!--20150318 添加思源黑体、悦黑webfont-->
<!--20150321 添加loading 特效-->
</html><?php } ?>