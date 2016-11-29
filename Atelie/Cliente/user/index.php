<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>SisPAP</title>
    <link href="sispap/css/estilo.css" rel="stylesheet" /> <!--ativa o css-->
    <link href="sispap/css/960_16_col.css" rel="stylesheet" /> <!-- site:960.gs-->
    <link rel="icon" href="sispap/images/maquina.png">
    </head>
<body>
	<div class="container_16" style="background:#adc0ef; "> <!--margem-->
    	<header class="grid_16 topo">
            <div class="grid_3 alpha logo" >  <!--suffix:pular-->
        	<img src="sispap/images/maquina.png"> 
            </div>
             <div class="grid_8 suffix_3" style="margin-top:150px; position:relative; left:80px">
          	<img src="sispap/images/logo.png">
          </div>
         </header>
         
         
         <div class="grid_16 conteudo">
          <div class="grid_12 suffix_4 prefix_4" style="margin-top:-110px; margin-left: -20px;">
        		<div class="grid_8 alpha">
                	<div class="grid_3" style="font-family:'Arial'; font-size: 20px; margin-left:40px;">
                    	<p>CPF</p> 
                    </div>
                    	<form action= "login.php" method="post" >
                    	<input class="grid_5 logincampo" id="cpf_user" type="cpf" name="cpf_user" required>
                                       
                    <div class="grid_3" style="font-family:'Arial'; font-size:20px; margin-left: 40px;">
                    	<p>Senha</p> 
                    </div>
                    <div class="grid_5">
                    	
                    	<input class="grid_5 logincampo2" id="password_user" type="password" name="password_user" required>
                         
                    </div>                  
           		</div>  
                <div class="grid_6 prefix_4">            	
                    <button class="grid_3 omega botao" type="submit" value="submit" style="color: black;">
                    LOGIN
                    </button>
                </div>
          </div>
          </div>
           <footer class="grid_16 rodape" style="padding-top:30px;">
        	<address> 
                <div class="grid_5 prefix_3 endereco" style="position:relative; top:27px;">
                    <p>SEPN, s/n - Asa Norte, DF, 70790-075 </p>
                    <p>Telefone:(61) (61) 3966-1200</p>
                    <p>E-mail: fale@uniceubdf.com.br</p>
                </div>
                <div class="grid_6 omega">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.673864176337!2d-47.89552988514525!3d-15.768382989067437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3a46ff7ee93f%3A0xaceeb379d23571b7!2sUniCEUB!5e0!3m2!1spt-BR!2sbr!4v1479585557877" width="310" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </address>
        </footer>       	
	</div>
         <!-- FIM DO CONTAINER --> 
</body>
</html>

