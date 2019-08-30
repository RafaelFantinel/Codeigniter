<section>
    <div>
    <a href="<?=base_url('aula/cadastrar');?>">Nova Turma</a>
    </div>
    <div>

        <form class="table" action="<?=base_url('aula/salvar');?>" method="POST">
            
            <input type="text" name="descricao" placeholder="Descricao">
            <input type="text" name="turma_id" placeholder="Turma id">

            <!--<select name="turma_id">
                <?php foreach($turmas as $turma){ ?>
                    <option value=""></option>
                <?php } ?>
            </select>
                -->

            <input type="date" name="data" placeholder="Data">
            <input type="time" name="hora_inicio" placeholder="Hora inciio">
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</section>