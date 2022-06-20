       var menuList = document.getElementById("menuList");
        menuList.style.maxHeight = "0px";

        function togglemenu() {
            if(menuList.style.maxHeight == "0px"){
                menuList.style.maxHeight = "350px";
                sidebar.style.height = "350px";
            }else{
                menuList.style.maxHeight = "0px";
                sidebar.style.height = "40px";
            }
        }

    