<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
  </head>
  <body>
    <main class="container">
        <h1>Professores</h1>
        <a href="/professor/inserir" class="btn btn-primary">Novo Professor</a>
        <p><?= $mensagem ?></p>
        <table class="table table-stripped table-hover" id="tabela">
            <thead>
                <tr>
                    <th> Nome </th>
                    <th> Telefone </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($p = $resultado->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <tr>
                            <td><?= $p['nome'] ?></td>
                            <td><?= $p['telefone'] ?></td>
                            <td>
                                <a href="/professor/alterar/id/<?= $p["id"]?>" class="btn btn-warning">
                                    Alterar
                                </a>
                                <a href="/professor/excluir/id/<?= $p["id"]?>" class="btn btn-danger">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        var table = new DataTable('#tabela', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.0.6/i18n/pt-BR.json',
            },
        });
    </script>
  </body>
</html>
