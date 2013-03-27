<!DOCTYPE html>
<html lang="ru">
<head>
<title>�������� ���������, ������� �����, ��. 2105</title>
<link rel="stylesheet" href="form.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<div class="header">
		<p>Чистяков Владислав, Зайцева Лидия, группа 2105, Вариант 1100</p>
	</div>
	<form method="get" action="index.php">
		<div class="left_col">
			<p>R</p>
		</div>

		<div class="right_col">
			<?php 
			for ($i = 1; $i <= 3; $i += 0.5 )
			{
				echo "<button name='rb'  value='$i'>$i</button>";
			}
			?>
		</div>
		
		<div class="right_col">
		<?php 
		if ($_GET[rb] != ""){
			$rb = $_GET[rb];
		}
		else {
			$rb = $_GET[r];
		}
		echo "<input name='r' readonly='readonly' value='$rb'>"
		?>
		</div>

		<div class="left_col">
			<p>X</p>
		</div>

		<div class="right_col">
			<?php 
			for ($i = -3; $i <= 5; ++$i)
			{
				echo "<button name='xb' value='$i'>$i</button>";
			}
			?>
		</div>

		<div class="right_col">
			<?php 
			if ($_GET[xb] != ""){
				$xb = $_GET[xb];
			}
			else {
				$xb = $_GET[x];
			}
			echo "<input type='text' readonly='readonly' name='x' value='$xb'>"
			?>
		</div>

		<div class="left_col">Y</div>
		
		<div class="right_col">
			<input type="number" step="0.01" min="-5" max="5" name="y">
		</div>
		
		<div>
			<?php
			$starttime = microtime(true);
			if (( $_GET['x'] != "") && ( $_GET['y'] != "") && ($_GET['r'] != "")){
				$X = (int) $_GET['x'];
				$Y = (int) $_GET['y'];
				$R = (int) $_GET['r'];
				if ((( $X <= 0) && ( $X >  -$R) && (  $Y >= 0 ) && ( $Y <=  $R)) ||
				(( $X >= 0) && ( $Y >= 0 ) && ( 2 * ($X + $Y) <=  $R )) ||
				(( $X >= 0) && ( $Y <= 0) && (  $X *  $X +  $Y *  $Y <=  $R *  $R ))){
					$INTARGET = "да";
				}
				else {
							$INTARGET = "нет";
						}
						printf("
					<TABLE BORDER>
					<TR>
					<TD>X</TD> <TD>Y</TD> <TD>R</TD> <TD>Попадание</TD>
					</TR>
					<TR>
					<TD>%s</TD> <TD>%s</TD> <TD>%s</TD> <TD> %s </TD>
					</TR>
					</TABLE>
					", $X, $Y, $R, $INTARGET);
						printf("<p>Время выполнения скрипта = %f c</p>", microtime(true) - $starttime);
						printf("<p>%s</p>", date("G:i:s, M, Y"));
			}
			?>
		</div>
		
		<div class="right_col">
			<button>OK</button>
		</div>
	</form>
</body>
</html>
