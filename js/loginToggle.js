function toRegister() {
  var login = document.getElementsByClassName('logindiv');
  login[0].style.display = "none";
  login[1].style.display = "none";

  var signup = document.getElementsByClassName('signup');
  signup[0].style.display = "block";
  signup[1].style.display = "block";
}

function toLogin() {
  var login = document.getElementsByClassName('logindiv');
  login[0].style.display = "block";
  login[1].style.display = "block";

  var signup = document.getElementsByClassName('signup');
  signup[0].style.display = "none";
  signup[1].style.display = "none";
}