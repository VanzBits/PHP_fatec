<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Alteração de Clientes</title>
</head>
<body>
    <h1>Formulário de Alteração de Clientes</h1>
    <form action="<?php echo e(route('clientes.update' , $cliente->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="nome">Insira o Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo e($cliente->nome); ?>"> <br/>
        <label for="telefone">Insira o Telefone</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo e($cliente->telefone); ?>"> <br/>
        <label for="email">Insira o Email</label>
        <input type="text" name="email" id="email" value="<?php echo e($cliente->email); ?>"> <br/>
        <button type="submit">Salvar</button>
    </form>
   
</body>
</html><?php /**PATH C:\Users\aluno\Desktop\Laravel\resources\views/cliente/edit.blade.php ENDPATH**/ ?>