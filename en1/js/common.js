var isLoginS = localStorage.getItem("vrbig");
if (isLoginS) {
  isLogin = JSON.parse(localStorage.getItem("vrbig"));
  if(Object.keys(isLogin).length) {
    $('.usernameAndLogin').attr('href', 'javascript:;');
    $('.usernameAndLogin').html(isLogin.phone.substr(0, 3) + '****' + isLogin.phone.substr(7));
    $('.logoutAndRegister').html('Logout');
    $('.logoutAndRegister').attr('href', 'javascript:;');
  }
  $('.logoutAndRegister').on('click', function() {
    if (Object.keys(isLogin).length) {
      // 登出
      localStorage.setItem("vrbig", "");
      $(location).attr('href', 'home.html');  // 跳转到首页
    }
  });
}

$('.click_im_area').on('click', function() {
  if (isLoginS) {
    $(location).attr('href', 'import.html');  // 跳转到首页
  } else {
    $(location).attr('href', 'login.html');  // 跳转到首页
  }
});

$('.header_wrap .header .list').on('click', function () {
  if (isLoginS) {
    $(location).attr('href', 'list.html');  // 
  } else {
    $(location).attr('href', 'login.html?from=list');  // 跳转到首页
  }
});



