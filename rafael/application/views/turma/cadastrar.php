<section>
    <div>
    <a href="<?=base_url('turma/cadastrar');?>">Nova Turma</a>
    </div>
    <div>

        <form class="table" action="<?=base_url('turma/salvar');?>" method="POST">
            <input type="text" name="curso_id" placeholder="Curso id">
            <input type="text" name="descricao" placeholder="Descricao">
            <input type="date" name="data_inicio" placeholder="Data incio">
            <input type="text" name="limite_vagas" placeholder="Limite de vagas">
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</section>