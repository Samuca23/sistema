<?php



$iItensPorPagina = 3;
try {
    if (isset($id)) {
        $stmt = $conn->prepare('SELECT * FROM estados WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    } else {
        $stmt = $conn->prepare('SELECT * FROM estados LIMIT ' . $iItensPorPagina . '');
    }

    $stmt->execute();

    $result = $stmt->fetchAll();
// $iPaginaAtual = intval($_GET['pagina']);

// $iNumItem = ceil(count($result)/$iItensPorPagina);
// $iInicioDados = ($iItensPorPagina * $iPaginaAtual);

// if (isset($_GET['id']))
// $id = $_GET['id'];

?>

<table border="1" class="table table-striped">
        <tr>
            <td>Id</td>
            <td>Sigla</td>
            <td>Nome</td>
            <td>Ação</td>
        </tr>
        <?php
        // for($i = 1; $i <= $iNumItem; $i++) {
        //     echo '<a href="?pagina=' . $i . '">' . $i . '</a>';
        // }
        if (count($result)) {
            foreach ($result as $row) {
        ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['sigla'] ?></td>
                    <td><?= $row['nome'] ?></td>
                    <td>
                        <a href="?modulo=estados&pagina=alterar&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="?modulo=estados&pagina=deletar&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Excluír</a>
                    </td>
                </tr>
        <?php
            }
        } else {
            echo "Nenhum resultado retornado.";
        }
        ?>
    </table>
<?php
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}