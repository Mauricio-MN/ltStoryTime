<div class="container-fluid">

<form role="form" method="post" style="width:40%;margin-left5%; margin-top:2%; float:left;">

	<label for="search">Procurar: </label>
      <input type="text" id="search" class="form-control" name="search" placeholder="Título" required="" autofocus="">

      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="search">Ir</button>
    </form>
</div>

<div class="container">

<?php

$storys = new Story();

$storyLastList;

if(!empty($_POST['submit'])){
	$storyLastList = $storys->search($_POST['search']);
} else {
	$storyLastList = $storys->List();
}

if(is_array($storyLastList)){

	foreach ($storyLastList as &$stry) {

		$account = new Account();
		
		$autor = $account->GetUserByID($stry["autor"]);

		echo '<div class="default-border container-fluid" style="float:left;">';
		
		echo '<p class="font-weight-bold title">'.$stry["title"].'</p>';
            echo '<div>';
		echo base64_decode($stry["bbcodetext"]);
            echo '</div>';

		$date = strtotime($stry["postdate"]);
		$realdate = date( 'd-m-Y', $date );

		echo '<div style="float:left;">';
		echo $realdate;
		echo '</div>';
		

		echo '</div>';
	}

}

?>

</div>