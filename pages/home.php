
<section class="row mt-3 mb-3">
    <h1 class="text-center">Home</h1>
    <h3 class="text-center">Sobre nós</h3>
    <article class="sobre-nos">
        <div class="foto">
            <img src="images/home.jpg" class="sobre-nos-img" alt="Sobre Nós">
        </div>
        <div class="content">
            <p>Somos uma empresa com mais de 20 anos de experiência em doces caseiros, nossas guloseimas são feitas com os produtos de melhor qualide e com muito amor e carinho estamos presentes nas principais cidades do estado do Paraná, venha nos visitar e saborear as delicias que temos disponíveis!</p> 
        </div>
    </article>
</section>

<div class="row">
    <h3 class="text-center mb-3">Conheça nossos principais produtos</h3>
    <section class="produtos">
        <?php foreach ($produtos as $produto): ?>
                <article class="card-produto">
                    <div class="card-produto-header">
                    <img class="img-responsive produto-img" src="images/<?=$produto['img'];?>" alt="<?=$produto['nome'];?>">
                        <a href="?page=produto&id=<?=$produto['id'];?>"><div class="card-title"><h4><?=$produto['nome'];?></h4></div></a>
                        <a href="?page=produto&id=<?=$produto['id'];?>" class="btn btn-primary">Saiba Mais</a>
                    </div>
                    
                </article>
        <?php endforeach; ?>
    </section>
</div>
