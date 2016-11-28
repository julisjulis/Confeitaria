<header class="header">
    <div class="container">
        <h1><a href=<?php echo base_url();?>index.php/confeitaria/pedidos>Confeitaria</a></h1>
        <ul>
            <li><a href=<?php echo base_url();?>index.php/confeitaria/sobre>Sobre</a></li>
            
            <?php if(empty($_SESSION['_LOGIN'])): ?>
                <li><a href=<?php echo base_url();?>index.php/login/logar>Entrar</a></li>
                <li><a href=<?php echo base_url();?>index.php/login/cadastrar>Cadastrar</a></li>
            <?php endif; ?>
            
            
            
            <?php if(!empty($_SESSION['_LOGIN'])): ?>
                <li>Bem-vindo <?php echo $_SESSION['_LOGIN']; ?></li>
                <li><a href=<?php echo base_url(); ?>index.php/login/sair>Sair</a></li>
            <?php endif; ?>
            
            
            <li><a href=<?php echo base_url();?>index.php/confeitaria/carrinho>Carrinho</a></li>
        </ul>
    </div>
</header>