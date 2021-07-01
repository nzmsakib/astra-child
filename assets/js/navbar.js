var mainNavbar = document.getElementsByClassName('main-header-bar')[0];
var navPos = mainNavbar.getBoundingClientRect().top;
window.onscroll = function() {
    console.log();
    console.log(window.pageYOffset);
    
    if (window.pageYOffset + document.documentElement.offsetTop >= navPos) {
        mainNavbar.classList.add('main-header-bar-sticky-top');
        if (document.documentElement.offsetTop > 0) {
            $('.main-header-bar-sticky-top').css('top', document.documentElement.offsetTop + 'px');
        }
    } else {
        if (document.documentElement.offsetTop > 0) {
            $('.main-header-bar-sticky-top').css('top', '0px');
        }
        mainNavbar.classList.remove('main-header-bar-sticky-top');
    }
}