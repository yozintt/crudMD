<main>

    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Cadastro de Pessoa</h2>

    <form method="post">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>

        <div class="form-group">
            <label>CPF</label>
            <imput type="text" class="form-control" name="cpf">
        </div>

        <div class="form-group">
            <label>Email</label>
            <imput type="text" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descrição" rows="5"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>
</main>