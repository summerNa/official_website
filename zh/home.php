<?php
// if(!isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) || strrpos(strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']), 'zh-cn') !== false) {
//   include_once('lang/zh.php');
// } else {
//   include_once('lang/en.php');
// }
include_once('../lang/zh.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/home.css">
  <title>
    <?php echo $lang['首页']; ?>
  </title>
</head>

<body>
  <div class="header_wrap">
    <div class="header">
      <a href="home.php" class="left">
        <img src="img/common/logo.png" alt="">
      </a>
      <ul class="middle">
        <li class="actived">
          <a class="home">
            <?php echo $lang['首页']; ?></a>
        </li>
        <li>
          <a href="product.php">
            <?php echo $lang['产品']; ?></a>
        </li>
        <li>
          <a href="introduce.php">
            <?php echo $lang['关于我们']; ?></a>
        </li>
        <li class="">
          <a class="list" href="javascript:;">
            <?php echo $lang['小宇矿机']; ?></a>
        </li>
      </ul>
      <div class="right">
        <!-- <a class="click_im_area" href="javascript:;">
          <div class="im_box">
            <img src="img/common/yun.png" alt="">
          </div>
          <p class="in">导入</p>
        </a> -->
        <ul class="loginYet">
          <li class="loginY">
            <a class="usernameAndLogin" href="login.php">
              <?php echo $lang['登录']; ?></a>
          </li>
          <li>
            <div class="line"></div>
          </li>
          <li class="loginY">
            <a class="logoutAndRegister" href="register.php">
              <?php echo $lang['注册']; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="banner_slider" id="banner_slider">
    <div class="banner_slider_pics" id="banner_slider_pics">
      <div class="fff">
        <img src="img/home/banner3.jpg">
        <div class="info info3">
          <p>
            <?php echo $lang['稳定、安全、高效']; ?>
          </p>
        </div>
      </div>
      <div class="fff">
        <img src="img/home/banner1.jpg">
        <div class="info info1">
          <p>
            <?php echo $lang['迅雷官方授权推荐玩客云监控工具']; ?>
          </p>
          <!-- <a href="register.html">注册体验</a> -->
        </div>
      </div>
      <div class="fff">
        <img src="img/home/banner2.jpg">
        <div class="info info2">
          <p class="t">
            <?php echo $lang['致力于']; ?>
          </p>
          <p class="d">
            <?php echo $lang['欢迎广大用户的到来']; ?>
          </p>
        </div>
      </div>
      <div class="fff">
        <img src="img/home/banner3.jpg">
        <div class="info info3">
          <p>
            <?php echo $lang['稳定、安全、高效']; ?>
          </p>
        </div>
      </div>
      <div class="fff">
        <img src="img/home/banner1.jpg">
        <div class="info info1">
          <p>
            <?php echo $lang['小宇监工迅雷官方唯一推荐']; ?>
          </p>
          <a href="register.php">
            <?php echo $lang['注册体验']; ?></a>
        </div>
      </div>
    </div>

    <div class="banner_slider_dots" id="banner_slider_dots">
      <a href="#7" class="dots_item dots_active"></a>
      <a href="#8" class="dots_item"></a>
      <a href="#9" class="dots_item"></a>
    </div>
  </div>
  <div class="list_wrap">
    <a href="active.php" class="list clickArea">
      <img src="img/home/one.jpg" alt="" />
      <div class="info">
        <p>
          <?php echo $lang['小宇活动']; ?>
        </p>
        <div class="button1">
          <?php echo $lang['限时优惠']; ?>
        </div>
      </div>
    </a>

    <a href="latest_news.php" class="list clickArea">
      <img src="img/home/two.jpg" alt="" />
      <div class="info">
        <p>
          <?php echo $lang['行业资讯']; ?>
        </p>
        <div class="button2">
          <?php echo $lang['专业职业']; ?>
        </div>
      </div>
    </a>

    <a href="product.php" class="list clickArea">
      <img src="img/home/three.jpg" alt="">
      <div class="info">
        <p>
          <?php echo $lang['下载专区']; ?>
        </p>
        <div class="button3">
          <?php echo $lang['急速下载']; ?>
        </div>
      </div>
    </a>
    <a href="http://www.onethingcloud.cn/site/index.html" class="list clickArea">
      <img src="img/home/four.jpg" alt="">
      <div class="info info4">
        <p>
          <?php echo $lang['玩客云']; ?>
        </p>
        <div class="button4">
          <?php echo $lang['准确稳定']; ?>
        </div>
      </div>
    </a>
  </div>
  <div class="footer_wrap">
    <div class="footer">
      <ul class="about">
        <li class="title">
          <?php echo $lang['关于宇监']; ?>
        </li>
        <li><a href="https://jq.qq.com/?_wv=1027&k=55yFqiF">
            <?php echo $lang['合作机会']; ?></a></li>
        <li><a href="https://jq.qq.com/?_wv=1027&k=55yFqiF">
            <?php echo $lang['加入我们']; ?></a></li>
      </ul>
      <ul class="contact">
        <li class="title">
          <?php echo $lang['联系宇监']; ?>
        </li>
        <li class="QQ"><span>
            <?php echo $lang['QQ群']; ?></span> <a href="https://jq.qq.com/?_wv=1027&k=55yFqiF"><img src="img/common/contact.png"
              alt=""></a></li>
        <li><span class="email">
            <?php echo $lang['邮箱']; ?></span> <span>
            <?php echo $lang['邮箱2']; ?></span></li>
      </ul>
      <ul class="wechart">
        <li class="title">
          <?php echo $lang['微信公众号']; ?>
        </li>
        <li><img src="img/common/code.jpg" alt=""></li>
      </ul>
    </div>
    <div class="icp">
      <?php echo $lang['沪ICP备18026697号']; ?>
    </div>
  </div>

</body>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/common.js"></script>
<script>
  $(document).ready(function () {

    var whdef = 100 / 1920; // 表示1920的设计图,使用100PX的默认值
    var wH = window.innerHeight; // 当前窗口的高度
    var wW = window.innerWidth; // 当前窗口的宽度
    var rem = wW * whdef; // 以默认比例值乘以当前窗口宽度,得到该宽度下的相应FONT-SIZE值
    $('html').css('font-size', rem + "px");

    $(window).resize(function () {
      wH = window.innerHeight;
      wW = window.innerWidth;
      rem = wW * whdef;
      $('html').css('font-size', rem + "px");
      pic_width = $('#banner_slider_pics .fff').eq(0).width();
    });


    var banner_slider = $('#banner_slider'),
      pics = $('#banner_slider_pics'),
      items = $('#banner_slider_pics .fff'),
      pic_width = items.eq(0).width(),
      dots = $('#banner_slider_dots a'),
      btn_prev = $('#arrow_prev'),
      btn_next = $('#arrow_next'),
      current = 0,
      timmer = null,
      size = dots.size();
    // 定义一个鼠标滑过判断事件
    banner_slider.hover(function () {
      clearInterval(timmer);
    }, function () {
      timmer = setInterval(slider, 3000);
    });
    function slider() {
      current++;
      doSlider();
    }
    function doSlider() {
      // 圆点按钮轮播
      dots.removeClass('dots_active').eq(current % size).addClass('dots_active');
      // 图片轮播
      pics.stop().animate({
        left: -(current + 1) * pic_width
      }, 1000, function () {
        if (current == size) {
          current = 0;
          pics.css('left', -(current + 1) * pic_width + 'px');
        } else if (current == -1) {
          current = size - 1;
          pics.css('left', -(size) * pic_width + 'px');
        }
      });
    }
    timmer = setInterval(slider, 3000);

    // 点击圆点切换图片
    dots.click(function () {
      current = $(this).index();
      doSlider();
    });


  })
</script>

</html>