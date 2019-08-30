<section class="col-md-10">
    <div>
    <a href="<?=base_url('turma/cadastrar');?>">Novo </a>
        
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Turma Id</th>
                <th scope="col">Curso Id</th>
                <th scope="col">Descricao</th>
                <th scope="col">Data Inicio</th>
                <th scope="col">Limite de vagas</th>
            </tr>
        </thead>
        <tbody>
        
        
            <?php foreach($turmas as $turma){ ?>        
                <tr class="table">            
                <td><a href="<?=base_url('turma/editar/'.$turma['turma_id']);?>"><?=$turma['turma_id']?></a></td>
                    <td><?=$turma['curso_id']?></td>
                    <td><?=$turma['descricao']?></td>
                    <td><?=$turma['data_inicio']?></td>
                    <td><?=$turma['limite_vagas']?></td>
                    <td><a href="<?=base_url('turma/remover/'.$turma['turma_id']);?>">Remover</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</section>