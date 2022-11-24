

<?php

$account = new Account();

if($account->isLogged()){
	echo ' | redirecionando em 3 segundos';
	header( "refresh:3;url=http://".$_SERVER['HTTP_HOST'] );

}

if(!empty($_POST['submit'])){

	$account->UserLogin($_POST['login'],$_POST['password']);
	echo ' | redirecionando em 3 segundos';
	header( "refresh:3;url=http://".$_SERVER['HTTP_HOST'] );

}

?>

<form role="form" method="post" style="width:50%;margin-left:10%; margin-top:10%;">
      
      <h1 class="h3 mb-3 font-weight-normal">Fazer login</h1>

	<label for="inputLogin" class="sr-only">Nome de usuário</label>
      <input type="text" id="inputLogin" class="form-control" name="login" placeholder="Seu nome" required="" autofocus="">

      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Senha" required="">
<br>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="login">Login</button>
    </form>
<br>