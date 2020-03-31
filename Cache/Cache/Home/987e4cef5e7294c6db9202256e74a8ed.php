<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TNMWNT9');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">

    <meta name="keywords" content="<?php echo ($seo_keywords); ?>"/>
    <meta name="description" content="<?php echo ($seo_description); ?>"/>
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>

     <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
     <meta name="renderer" content="webkit">
     <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <!-- css-->
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/animate.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/comment.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script>
     function IsPC() {
          var userAgentInfo = navigator.userAgent;
          var Agents = ["Android", "iPhone",
                      "SymbianOS", "Windows Phone",
                      "iPad", "iPod"];
          var flag = true;
          for (var v = 0; v < Agents.length; v++) {
              if (userAgentInfo.indexOf(Agents[v]) > 0) {
                  flag = false;
                 break;
             }
         }
         return flag;
      }
      var isp = IsPC();
      if(!isp){
            window.location.href="/mobile.php";
      }
</script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNMWNT9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--顶部导航-->
<header>
    <div class="header1 header2" >
        <img src="__PUBLIC__/www/images/logo.png" alt="" />
        <!--当前页面给a标签添加属性.active-->
        <ul>
            <li>
                <a class="<?php if(MODULE_NAME == 'Index') : ?>active<?php endif;?>" href="/index.php">HOME</a>
            </li>
            <?php $n=0;foreach($Categorys as $key=>$r):if($n<7) :if( intval(0)==$r["parentid"] ) :++$n; if($r[catname] != 'THANKS' ): ?><li>
                <a href="<?php echo ($r["url"]); ?>" class="<?php if($bcid==$r[id]) : ?>active<?php endif;?>"><?php echo ($r["catname"]); ?></a>
                <?php if($r[child] == 1 && $r[id] !=74) : ?>
                <ul class="erji">
                    <?php $n=0;foreach($Categorys as $key=>$res):if($n<99) :if( intval($r[id])==$res["parentid"] ) :++$n;?><li><a href="<?php echo ($res["url"]); ?>" class="<?php if($catid==$res[id]) : ?>active<?php endif;?>"><?php echo ($res["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                </ul>
                <?php endif;?>
            </li><?php endif; endif; endif; endforeach;?>
        </ul>
    </div>
    <div class="header"style="display: none;">
        <div class="header1">
            <img src="__PUBLIC__/www/images/logo.png" alt="" />
            <!--当前页面给a标签添加属性.active-->
            <ul>
                <li>
                    <a class="<?php if(MODULE_NAME == 'Index') : ?>active<?php endif;?>" href="/index.php">HOME</a>
                </li>
                <?php $n=0;foreach($Categorys as $key=>$r):if($n<99) :if( intval(0)==$r["parentid"] ) :++$n; if($r[catname] != 'THANKS' ): ?><li>
                    <a href="<?php echo ($r["url"]); ?>" class="<?php if($bcid==$r[id]) : ?>active<?php endif;?>"><?php echo ($r["catname"]); ?></a>
                    <?php if($r[child] == 1) : ?>
                    <ul class="erji">
                        <?php $n=0;foreach($Categorys as $key=>$res):if($n<99) :if( intval($r[id])==$res["parentid"] ) :++$n;?><li><a href="<?php echo ($res["url"]); ?>" class="<?php if($catid==$res[id]) : ?>active<?php endif;?>"><?php echo ($res["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                    </ul>
                    <?php endif;?>
                </li><?php endif; endif; endif; endforeach;?>
            </ul>
        </div>
    </div>

</header>

<!--面包屑导航-->
<div class="mianbao">
    <div class="mb_dao">
        <img src="__PUBLIC__/www/images/home-icon.png" alt="" onclick="window.open('http://<?php echo $_SERVER['HTTP_HOST']?>','_self');" />
    </div>
</div>

<!--联系我们内容部分-->
<div class="contact" style="background: #ffffff;margin-top: 150px;padding: 80px 0">
    <h4 style="height: 30px;">Thanks for your inquiry!</h4>
    <div class="contact_center">
        <div class="center_left" style="text-align: center;width: 100%;">
            <p>Our Professional Team Will Contact With You In 24 Hours.</p>
        </div>

    </div>
    <div class="map_div">
        <iframe src="http://www.google.cn/maps/embed?pb=!1m18!1m12!1m3!1d3677.8552198953444!2d113.23522731543332!3d22.807827985062172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340248e1962a1313%3A0x32246cb8177d4ac2!2z5bm_5Lic55yB5L2b5bGx5biC6aG65b635Yy66L-e5a6J57q_!5e0!3m2!1szh-CN!2scn!4v1539765743992" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</div>
<!--顶部图片-->
<div class="top_img">
  <img src="__PUBLIC__/www/images/product_bander.jpg" alt="" />
</div>

<!--foote部分-->
<div class="footer_top">
    <div><img src="__PUBLIC__/www/images/logo.png" alt="" /></div>
    <div>
    <?php $n=0;foreach($Categorys as $key=>$r):if($n<99) :if( intval(0)==$r["parentid"] ) :++$n; if($r[catname] != 'THANKS' ): ?><a href="<?php echo ($r["url"]); ?>"><?php echo ($r["catname"]); ?></a><?php endif; endif; endif; endforeach;?>
    </div>
    <div class="footer_img">
        <!--<div><img src="__PUBLIC__/www/images/index_icon1.png" alt="" /></div>-->
        <div><a href="<?php echo ($twitter); ?>" target='_BLANK'><img src="__PUBLIC__/www/images/index_icon2.png" alt="" /></a></div>
        <div><a href="<?php echo ($google); ?>" target='_BLANK'><img src="__PUBLIC__/www/images/index_icon3.png" alt="" /></a></div>
        <div><a href="<?php echo ($facebook); ?>" target='_BLANK'><img src="__PUBLIC__/www/images/index_icon4.png" alt="" /></a></div>
        <div><a href="<?php echo ($youtube); ?>" target='_BLANK'><img src="__PUBLIC__/www/images/index_icon5.png" alt="" /></a></div>
        <div><a href="<?php echo ($ins); ?>" target='_BLANK'><img src="__PUBLIC__/www/images/index_icon6.png" alt="" /></a></div>
    </div>
</div>
<div class="footer">
<?php echo ($cop); ?>
</div>
<!--TOP键-->
<img src="__PUBLIC__/www/images/top.png" alt="" class="top_index">
<!--Inquire Now-->
<div class="float-form">
    <div class="show-btn" style="display: block;">
        INQUIRE NOW!
    </div>
    <div class="show-form" style="display: none; ">
        <span class="X">X</span>
        <h3>CONTACT US</h3>
        <form name="form" method="post" action="index.php?g=Home&a=message" id="tan_form" enctype="multipart/form-data">
            <input name="forward" type="hidden" value="<?php echo ($_SERVER['SERVER_NAME']); if($catid) : ?>/index.php?m=<?php echo ($Categorys[$catid]['module']); ?>&a=index&id=<?php echo ($catid); else :?>/index.php<?php endif;?>"/>
            <input type="hidden" name="lang" value="<?php echo ($Lang); ?>">
            <input type="text" name="name" id="name_tan" placeholder="name">
            <input type="text" name="phone" id="phone_tan" placeholder="Phone">
            <input type="text" name="email" id="mail_tan" placeholder="Email">
             <!--<input type="file" name="files" />-->
            <textarea name="message" id="message_tan" placeholder="Your Message"></textarea>
            <input id="form_submit" type="submit" class="index_send" value="SUBMIT">
        </form>
    </div>
</div>
</body>
<script src='__PUBLIC__/www/js/jquery-2.2.0.min.js'></script>
<script src='__PUBLIC__/www/js/bootstrap.min.js'></script>
<script src='__PUBLIC__/www/js/swiper.min.js'></script>
<script src='__PUBLIC__/www/js/wow.min.js'></script>
<script src='__PUBLIC__/www/js/main.js'></script>
<script type="text/javascript">
//导航栏的切换
     $(window).scroll(function () {
                var h = $(window).scrollTop();
                if(h > 200){
                    $('.header2').fadeOut();
                    $('.header').fadeIn();
                }else{
                    $('.header').fadeOut();
                    $('.header2').fadeIn();
                }
          });

</script>
<script>
    $('.detail_Specification img').eq(0).click(function(){
        var path1=$(".detail_Specification img").eq(0).attr("src");
        var url1 = 'http://<?php echo $_SERVER["HTTP_HOST"]?>'+path1;
        window.open(url1,'_blank');
    });

    $('.detail_Specification img').eq(1).click(function(){
        var path2=$(".detail_Specification img").eq(1).attr("src");
        var url2 = 'http://<?php echo $_SERVER["HTTP_HOST"]?>'+path2;
        window.open(url2,'_blank');
    });
</script>
</html>