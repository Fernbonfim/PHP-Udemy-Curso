<?php

function foo()
{
  $numargs = func_get_args();

return($numargs);
};

var_dump (foo("Bom dia", "todos"));

 ?>
