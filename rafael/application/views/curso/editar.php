<section class="col-md-10">
    <a href="<?=base_url('/curso/index');?>">Voltar</a>
    <div>
        <!-- 
            esse formulário está pronto, porém não esta com estilos e nem com validação
            pois escolhi deixar com você
         -->
        <form class="table" action="<?=base_url('curso/salvar');?>" method="POST">
            <input type="text" name="curso_id" readonly value="<?=$curso['curso_id']?>">
            <input type="text" name="nome" placeholder="Nome" value="<?=$curso['nome']?>">
            <input type="text" name="preco" placeholder="Preço" value="<?=$curso['preco']?>">
            <input type="text" name="url" placeholder="URL" value="<?=$curso['url']?>">
            <button type="submit">Salvar</button>
        </form>
    </div>
</section>