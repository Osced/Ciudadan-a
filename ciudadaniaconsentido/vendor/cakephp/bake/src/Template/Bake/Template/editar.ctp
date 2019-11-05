

<?php
  echo $this->element('forms/form_Colectivo',[	"colectivo"=>$colectivo,
  											"usuario"=>$usuario,
												"tiposcolectivo"=>$tiposcolectivo,
												"caracteres"=>$caracteres,
                        'accion' => 'editar',
												'css_dots'=>'..',
												'btn_close'=>true
												]);

?>
