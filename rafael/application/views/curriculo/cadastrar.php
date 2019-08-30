<section class="col-md-10">
<div><h2>Novo Curriculo <a href="./">Voltar</a></h2></div>

<form class="table" action="<?=base_url('curriculo/salvar');?>" method="POST">
        <label for="validationDefault01">Nome</label> 
        <input name="nome"type="text" class="form-control" id="validationDefault01" placeholder="Nome"></input>
        <label>Sobrenome</label>  
        <input name="sobrenome"type="text" class="form-control" placeholder="Sobrenome"></input>
        <label>E-mail</label>  
        <input name="email"type="email"class="form-control"placeholder="Email"></input>
        <label>Pais</label>  
        <input name="pais"type="text"class="form-control"placeholder="Pais"></input>
        <!--<select name="pais"class="form-control" >              
            <option value="Brasil">Brasil</option>
            <option value="Inglaterra">Inglaterra</option>
        </select>-->
        <label>Area de interesse</label>      
        
        <select name="areadeinteresse"class="form-control" >              
            <option value="Marketing">Marketing</option>
            <option value="Engenharia">Engenharia</option>
            <option value="Suporte">Suporte</option>
            <option value="Administrativo">Administrativo</option>
        </select>
        <label for="">Resume</label>
        <br>
        <input name="resume" id="curriculo"type="file"> </input>
        <br>
        <br>
        <input type="submit" ></input>
        <input type="reset" value="Apagar"></input>
        
        

     
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</section>
</html>