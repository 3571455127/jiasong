<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TNMWNT9');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">

    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <!-- css-->
    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src='__PUBLIC__/www/js/jquery.min.js'></script>
    <script src="__PUBLIC__/www/js/swiper.min.js"></script>
    <script src="__PUBLIC__/www/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/www/js/main.js"></script>
    <script>
        function IsPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"
            ];
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
        if (!isp) {
            window.location.href = "/mobile.php";
        }
    </script>
</head>

<body data-spy="scroll" data-target="#navbar-example">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNMWNT9" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- header -->
    <header>
        <div class="top-bar clearfix">
            <div class="container">
                <div class="row">
                    <div class="phone col-lg-3 col-md-3 col-sm-3"><span>+86-21-59101751-153</span></div>
                    <div class="eamil col-lg-3 col-md-3 col-sm-3">
                        <a href="mailto:<?php echo ($email); ?>" target="_blank" class="emails">
                            <span>info@gerpman.com</span></a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>
                </div>

                <div id="navbar-example">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#product">Product</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#partner">Partner</a></li>
                            <li><a href="#feedback">Customer Feedback</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </header>

<!--面包屑导航-->
<div class="mianbao">
    <!-- <div class="mb_dao">
        <img src="__PUBLIC__/www/images/home-icon.png" onclick="window.open('http://<?php echo $_SERVER['HTTP_HOST']?>','_self');"/>
        <a href="/contact.html">Contact Us</a>
    </div> -->
</div>

<!--联系我们内容部分-->
<div class="contact" style="background: #fff;margin-top: 150px;padding: 80px 0">
    <h4>WE ARE MORE THAN HAPPY TO ANSWER ANY ENQUIRIES VIA THIS CONTACT PAGE OR EMAIL!!!</h4>
    <div class="contact_center">
        <div class="center_left">
            <h4>TO GET IN TOUCH</h4>
            <h5><img src="__PUBLIC__/www/images/c1.png" alt="" />HEAD OFFICE LOCATION</h5>
            <p><?php echo ($address); ?></p>

            <h5><img src="__PUBLIC__/www/images/c2.png" alt="" />OFFICE CONTACT</h5>
            <p><span>TEL:</span> <?php echo ($phone); ?> </p>

            <p><span>FAX: </span><?php echo ($domestic_fax); ?></p>
            <p><span>EMAIL: </span><?php echo ($email); ?></p>
        </div>
        <div class="center_right">
            <h4>LEAVE A MESSAGE</h4>
            <form name="form" method="post" action="index.php?g=Home&a=message" id="contact_form" >
            <input name="forward" type="hidden" value="<?php echo ($_SERVER['SERVER_NAME']); if($catid) : ?>/index.php?m=<?php echo ($Categorys[$catid]['module']); ?>&a=index&id=<?php echo ($catid); else :?>/index.php<?php endif;?>"/>
            <input type="hidden" name="lang" value="<?php echo ($Lang); ?>">
            <span style="marg-right:5px;color:red;font-weight:700;">*</span>&nbsp;<input type="text" name="name" id="name" placeholder="name">
            <span style="marg-right:5px;color:red;font-weight:700;">*</span>&nbsp;<input type="text" name="phone" id="phone" placeholder="Phone">
            <span style="marg-right:5px;color:red;font-weight:700;">*</span>&nbsp;<input type="text" name="email" id="mail" placeholder="Email">
            <textarea name="message" id="message" placeholder="Your Message"></textarea>
                <input type="submit" class="contact_send" value="SUBMIT NOW">
            </form>
        </div>
    </div>
    <div class="map_div">
		<iframe src="http://www.google.cn/maps/embed?pb=!1m18!1m12!1m3!1d1838.9095370799!2d113.23523165818717!3d22.809166996265365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340248e1014a77b5%3A0xaeddd6f6aeeff16f!2z5bm_5Lic6ZS75Y6L5py65bqK5Y6C!5e0!3m2!1szh-CN!2scn!4v1545381409014" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</div>
<!--顶部图片-->
<div class="top_img">
  <img src="__PUBLIC__/www/images/product_bander.jpg" alt="" />
</div>

<!-- footer -->
<footer>
    <div class="copy"> © 2020 Shanghai Jason Plastic Co.,Ltd </div>
    <div class="goTop">
        <i class="topIcon"></i>
        <p>TOP</p>
    </div>
</footer>
</body>

</html>