w<div class="container">

<?php
$account = new Account();

if($account->isLogged()){

$story = new Story();

if(!empty($_POST['submit'])){
	
	if($_POST['submit'] == "go"){
		$title = $_POST['title'];
		$bbcodetext = base64_encode($_POST['bbcodetext']);
		$storyid = $story->add($title, $bbcodetext);
		echo 'postado com sucesso, Link: http://'.$_SERVER['HTTP_HOST'].'/?page=story&story='.$storyid;
	}
	
}

?>

<form role="form" method="post">

	<div class="form-group">
		<label for="title">Titulo:</label>
		<input type="text" class="form-control" id="title" name="title" />
	</div>

	<div class="form-group">
		<textarea name="bbcodetext" id="bbcodetext"></textarea>
	</div>

	<button type="submit" class="btn btn-large" name="submit" value="go">Publicar</button>
</form>

</div>

<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
	<script type="text/javascript">//<![CDATA[
		CKEDITOR.replace('bbcodetext', {
			language: 'pt',
			uiColor: '#f1f1f1'
		});
	//]]></script>

<?php 

} else {
	echo 'Faça login para ter acesso';
}


 ?>