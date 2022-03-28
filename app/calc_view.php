<?php
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">Next secure page</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Log out</a>
</div>

<div style="width:90%; margin: 2em auto;">

	<legend>Kalkulator</legend>
	<form action="<?php print(_APP_ROOT);?>/app/calc.php" method ="post">
					<fieldset>
					<label for="x">Wartość pożyczki</label>
					<input id="x" type="text" placeholder="Wysokość pożyczki" name="x" value="<?php out($form['x']); ?>">
					<label for="y">Ilość rat</label>
					<input id="y" type="text" placeholder="Ilość rat" name="y" value="<?php out($form['y']); ?>">
					<label for="z">Oprocentowanie</label>
					<input id="z" type="text" placeholder="Oprocentowanie" name="z" value="<?php out($form['z']); ?>">
					</fieldset>
						<button type="submit">Oblicz</button>
				</form>

								

				<?php
				if (isset($messages)) {
					if (count ( $messages ) > 0) {
					echo '<h4>Wystąpiły błędy: </h4>';
					echo '<ol class="err">';
					foreach ( $messages as $key => $msgs ) {
						echo '<li>'.$msgs.'</li>';
					}
					echo '</ol>';
				}
			}
			?>

			<?php
			if (isset($infos)) {
				if (count ( $infos ) > 0) {
				echo '<h4>Informacje: </h4>';
				echo '<ol class="inf">';
					foreach ( $infos as $key => $msg ) {
						echo '<li>'.$msg.'</li>';
					}
					echo '</ol>';
				}
			}
			?>

			<?php if (isset($result)){ ?>
			<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
			<?php echo 'Wynik: '.$result; ?>
			</div>
			<?php } ?>

</div>

</body>
</html>