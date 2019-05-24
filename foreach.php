
<form class="" smethod="GET">
  <input type="text" name="Nome">
  <input type="date" name="Data nascimento">
  <input type="text" name="Nome 2">
  <input type="date" name="Data nascimento 2">
  <input type="submit" value="Enviar">
</form>

<?php

    foreach ($_GET as $key => $value) {
      echo " o nome do campo é " .$key;  //pega o nome da TAG name
      echo " o valor do campo é " .$value; //pega o valor de cada campo

      echo "<hr>";
    }
 ?>
