<script>
	var iframe = document.getElementById('ad1');
	iframe.style.overflow= "hidden"
</script>
<?php

	class synAd{
		function bitVisitorAd(){
			echo "<br />";
			echo "<iframe frameBorder='0.5' id='ad1'  src='ad/bitvisitor_ad.html' width='420' height='120'>";
			echo "Unable to view these ads";
			echo "</iframe>";
			echo "<br />";
		}
		function ZeroWebHostAd(){
			echo "<br />";
			echo "<iframe frameBorder='0.5' id='ad1' src='ad/000webhost_ad.html' width='400' height='100'>";
			echo "Unable to view these ads";
			echo "</iframe>";
			echo "<br />";
		}
	}

?>