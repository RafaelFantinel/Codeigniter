<section class="col-md-10">
    <a href="<?=base_url('/curriculo/index');?>">Voltar</a>
    <div>
        <!-- 
            esse formulário está pronto, porém não esta com estilos e nem com validação
            pois escolhi deixar com você
         -->
        <form class="table" action="<?=base_url('curriculo/salvar');?>" method="POST">
            <input type="text" name="curriculo_id" readonly value="<?=$curriculo['curriculo_id']?>">
            <input type="text" name="nome" placeholder="Nome" value="<?=$curriculo['nome']?>">
            <input type="text" name="sobrenome" placeholder="Sobrenome" value="<?=$curriculo['sobrenome']?>">
            <input type="text" name="email" placeholder="Curriculo" value="<?=$curriculo['email']?>">
            <input type="text" name="pais" placeholder="Pais" value="<?=$curriculo['pais']?>">
            <input type="text" name="aredeinteresse" placeholder="Area de Interesse" value="<?=$curriculo['areadeinteresse']?>">
            <input type="text" name="resume" placeholder="Resume" value="<?=$curriculo['resume']?>">
            <button type="submit">Salvar</button>
        </form>
    </div>
</section>