<div id="footer">
	<a href="http://apycom.com/"></a>
	<?php 	
		include("JSCounter/compteur.php");
		print "+ Actuellement ".$compt_c." visiteur".$plur_v.".<br />
		+ ".number_format($compteur,0,',',' ')." visites depuis la création.<br />";
	?>
	Cyril Francesconi<a href="a_index.php">_</a>
</div>