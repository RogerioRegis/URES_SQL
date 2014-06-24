<?php include_once './header.php'; ?>
<?php include_once './menu.php'; ?>

<p class="text-info">Formulário de Cadastro</p>

<form role="form">
    <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"></label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Inserir Arquivo</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Imagem .jpg ou .pnp até 30k.</p>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox">Lembrar-me
        </label>
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
</form>
<br />

<?php include_once './footer.php'; ?>