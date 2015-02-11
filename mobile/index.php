<?php require_once('./function.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>DeveMobile 主题主页-手机版 | DeveWork</title>
<link rel="stylesheet" href="<?php echo $path ?>mobile/mobile2.css?ver=201502102121" />
<link
    rel="stylesheet"
    type="text/css"
    href="<?php echo $path ?>mobile/retina.css"
    media="only screen and (-webkit-min-device-pixel-ratio: 2)"
/>
</head>
<body>
    <div class="slider" id="slider">            
            <div class="wp clearfix">
                    <article class="act_wp intro1">                            
				<h1 class="hid">WordPress+移动互联网</h1>
				<p class="hid">移动互联网时代，你的WordPress 站点需要一款手机主题，而DeveMobile就是专门的一款移动主题</p>
                    </article>
                    <article class="act_wp intro2">                           
				<h1 class="hid">Materials Design风格</h1>
				<p class="hid">DeveMobile2 全新升级，Materials Design风格，在增强功能的基础上给你全新的视觉体验</p>
                    </article>
                    <article class="act_wp intro3">                            
				<h1 class="hid">舒心，流畅</h1>
				<p class="hid">DeveMobile2在保证功能的前提下对性能进行了优化。让您畅快滑动之间，尽享移动互联。</p>
                    </article>
                    <article class="act_wp intro4">                           
				<h1 class="hid">APP模式</h1>
				<p class="hid">不仅仅适合手机浏览器、微信等浏览，更借助Web App模式，让网站瞬间变成一个本地APP</p>
                    </article>
                    <article class="act_wp intro5">                           
                <h1 class="hid">DeveMobile</h1>
                <p class="hid">专业的移动主题</p>
                    <a class="btn_dl" href="javascript:alert('请用PC浏览器访问本页面了解主题细节😊 http://devework.com/theme/devemobile')" id="knowMore">了解更多</a>
                    </article>
            </div>	
    </div>	
    <div class="dots_bar" id="dots"><span class="on"></span><span></span><span></span><span></span><span></span></div>
<script src="<?php echo $path ?>mobile/swipe.js"></script> 
<script>
  var bullets = document.getElementById('dots').getElementsByTagName('span');
  Swipe(document.getElementById('slider'), {
    auto: 0,
    speed: 160,
    continuous: true,
    callback: function(pos) {
      var i = bullets.length;
      while (i--) {		 
        bullets[i].className = ' ';
      }	  
      bullets[pos].className = 'on';	
    }
  });   
</script>        
</body>
</html>