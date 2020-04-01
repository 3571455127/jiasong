<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
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
        <link rel="stylesheet" href="__PUBLIC__/www/css/animate.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src='__PUBLIC__/www/js/jquery.min.js'></script>
    <script src="__PUBLIC__/www/js/swiper.min.js"></script>
        <script src="__PUBLIC__/www/js/swiper.animate.min.js"></script>
    <script src="__PUBLIC__/www/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/www/js/main.js"></script>
    <script>
//        function IsPC() {
//            var userAgentInfo = navigator.userAgent;
//            var Agents = ["Android", "iPhone",
//                "SymbianOS", "Windows Phone",
//                "iPad", "iPod"
//            ];
//            var flag = true;
//            for (var v = 0; v < Agents.length; v++) {
//                if (userAgentInfo.indexOf(Agents[v]) > 0) {
//                    flag = false;
//                    break;
//                }
//            }
//            return flag;
//        }
//        var isp = IsPC();
//        if (!isp) {
//            window.location.href = "/mobile.php";
//        }
    </script>
</head>

<body data-spy="scroll" data-target="#navbar-example">

    <!-- header -->
    <header>
        <div class="top-bar clearfix">
            <div class="container">
                <div class="row">
                    <div class="phone col-lg-3 col-md-3 col-sm-4"><span><?php echo ($phone); ?></span></div>
                    <div class="eamil col-lg-3 col-md-3 col-sm-4">
                        <a href="mailto:<?php echo ($site_email); ?>" target="_blank" class="emails">
                            <span><?php echo ($site_email); ?></span></a>
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
<div class="index">

  <!-- banner  -->
  <div id="home" class="banner">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php  $_result=M("slide_data")->field("*")->where("fid = 1 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide">
            <div class="container">
              <div class="row">
                <div class="contant">
                  <!--                   <div class="title">Here Is The Title</div>
                  <p>Here is the subtitleHere is the subtitleHere is the subtitleHere</p>
                  <a href="#contact"> Contact Us</a> -->
                  <div class="title ani" swiper-animate-effect="slideInLeft" swiper-animate-delay="0.2s"><?php echo ($r["title"]); ?>
                  </div>
                  <p class="ani" swiper-animate-effect="slideInLeft" swiper-animate-delay="0.2s"><?php echo ($r["description"]); ?></p>
                  <a class="ani" swiper-animate-effect="slideInLeft" swiper-animate-delay="0.4s" href="contact"> Contact
                    Us</a>
                </div>
              </div>
            </div>
            <a href="<?php echo ($r["link"]); ?>" target="_blank" title="<?php echo ($r["title"]); ?>"> <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>"></a>
          </div><?php endforeach; endif;?>
        <!-- <div class="swiper-slide">
          <img src="__PUBLIC__/www/images/banner.png" alt="">
        </div> -->
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-btn">
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
      </div>

    </div>
  </div>

  <!-- product -->
  <div id="product">
    <div class="product">
      <h3>Product</h3>
      <div class="list clearfix">
        <div class="pro-pc">
          <?php  $_result=M("Product")->field("thumb,title,radis,cont,listorder,id")->where(" 1  AND status=1  AND catid=73")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- 图文 -->
            <?php if($r['radis']==1) : ?>
            <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
              <div class="img col-lg-6  col-md-6 col-sm-6 col-xs-12">
                <div class="box-img">
                  <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                </div>

              </div>
              <div class="txt col-lg-6  col-md-6 col-sm-6 col-xs-12">
                <div class="pro-content">
                  <?php echo ($r["cont"]); ?>
                </div>

              </div>
            </div>
            <?php else :?>
            <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
              <div class="txt col-lg-6  col-md-6 col-sm-6 col-xs-12">
                <div class="pro-content">
                  <?php echo ($r["cont"]); ?>
                </div>

              </div>
              <div class="img col-lg-6  col-md-6 col-sm-6 col-xs-12">
                <div class="box-img">
                  <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                </div>

              </div>

            </div>
            <?php endif; endforeach; endif;?>
        </div>
        <!-- wap -->
        <div class="pro-wap">
          <?php  $_result=M("Product")->field("thumb,title,radis,cont,listorder,id")->where(" 1  AND status=1  AND catid=73")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
              <div class="img col-lg-6  col-md-6 col-sm-6 col-xs-12">
                <div class="box-img">
                  <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                </div>
              </div>
              <div class="txt col-lg-6  col-md-6 col-sm-6 col-xs-12">
                <div class="pro-content clearfix">
                  <?php echo ($r["cont"]); ?>
                </div>

              </div>
            </div><?php endforeach; endif;?>
        </div>
      </div>



    </div>
  </div>

  <!-- about -->
  <div id="about">
    <div class="about">
      <div class="container">
        <div class="row">
          <h3>about us</h3>
          <div class="top clearfix">
            <div class="about-txt col-lg-6 col-md-6 col-sm-6 col-lg-12">
              <?php getcatvar('page','id = 74','cont');?>
            </div>
            <div class="about-swiper col-lg-6 col-md-6 col-sm-6 col-lg-12">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php  $_result=M("slide_data")->field("*")->where("fid = 2 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide">
                      <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>">
                    </div><?php endforeach; endif;?>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
          <div class="business">
            <div class="title">Business scope</div>
            <div class="list clearfix">
              <?php  $_result=M("Case")->field("thumb,title,listorder,id")->where(" 1  AND status=1  AND catid=110")->order("listorder desc")->limit("120")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="box col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <div class="box-img"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
                  <p><?php echo ($r["title"]); ?></p>
                </div><?php endforeach; endif;?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Partner -->
  <div id="partner">
    <div class="partner">
      <h3>Partner</h3>
      <div class="container">
        <div class="row">
          <div class="partner-box">
            <div class="swiper-container">
              <div class="swiper-wrapper">

                <?php  $_result=M("History")->field("thumb,title,listorder,id")->where(" 1  AND status=1  AND catid=77")->order("listorder desc")->limit("120")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="swiper-slide">
                    <div class="box-img">
                      <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                    </div>
                  </div><?php endforeach; endif;?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-btn">
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Feedback -->
  <div id="feedback">
    <div class="feedback">
      <h3>Customer Feedback</h3>
      <div class="container">
        <div class="row">
          <div class="feedback-box">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php  $_result=M("Customer")->field("thumb,title,cont,listorder,id")->where(" 1  AND status=1  AND catid=108")->order("listorder desc")->limit("120")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="swiper-slide">
                    <div class="box clearfix">
                      <div class="img col-lg-4 col-xs-4"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
                      <div class="txt col-lg-8 col-xs-8">
                        <?php echo ($r["cont"]); ?>
                      </div>
                    </div>
                  </div><?php endforeach; endif;?>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-btn">
              <div class="swiper-button-prev swiper-button-white"></div>
              <div class="swiper-button-next swiper-button-white"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- contact -->
  <div id="contact">
    <div class="contact">
      <div class="container">
        <div class="row">
          <h3>Contact Us</h3>
          <div class="form-box clearfix">

            <form class="col-lg-7 col-md-7 col-sm-6" name="form" method="post" onsubmit="return beforeSubmit2(this);"
              action="index.php?g=Home&a=message">
              <div class="clearfix">
                <input name="forward" type="hidden"
                  value="<?php echo ($_SERVER['SERVER_NAME']); if($catid) : ?>/index.php?m=<?php echo ($Categorys[$catid]['module']); ?>&a=index&id=<?php echo ($catid); else :?>/index.php<?php endif;?>" />
                <!--<input type="hidden" name="product" id="product" value="">-->
                <div class="box clearfix">
                  <div class="box-left col-lg-4 col-md-4">
                    <p>Name <span> *</span></p>
                  </div>
                  <div class="col-lg-8 col-md-8"> <input type="text" name="name"></div>
                </div>
                <div class="box clearfix">
                  <div class="box-left col-lg-4 col-md-4">
                    <p>Email <span>*</span></p>
                  </div>
                  <div class="col-lg-8 col-md-8"> <input type="text" name="email"></div>
                </div>
                <div class="box clearfix">
                  <div class="box-left col-lg-4 col-md-4">
                    <p>Company name <span>*</span></p>
                  </div>
                  <div class="col-lg-8 col-md-8"> <input type="text" name="com"></div>
                </div>
                <div class="box clearfix">
                  <div class="box-left col-lg-4 col-md-4">
                    <p> Message <span>*</span></p>
                  </div>
                  <div class="col-lg-8 col-md-8"> <textarea name="message"></textarea></div>
                </div>
              </div>
              <div class="box-btns"> <input type="submit" value="SUBMIT" class="submit-btn"></div>
            </form>
            <div class="details col-lg-5 col-md-5 col-sm-6">
              <h5><?php echo ($site_name); ?></h5>
              <div class="boxs clearfix">
                <div class="boxs-img col-lg-2 col-md-2 col-sm-2 col-xs-2"><img src="__PUBLIC__/www/images/address.png"
                    alt="">
                </div>
                <div class="boxs-txt col-lg-10 col-md-10 col-sm-10 col-xs-10">
                  <?php echo ($address); ?> </div>
              </div>
              <div class="boxs clearfix">
                <div class="boxs-img col-lg-2 col-md-2 col-sm-2 col-xs-2"><img src="__PUBLIC__/www/images/eamil.png"
                    alt="">
                </div>
                <div class="boxs-txt col-lg-10 col-md-10 col-sm-10 col-xs-10">
                  <a class="eamils" href="mailto:<?php echo ($site_email); ?>" target="_blank"><?php echo ($site_email); ?> </a>
                </div>
              </div>
              <div class="boxs clearfix">
                <div class="boxs-img col-lg-2 col-md-2 col-sm-2 col-xs-2"><img src="__PUBLIC__/www/images/phone.png"
                    alt="">
                </div>
                <div class="boxs-txt col-lg-10 col-md-10 col-sm-10 col-xs-10"> <?php echo ($phone); ?>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
<!-- footer -->
<footer>
    <div class="copy"> <?php echo ($cop); ?> </div>
    <div class="goTop">
        <i class="topIcon"></i>
        <p>TOP</p>
    </div>
</footer>
</body>

</html>