<h1>Listar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios";
    $res = $conn->query($sql); //conecta ao BD
    $qtd = $res->num_rows; //num de linhas de resultado

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Data Nascimento</th>";
            print "</tr>";
        while($row = $res->fetch_object()){ //enquanto encontra resultados, retorna aqui e os insere
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>