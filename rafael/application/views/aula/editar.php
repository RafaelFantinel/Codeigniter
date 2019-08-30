
<div class="col-12">
<a href="<?=base_url('/curso/index');?>">Voltar</a>
<p>

<section class="col-md-10">
    <div>
        <!-- 
            esse formulário está pronto, porém não esta com estilos e nem com validação
            pois escolhi deixar com você
         -->
        <form class="table" action="<?=base_url('aula/salvar');?>" method="POST">
            <input type="text" name="descricao" placeholder="descricao">
            <input type="text" name="data" placeholder="Data">
            <input type="text" name="hora_inciio" placeholder="URL">
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</section>


</p>
</div>