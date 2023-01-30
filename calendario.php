<?php echo "Título dentro do H1" ?>
<table border="1">
  <tr>
    <th>Dom</th>
    <th>Seg</th>
    <th>Ter</th>
    <th>Qua</th>
    <th>Qui</th>
    <th>Sex</th>
    <th>Sáb</th>
  </tr>
</table>

<html>
  <head>
    <title>Dia <?php echo date('d');?></title>
  </head>

  <body>
    <h1>Estamos em <?php echo date('Y');?></h1>
    <p>
      Agora são <?php echo date('H');?> horas e <?php echo date('i'); ?> minutos.
    </p>
  </body>
</html>

<?php
  function linha($semana) {
/*    echo "
      <tr>
        <td>{$semana[0]}</td>
        <td>{$semana[1]}</td>
        <td>{$semana[2]}</td>
        <td>{$semana[3]}</td>
        <td>{$semana[4]}</td>
        <td>{$semana[5]}</td>
        <td>{$semana[6]}</td>
      </tr>
    ";*/
    echo "<tr>";
    for ($i = 0; $i <= 6; $i++) {
      if (isset($semana[$i])) {
        echo "<td>{$semana[$i]}</td>";
      } else {
        echo "<td></td>";
      }
    }
    echo "</tr>";

  }

  function calendario() {
    $dia = 1;
    $semana = array();
    while ($dia <= 31) {
      array_push($semana, $dia);

      if (count($semana) == 7) {
        linha($semana);
        $semana = array();
      }
      $dia++;
    }
    linha($semana);
  }
?>

<table border="1">
  <tr>
    <th>Dom</th>
    <th>Seg</th>
    <th>Ter</th>
    <th>Qua</th>
    <th>Qui</th>
    <th>Sex</th>
    <th>Sáb</th>
  </tr>
  <?php calendario(); ?>
</table>

<html>

  <body>
    <h1>Saudações <?php echo date('Y');?></h1>
    <p>
    <?php
      function saudacao() {
        $hora = date('H');
        $minutos = date('i');
          if ($hora < 12) {
          echo "Agora são ", $hora, " horas e ", $minutos, " minutos, Bom dia!";
        } else if ($hora >= 12 ) {
          echo "Agora são ", $hora, " horas e ", $minutos,  " minutos, Boa tarde!";
        } else {
          echo "Agora são ", $hora, " horas e ", $minutos, " minutos, Boa noite";
        }
      }
    ?>
    </p>

    <?php echo saudacao();?>
      <br>
    <?php echo date('i/m/Y');?>

  </body>
</html>