<?php
$stmt = $conn->prepare('SELECT * FROM estados');
$stmt->execute();
$result = $stmt->fetchAll();

if (isset($_POST['gravar'])) {
    try {
        $stmt = $conn->prepare(
            'INSERT INTO cidades (codigo, nome, estado) values (:codigo, :nome, :estado)'
        );
        //$stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute(array('codigo' => $_POST['codigo'], 'nome' => $_POST['nome'], 'estado' => $_POST['estado']));
        //$stmt->execute();
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}
?>

<form method="post">
    <div class="form-group">
        <label for="nome">Código</label>
        <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Código">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="estado">Estado</label>
        <select class="form-control" name="estado" id="estado">
            <option value="">** Selecione **</option>
            <?php
                foreach ($result as $l) {
                    ?>
                        <option selected value="<?=$l['id']?>"><?=$l['sigla']?> - <?=$l['nome']?></option>
                    <?php
                }
            ?>
        </select>
    </div>
    <input type="submit" name="gravar" value="Gravar">
</form>