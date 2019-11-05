 <?php
  foreach ($cursos as $curso):
    ?>
    <div class="resumen_formate">
      <div class="foto"><?php //echo $this->Html->image('cuadro_' . $iniciativas[0]['Tema']['valor'] . '.jpg');      ?></div>
      <div class="datos"><strong>NOMBRE:</strong> <?php echo $curso['nombre']; ?><br />
        <strong>DESCRIPCIÓN:</strong> <?php echo $curso['descripcion']; ?><br />
        <!-- <strong>TEMÁTICA:</strong><br /> -->
        <strong>CREADO POR:</strong>
      
        <br />
      </div>
      <div class="clear"></div>
      <div class="ver_curso"><button id="abrir_cuestionario">Abrir</button></div>
    </div>
    <?php
  endforeach;
  ?>