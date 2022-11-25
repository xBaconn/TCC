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
                <li><a href="favoritos.php">Favoritos</a></li>
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

    <h1>HELPER</h1>

    <center>
        <div class="hider" id="d2">
            <div class="principal">
                <br>

                <h2>MINHAS LISTAS DE COMPROMISSOS</h2>

                <h5>Digite as tarefas do dia</h5>

                <input id="texto" placeholder="Ex: Academia as 15hrs" required>

                <button onclick="adicionar()">
                    ENVIAR
                </button>

                <button onclick="limpar()">
                    LIMPAR SELECIONADOS
                </button>
                <br>
                <br>
            </div>
            <br>
            <div id="tarefas">

            </div>
        </div>
    </center>

    <script>
        var divTarefas = document.createElement('pgfav');
        divTarefas.setAttribute("id", "pgfav");
        function adicionar() {
            var conteudo = document.getElementById('texto').value;
            if (conteudo != "") {

                var novoElemento = document.createTextNode(conteudo);
                var divNova = document.createElement('div');
                var botao = document.createElement('button');
                var box = document.createElement('input');

                divNova.className = "itens";

                box.setAttribute("type", "checkbox");

                botao.innerHTML = "Remover";

                botao.addEventListener("click",
                    function () {
                        divNova.remove();
                    })

                divNova.appendChild(box);

                box.addEventListener('change', function () {
                    if (this.checked) {
                        divNova.style.textDecoration = "line-through";
                        divNova.setAttribute("id", "espaco");
                        divNova.className = "marcados";
                    } else {
                        divNova.style.textDecoration = "none";
                    }
                })
                divNova.appendChild(novoElemento);
                divNova.appendChild(botao);
                divTarefas.appendChild(divNova);

                document.getElementById('pgfav').innerHTML =
                document.body.appendChild(divNova);

                document.getElementById('texto').value = "";


            }
        }

        function limpar() {
            for (var a = 0; a <= 10; a++)
                document.getElementsByClassName('marcados')[a].remove();
            a = 0;
        }
    </script>

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