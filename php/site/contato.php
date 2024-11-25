<?php
include "./header.php";
?>

<?php
    if(!empty($_POST)){
        echo "<div class='alert alert-dark' role='alert'>
        <b>Registro Salvo com Sucesso</b> <br>
        Nome:{$_POST['nome']} <br>
        Emai:{$_POST['email']} <br>
        Mensagem:{$_POST['mensagem']}
      </div>";
    }
?>
<div class="row">
    <div class="col">
        <h2>Contato</h2>

       <form action="contato.php" method="post">
       <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="nome">
        </div>
       <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="exemplo@example.com">
        </div>
            <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
        <textarea class="form-control" name="mensagem" rows="3"></textarea>
            </div>
        <button type="submit" class="btn btn-outline-secondary">Salvar</button>  
              
    </form>
    </div>
</div>


<?php
include "./footer.php";
?>