<div id="footer">
	<a href="http://apycom.com/"></a>
	<?php 	
		include("JSCounter/compteur.php");
		print "+ Currently ".$compt_c." visitor".$plur_v." online<br />
		+ ".number_format($compteur,0,',',' ')." visits since its creation.<br />";
	?>
	Cyril Francesconi
</div>