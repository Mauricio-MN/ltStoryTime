

<?php

$account = new Account();

if($account->isLogged()){
	echo ' | redirecionando em 3 segundos';
	header( "refresh:3;url=http://".$_SERVER['HTTP_HOST'] );

}

if(!empty($_POST['submit'])){

	$account->register($_POST['login'], $_POST['password'], $_POST['passwordv'], $_POST['email']);	

}

?>

<form role="form" method="post" style="width:50%;margin-left:10%; margin-top:10%;">
      
      <h1 class="h3 mb-3 font-weight-normal">Fazer Cadastro</h1>

	<label for="inputLogin" class="sr-only">Nome de usuário</label>
      <input type="text" id="inputLogin" class="form-control" name="login" placeholder="Seu nome" required="" autofocus="">

      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Seu email" required="" autofocus="">

      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control"  name="password" placeholder="Senha" required="">

	<label for="inputPasswordV" class="sr-only">Confirme a senha</label>
	<input type="password" id="inputPasswordV" class="form-control" name="passwordv" placeholder="Repita a senha" required="">
<br>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="cadastro">Prosseguir</button>
    </form>