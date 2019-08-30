<section>
    <div><h2>Novo Curso <a href="./">Voltar</a></h2></div>
    <div>
        
        <form class="table" action="<?=base_url('curso/salvar');?>" method="POST">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="preco" placeholder="Preço">
            <input type="text" name="url" placeholder="URL">
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</section>