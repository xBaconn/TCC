<!DOCTYPE html>
<html lang="pt-br">
    <head>
         <link href="css/login.css" rel="stylesheet">
         <!-- Linck para os icons do footer-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>Tela de Cadastro</title>
    </head>
    <body>
        <header>      
            <img src="img/logoo.png" >
     
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

    
    <center>
        <form  action="" method="post">
            <h2>Cadastrar</h2>

            <div class="input-group">
                <img class="input-icon" src="img/card.png">
                <input type="text" placeholder="Nome Completo" name="nome" required>
            </div>

            <div class="input-group">
                <img class="input-icon" src="img/user.png">
                <input type="email" placeholder="Seu melhor email" name="email" required>
            </div>

            <div class="input-group">
                <img class="input-icon" src="img/lock.png">
                <input type="password" placeholder="Senha mínimo 6 Dígitos" name="senha" required>
            </div>


            <div class="input-group">
                <input type="checkbox" id="termos" name="termos" value="ok" required>
                <label for="termos">Ao se cadastrar você concorda com a nossa <a class="link" href="politica_priv.php" target="_blank">Política de Privacidade e os Termos de uso</a></label>
            </div>  



            <button class="btn-blue" type="submit"> <a input type="submit" value="Cadastrar" name="enviar" >Cadastrar</a></button>

            <a href="login.html">Já tenho uma conta</a>
            
            <?php
            if ((isset($_POST['nome'])) && (isset($_POST['email']))) {
                require("db/conexao.php");
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];


                $sql2 = "select * from cliente where email='$email' ";
                $query = $con->query($sql2);
                $row = $query->num_rows;

                if ($row == 0) {

                    if ($nome == "" || $nome == null) {
                        echo("1");
                    }
                    // Perform query
                    if ($result = mysqli_query($con, "INSERT INTO cliente(nome, email, senha) VALUES('$nome','$email','$senha')")) {
                        echo "<div style=color:white> --------------Cadastrado com sucesso!---------------- </div>";
                        //header("refresh:1;url=login.php" );
                        header("Location: index.php");
                        // Free result set
                    }
                } else {

                    echo "'<br>'<div style=color:white; align='center'> --------------------Já cadastrado--------------------- </div><br>";
                }
            }
            ?>
        </form>
    </center>

    <footer>
        <div class="footer-content">
            <h3> Helper</h3>
            <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>

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