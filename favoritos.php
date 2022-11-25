<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Document</title>
    <link href="css/index.css" rel="stylesheet">
     <!-- Linck para os icons do footer-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <header>
        <center>
            <img src="img/logoo.png" >
        </center>
        
        <div class="group">
            <ul class="navegation">
                <li><a href="index.php">Início</a></li>
                <li><a href="instrumentos.php">Instrumentos</a></li>
                <li><a href="acessorios.php">Acessórios</a></li>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <div class="search">
                <span class="icon">
                    <ion-icon name="search-outline" class="searchBtn"></ion-icon>
                  
                    <ion-icon name="close-outline" class="closeBtn"></ion-icon>
                </span>
            </div>
            <ion-icon name="menu-outline" class="menuToggle"></ion-icon> 
        </div>
        <div class="searchBox">
            <input type="text" placeholder="O que está procurando?">
        </div>
    </header>

    <h1>SEUS ITENS FAVORITADOS</h1>

    <div id="pgfav">
         
    </div>
    <footer>
        <div class="footer-content">
            <h3> Helper</h3>
            <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>

            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-instagran"></i></a></li>



            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 Helper<br><br>
             designed by <span>J.Lucas Rodrigues, Gabriel Barreto, Thalyta Cerqueira, Eike Alexandre, J.Pedro Nogueira</span> 
            </p>

        </div> 
       </footer>
    <script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" > </script> 
    <script  nomodule  src = "https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js" > </script>

    <script>
     let searchBtn = document.querySelector(".searchBtn");
     let closeBtn = document.querySelector(".closeBtn");
     let searchBox = document.querySelector(".searchBox");
     let navegation = document.querySelector(".navegation");
     let menuToggle = document.querySelector(".menuToggle");
     let header = document.querySelector("header");


     searchBtn.onclick = function(){
        searchBox.classList.add('active');
        closeBtn.classList.add('active');
        searchBtn.classList.add('active');
        menuToggle.classList.add('hide');
        header.classList.remove('open');

     } 

     closeBtn.onclick = function(){
        searchBox.classList.remove('active');
        closeBtn.classList.remove('active');
        searchBtn.classList.remove('active');
        menuToggle.classList.remove('hide');

     } 

     menuToggle.onclick = function(){
        header.classList.toggle('open');
        searchBox.classList.remove('active');
        closeBox.classList.remove('active');
        searchBtn.classList.remove('active');
     }
    </script>


</body>
</html>