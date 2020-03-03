<!DOCTYPE html>
<html>
	<head>
		<title>Odd & Even number highlighter</title>
		<style>
			.heading{
				position: absolute;
				top: 6%;
				left: 34%;
			}

			.button{
				position: absolute;
				top: 18%;
				left: 49%;
			}
		</style>
	<body>
		<h1 class="heading">Odd & Even number highlighter</h1>
		<form method="get">
			<input type="submit" name="click" class="button" value="Click"><br><br>
		</form>
		<?php
			if(isset($_GET['click'])){
				$a=array(array(2,1,4,3,6,5),array(7,8,9,10,11,12),array(14,13,1,16,17,18),array(20,19,22,21,24,23),array(25,26,27,28,29,30),array(32,31,34,33,36,35));
				echo "<table border='1' cellpadding='12%' style='position: absolute; top: 35%; right: 39%;'>
						<tr>";
				for($i=0;$i<6;$i++){
					for($j=0;$j<6;$j++){
						if($a[$i][$j]%2==0)
							echo "<td bgcolor='green'>".$a[$i][$j]."</td>";
						else
							echo "<td bgcolor='red'>".$a[$i][$j]."</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
	</body>
</html>