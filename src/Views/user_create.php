<h2>Criar Usuário</h2>

<form action="/user_store" method="post" class="form">
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Nome">
    </div>

    <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" class="form-control" name="email" placeholder="E-mail">
    </div>

    <div class="form-group">
        <label for="">Senha</label>
        <input type="text" class="form-control" name="password" placeholder="Senha">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>