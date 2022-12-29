<?php
$resultados = "";

foreach($objUsuarios as $user){
  $resultados .= '<tr>
  <td>'.$user->user_id.'</td>
  <td>'.$user->username.'</td>
  <td>'.$user->name.'</td>
  <td>'.$user->email.'</td>
  <td>
  a href="editar.php?id='.$user->user_id.'">
  <button type="button" class="btn btn-primary">Editar</button>
  </a>
  <a href="excluir.php?id='.$user->user_id.'">
  <button type="button" class="btn btn-danger">Excluir</button>
  </a>
  </td>
  </tr>';
  }
?>
<main>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Novo Usuario</button>
        </a>
    </section>
    <section>
        <table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Usuario</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody class="tbody-light">
    <?=$resultados?>
      </tbody>
</table>
    </section>
</main>
