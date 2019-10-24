<?php
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) { echo 'Uzivatel prihlasen';}
else {echo 'Uzivatel NEprihlasen';};
?>

