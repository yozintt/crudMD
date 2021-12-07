<?php

$resultados = "";
foreach($pessoas as $pessoa){
    $resultados .= '<tr>
                      <td>'.$pessoa->id.'</td>
                      <td>'.$pessoa->nome.'</td>
                      <td>'.$pessoa->cpf.'</td>
                      <td>'.$pessoa->email.'</td>
                      <td>'.$pessoa->descricao.'</td>
                      <td>'.date('d/m/Y à\s H:i:s',strtotime($pessoa->data)).'</td>
                      <td>
                        <a href="editar.php?id='.$pessoa->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$pessoa->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma pessoa encontrada
                                                       </td>
                                                    </tr>';

}
?>

<main>

    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Nova Pessoa</button>
        </a>
    </section>
    <section>

        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Descrição</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>

</main>