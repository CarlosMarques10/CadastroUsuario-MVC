<?php $render('header');?>

<h2>Adicionar novo Usuario</h2>

<form method="post" action="<?=$base;?>/novoUsuarioAction">

    Nome:<br>
    <input type="text" name="nome" required>
    <br><br>

    Email:<br>
    <input type="email" name="email" required>
    <br><br>

    <input type="submit" value="Enviar">
</form>





<?php $render('footer');?>