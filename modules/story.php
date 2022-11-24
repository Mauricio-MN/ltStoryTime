<div class="container">

<?php

$storys = new Story();

$storyLastList = $storys->GetById($_GET['story']);

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