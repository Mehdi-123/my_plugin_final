let effyispayWindow;

function open_onboarding_page() {
    width = 500;
    height = 700;
    if (window.innerWidth) {
        var left = (window.innerWidth - width) / 2;
        var top = (window.innerHeight - height) / 2;
    } else {
        var left = (document.body.clientWidth - width) / 2;
        var top = (document.body.clientHeight - height) / 2;
    }
    document.getElementsByClassName("blockdiv")[0].style.display = "block"; 
    effyispayWindow = window.open('http://localhost/wordpress/wp-content/plugins/my_plugin/plugin-settings.php', 'onboarding-popup', 'menubar=no, scrollbars=no, top=' + top + ', left=' + left + ', width=' + width + ', height=' + height + '');
}

function close_onboarding_page() {
    effyispayWindow.close();
    document.getElementsByClassName("blockdiv")[0].style.display = "none";
}

