<h1>Novo Usuário</h1>

<form action="?page=salvar" method="POST"> <!--post é usado para não exibir a senha-->
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>

    <div class="mb3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>