<?php
$results = new api_functions;
$results = $results->api_request('exibir');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body class="bg-light">
    
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Usuários</h1>
                    <a href="adicionar" class="btn btn-primary">Adicionar usuário</a>
                </div>
                <table class="table table-bordered border-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($results['data'] as $user) {
                            echo '<tr>';
                            echo '<td>' . $user['id'] . '</td>';
                            echo '<td>' . $user['nome'] . '</td>';
                            echo '<td>' . $user['email'] . '</td>';
                            echo '<td>';
                            echo '<a href="editar?id=' . $user['id'] . '" class="btn btn-sm btn-outline-primary me-2">Editar</a>';
                            echo '<a href="deletar?id=' . $user['id'] . '" class="btn btn-sm btn-outline-danger">Deletar</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
