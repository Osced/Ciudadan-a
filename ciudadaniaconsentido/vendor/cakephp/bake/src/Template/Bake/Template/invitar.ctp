
<?php
  $response_msg =  $this->element('forms/form_eliminarMiembro',['usuario'=>$usuario,'colectivo'=>$colectivo,'ajax'=>true]);
  echo   $response_msg
?>
