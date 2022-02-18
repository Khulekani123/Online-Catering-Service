<!DOCTYPE html>
<html>
    <head>
    <meta name = "viewport" content = "with=device-width, initial-scale=1.0">
        <title> Online Catering Service </title>
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        <div class = "container">
            <div class = "navigation">
                <ul>
                    <li>
                        <a href = "#">
                            <span class = "icon"><ion-icon name="restaurant-outline"></ion-icon></span>
                            <span class = "tittle"> PUNDRULU CATERING </span>
                        </a>
                    </li>
                    <li>
                        <a href = "#">
                            <span class = "icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class = "tittle"> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href = "#">
                            <span class = "icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                            <span class = "tittle"> Customers </span>
                        </a>
                    </li>
                    <li>
                        <a href = "#">
                            <span class = "icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
                            <span class = "tittle"> Message </span>
                        </a>
                    </li>
                    <li>
                        <a href = "#">
                            <span class = "icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                            <span class = "tittle"> Help </span>
                        </a>
                    </li>
                    <li>
                        <a href = "#">
                            <span class = "icon"><ion-icon name="settings-outline"></ion-icon></span>
                            <span class = "tittle"> Settings </span>
                        </a>
                    </li>
                    <li>
                        <a href = "#">
                            <span class = "icon"><ion-icon name="key-outline"></ion-icon></span>
                            <span class = "tittle"> Password </span>
                        </a>
                    </li>
                    <li>
                        <a href = "#">
                            <span class = "icon"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class = "tittle"> Sign Out </span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--- main --->
            <div class = "main">
                <div class = "topbar">
                    <div class = "toggle">
                    <ion-icon name = "menu-outline"></ion-icon>
                    </div>
                    <!-- search -->
                    <div class = "search">
                        <label>
                            <input type = "text" placeholder = "Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
                    <!-- Admin Image -->
                    <div class = "adminImg">
                        <img src = "admin.jpeg">
                    </div>
                </div>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <script>
            //toggle the menu
            Let toggle = document.querySelectorAll('.toggle');
            Let navigation = document.querySelectorAll('.navigation');
            Let main = document.querySelectorAll('.main');

            toggle.onclick = function()
            {
             
            }

            //add a hovering class in selected list item
            Let list = document.querySelectorAll('.navigation li');
            function activeLink(){
                list.forEach((item) =>
                item.classList.remove('hovered'));
                this.classList.add('hovered'); 
            }
            list.forEach((item) =>
            item.addEventListener('mouseover',activeLink));
        </script>
    </body>
</html>