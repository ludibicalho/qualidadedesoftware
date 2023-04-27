<h1>Editar Usuário</h1>
<?php
$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" value="<?php print $row->endereco; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone" value="<?php print $row->telefone; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" value="<?php print $row->cidade; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Estado</label>
            <select name="estado" value="<?php print $row->estado; ?>" class="form-control">
                <option value="MG" <?php if ($row->estado == "MG")  echo "selected";?>>MG</option>
                <option value="SP" <?php if ($row->estado == "SP")  echo "selected";?>>SP</option>
                <option value="RJ" <?php if ($row->estado == "RJ")  echo "selected";?>>RJ</option>
                <option value="ES" <?php if ($row->estado == "ES")  echo "selected";?>>ES</option>
                <option value="GO" <?php if ($row->estado == "GO")  echo "selected";?>>GO</option>
            </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-dark">Enviar</button>
    </div>
    


</form>