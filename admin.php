
<?php
/*
include_once('ad.php'); //Linka a pagina de configuração

$username = $_POST['username'];
$password = $_POST['password'];

$ldapSearch = ldap_search($ldapConn, 'ou=usuarios,dc=exemplo,dc=com', "samaccountname=$username");

if ($ldapSearch) {
    $ldapEntries = ldap_get_entries($ldapConn, $ldapSearch);

    if ($ldapEntries['count'] == 1) {
        $userDn = $ldapEntries[0]['dn'];
        $ldapBindUser = ldap_bind($ldapConn, $userDn, $password);

        if ($ldapBindUser) {
            // Usuário autenticado com sucesso
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;
            header('Location: admin-dashboard.php'); // Redireciona para a página de dashboard ou outra página segura
            exit;
        }
    }
}


// Caso a autenticação falhe, exiba uma mensagem de erro
echo 'Usuário ou senha inválidos.';
*/

?>


<!DOCTYPE html>
<html lang="pt-PT">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login ADMIN</title>
    
   <!-- CSS Bootstrap -->
   <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    
    <!-- Icones Bootstrap  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <!-- CSS do projeto -->
    <link rel="stylesheet" href="css/loginforms.css">
    <!-- JavaScript Bootstrap -->
    <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </script>


  
  </head>
  <body>
    
 
  

 
    <div class="text-center mt-5">
    <form action="admin-dashboard.php" method="POST" style="max-width:480px;margin:auto;">
        <!--Top Login-->
        <img  class="mt-4 mb-4"height="65px" src="img/logo1.png" alt="Logo Anteros">
        <h1 class="h3 mb-3 font-weight-normal">Login ADMIN</h1><br>
    <!--Middle Login-->
  
    <input type="text" id="user" name="user" class="form-control" placeholder="Utilizador" required autofocus><br><br>
   
    <input type="password" id="password" name="password" class="form-control"  placeholder="Password" required autofocus>
    <!--Bottom Login-->
    <br>
    <!--AD checkbox-->
    <input type="checkbox" name="use_ad_credentials" id="use_ad_credentials">
        <label for="use_ad_credentials">Autenticação Usuario</label><br>
    <!--AD checkbox-->
    <div class="mt-3">
    <button type="submit" name="submit" id="submit" class="btn btn-lg btn-primary btn-block">Login</button>


    </div>
    </form>

    <script>
        function useADCredentials() {
            // Executa alguma ação antes de enviar o formulário com as credenciais do AD
            // Por exemplo, preenche automaticamente os campos de usuário e senha
            document.getElementById('username').value = 'seu_usuario_ad';
            document.getElementById('password').value = 'sua_senha_ad';

            // Submete o formulário
            document.getElementsByTagName('form')[0].submit();
        }
    </script>
 
    </form>  
    </div>
  </body>
</html>
