<section class="col-md-10">
    <div>
    <a href="<?=base_url('aula/cadastrar');?>">Novo </a>
        
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Aula Id</th>
                <th scope="col">Descricao</th>
                <th scope="col">Turma id</th>
                <th scope="col">Data</th>
                <th scope="col">Hora incio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($aulas as $aula){ ?>        
                <tr class="table">            
                    <td><a href="<?=base_url('aula/editar/'.$aula['aula_id']);?>"><?=$aula['aula_id']?></a></td>
                    <td><?=$aula['descricao']?></td>
                    <td><?=$aula['turma_id']?></td>
                    <td><?=$aula['data']?></td>
                    <td><?=$aula['hora_inicio']?></td>
                    <td><a href="<?=base_url('aula/remover/'.$aula['aula_id']);?>">Remover</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</section>