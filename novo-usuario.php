<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" class="form-control">
    </div>
    <div class="mb-3">
        <label>Estado</label>
            <select name="estado" class="form-control">
                <option value="MG" >MG</option>
                <option value="SP" >SP</option>
                <option value="RJ" >RJ</option>
                <option value="PR" >PR</option>
                <option value="GO" >GO</option>
            </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-dark">Enviar</button>
    </div>
    


</form>