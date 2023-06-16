<?php $render('header');?>

<h2>Editar Usuario</h2>

<form method="post" action="<?=$base;?>/editar/<?=$usuario['id'];?>">

    Nome:<br>
    <input type="text" name="nome" required value="<?=$usuario['nome'];?>">
    <br><br>

    Email:<br>
    <input type="email" name="email" required value="<?=$usuario['email'];?>">
    <br><br>

    <input type="submit" value="Salvar">
</form>





<?php $render('footer');?>