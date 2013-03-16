<!DOCTYPE html>
<html lang="ru">
<head>
<title>Чистяков Владислав, Зайцева Лидия, гр 2105</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<div>
		<p>Чистяков Владислав, Зайцева Лидия, группа 2105, Вариант 1100</p>
	</div>
	<form method="get" action="index.php">
		<div>
			R = <input type="number" step="0.01" min="0" name="R">
		</div>
		<div>
			X = <input type="number" step="0.01" name="X">
		</div>
		<div>
			Y = <input type="number" step="0.01" name="Y">
		</div>
		<div>
			<?php
			$starttime = microtime(true);
			if (( $_GET['X'] != '') && ( $_GET['Y'] != '')){
				$X = (int) $_GET['X'];
				$Y = (int) $_GET['Y'];
				$R = (int) $_GET['R'];
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
		<button>OK</button>
	</form>
</body>
</html>
