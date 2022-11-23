<?php

include 'db/conexao.php';

           
                $email= $_POST['email'];
                $senha= $_POST['senha'];
               
                $sql= "select * from cliente where email='$email' and senha='$senha' ";
                $query=$con->query($sql);
                $row=$query->num_rows;
               
                if ($row==1){
                    //
                $_SESSION['email'] = $email;
                header("Location: pagina01.php");
                }else{
                    header("Location: dados-invalidos.php");
                    
                   
                }
           
                  
      ?>          