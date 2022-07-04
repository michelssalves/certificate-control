<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
 
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="#home" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" >Novo</a>
  <a href="#news">Exportar</a>
  <a href="#contact">Sair</a>
</div>
<div class="main">
<div style="overflow-x:auto;">
  <table>
  <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr >
                <th>Matricula</th>
                <th>Nome</th>
                <th>CID</th>
                <th>Data Incio</th>
                <th>Data Termino</th>
                <th>Data Entrega</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $matricula=1000;
            $nome='Michel Silas Scabia Alves';
            $CID = 569878;
            $datainicio = '29/04/2022';
            $datatermino = '01/05/2022';
            $datalancamento = '01/05/2022';
            /*
            require_once 'config.php';
            $sql = $pdo->prepare("SELECT * FROM refeicao AS r
            JOIN sos as s
            ON r.numeroRd = s.numeroRd");
            $sql->execute();
            $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
            */
            ?>
            <?php /*foreach ($lista as $row) : */?>

                <tr>
                    <td><a href="javascript:abreJanela(<?= $row['id_registro']?>)"><?php echo $matricula?></td>
                    <td><?php echo $nome?></td>
                    <td><?php echo $CID?></td>
                    <td><?php echo $datainicio?></td>
                    <td><?php echo $datatermino?></td>
                    <td><?php echo $datalancamento?></td>
                    <td img="img/lapis.jpg"><?php echo $datalancamento?></td>
                    <td img="img/lixeira.jpg"><?php echo $datalancamento?></td>
                </tr>
          
        </tbody>
    </table>
  </table>
</div>
</div>
<div class="w3-container">
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Modal Header</h2>
      </header>
      <div class="w3-container">
        <p>Some text..</p>
        <p>Some text..</p>
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>
</div>
</body>
</html>
<script src="js/abreJanela.js"></script>
