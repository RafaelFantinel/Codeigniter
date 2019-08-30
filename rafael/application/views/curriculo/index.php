<section class="col-md-10">
    <div>
    <a href="<?=base_url('curriculo/cadastrar');?>">Novo </a>
        
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id Curriculo</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Email</th>
                <th scope="col">Pais</th>
                <th scope="col">Area interesse</th>
                <th scope="col">Resume</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($curriculos as $curriculo){ ?>        
                <tr class="table">            
                    <td><a href="<?=base_url('curriculo/editar/'.$curriculo['curriculo_id']);?>"><?=$curriculo['curriculo_id']?></a></td>
                    <td><?=$curriculo['nome']?></td>
                    <td><?=$curriculo['sobrenome']?></td>
                    <td><?=$curriculo['email']?></td>
                    <td><?=$curriculo['pais']?></td>
                    <td><?=$curriculo['areadeinteresse']?></td>
                    <td><?=$curriculo['resume']?></td>
                    <td><a href="<?=base_url('curriculo/remover/'.$curriculo['curriculo_id']);?>">Remover</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</section>