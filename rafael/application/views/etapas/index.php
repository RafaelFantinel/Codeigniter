<div class="col-10">
    <h2>Olá <?=$nome?>, acompanhe aqui todo o passo a passo do teste, não se preocupe em fazer TUDO, tente fazer apenas o que conseguir ^^</h2>
    <div>
        <ul class="list-group" id="etapas">
            <li class="list-group-item" id="crud-curso">
                <label class="form-check-label"><input type="checkbox"> 
                    Ajustar CRUD do Curso (o editar não edita ainda, pode copiar o que o cadastrar faz, a diferença dos dois é que o form do editar tem que receber os dados do curso
                </label>
            </li>
            <li class="list-group-item" id="tela-turmas">
                <label class="form-check-label"><input type="checkbox"> 
                    Criar tela para as turmas, o controlador já existe
                </label>
            </li>
            <li class="list-group-item" id="crud-turmas">
                <label class="form-check-label"><input type="checkbox"> 
                    Replicar o CRUD usado em Cursos para as turmas
                </label>
            </li>
            <li class="list-group-item" id="validacao-curso">
                <label class="form-check-label"><input type="checkbox"> 
                    Ajustar a Validação para cursos e turmas
                </label>
            </li>
            <li class="list-group-item" id="css-bootstrap">
                <label class="form-check-label"><input type="checkbox"> 
                    Ajustar o CSS/Bootstrap para que as telas fiquem bonitas
                </label>
            </li>
            <li class="list-group-item" id="tabela-aula">
                <label class="form-check-label"><input type="checkbox"> 
                    Criar a tabela Aula no banco de dados com a estrutura (aula_id, descricao, turma_id, data, hora_inicio)
                </label>
            </li>
            <li class="list-group-item" id="crud-aula">
                <label class="form-check-label"><input type="checkbox"> 
                    Replicar CRUD usado anteriormente nas aulas
                </label>
            </li>
            <li class="list-group-item" id="aula-turma">
                <label class="form-check-label"><input type="checkbox"> 
                    Colocar as aulas para ser uma tabela que aparece dentro da tela de edição de turma
                </label>
            </li>
            <li class="list-group-item" id="validacao-aula">
                <label class="form-check-label"><input type="checkbox"> 
                    Ajustar Validação para aulas
                </label>
            </li>
            <li class="list-group-item" id="ajax">
                <label class="form-check-label"><input type="checkbox"> 
                    Extra: criar requisição Ajax no botao deletar
                </label>
            </li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(() => {
        $('#etapas li').each((k, e) => {
            var id = $(e).attr('id');
            var marcado = localStorage.getItem(id);
            if(marcado == null || !marcado || marcado == 'false') marcado = false;
            else {
                marcado = true
            }
            $('#'+id+" input").prop('checked', marcado);
        });
        $('#etapas li input').click((e) => {
            var id = $(e.currentTarget).parent().parent().attr('id');
            var marcado = false;
            if(marcado = localStorage.getItem(id)){
                if(marcado == 'false'){
                    marcado = false;
                }else{
                    marcado = true;
                }
                localStorage.setItem(id, !marcado);
            }else{
                localStorage.setItem(id, true);
            }
            console.log(id,!marcado);
        });
    });
</script>
