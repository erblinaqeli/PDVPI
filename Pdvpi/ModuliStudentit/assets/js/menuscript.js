var menuList = document.getElementById("menuList");
menuList.style.maxHeight = "0px";

function togglemenu() {
    if(menuList.style.maxHeight == "0px"){
        menuList.style.maxHeight = "400px";
        sidebar.style.height = "400px";
    }else{
        menuList.style.maxHeight = "0px";
        sidebar.style.height = "40px";
    }
}

