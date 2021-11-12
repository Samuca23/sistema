<?php
if (isset($_POST['gravar'])) {
    try {
        $stmt = $conn->prepare(
            'INSERT INTO produtos (codigo, nome, valor) values (:codigo, :nome, :valor)'
        );
        //$stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute(array('codigo' => $_POST['codigo'], 'nome' => $_POST['nome'], 'valor' => $_POST['valor']));
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
        <label for="nome">Valor</label>
        <input type="number" class="form-control" name="valor" id="valor" placeholder="Valor">
    </div>
    <input type="submit" name="gravar" value="Gravar">
</form>