<section class="col-md-10">
<div>
    <!-- 
        a função abaixo base_url é uma função padrao do CodeIgniter que trás o valor do config['base_url']
        você poder ver dentro do arquivo em application/config/config.php
     -->
    <a href="<?=base_url('curso/cadastrar');?>">Novo Curso</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Url</th>
            <th>Remover</th>
        </tr>
    </thead>
    <tbody>
        <!-- 
            repetir o TR para cada curso dentro do array de cursos, para fazer uma listagem
         -->
        <?php foreach($cursos as $curso){ ?>        
            <tr>
                <td><a href="<?=base_url('curso/editar/'.$curso['curso_id']);?>"><?=$curso['curso_id']?></a></td>
                <td><?=$curso['nome']?></td>
                <td><?=$curso['preco']?></td>
                <td><?=$curso['url']?></td>
                <td><a href="<?=base_url('curso/remover/'.$curso['curso_id']);?>">Remover</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
        </section>