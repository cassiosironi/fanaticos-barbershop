<?php //Template Name: Page Sobre ?>

 <?php get_header() ?>

<body>

        <!-- Título -->

        <section id="banner-sobre">
            <a href="http://localhost/fanaticos-barbearia/">
            <img src="<?php echo get_template_directory_uri (); ?>/logo1.png" class="logo">
            </a>
            <div class="banner-text">
                <h2>Amigos, Lazer e Resenha</h2>

                <!-- estilo para linha de quebra -->
                <img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png">

                <p>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem.</p>
                
                <img style="padding-top: 50px; max-widht: 200px; max-height: 200px;" src="<?php echo get_template_directory_uri (); ?>/quebra.png">                
            </div>
            
        </section>

        <!-- Menu -->
                <div id="sideNav">
                    <nav>
                    <ul>
                        <li><a href="http://localhost/fanaticos-barbearia/">HOME</a></li>
                        <li><a href="http://localhost/fanaticos-barbearia/#feature">AMBIENTE</a></li>
                        <li><a href="http://localhost/fanaticos-barbearia/#service">SERVIÇOS</a></li>
                        <li><a href="http://localhost/fanaticos-barbearia/#testimonial">FOTOS</a></li>
                        <li><a href="#footer">CONTATO</a></li>
                    </ul>   
                    </nav>

                </div>
                <div id="menubtn">
                    <img src="<?php echo get_template_directory_uri (); ?>/menu.png" id="menu">
                </div>

                      
        <!--Sobre -->

        <section id="feature-sobre">
            
                <div class="sobre-features container">

                    <article class="sobre-box" id="equipe"> 
                        <h1>EQUIPE<br><img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png"></h1>
                        <!-- <img src="<?php the_field ('barbeiro_1'); ?>"> -->
                        <!-- <img src="<?php the_field ('barbeiro_2'); ?>"> -->
                        <!-- <img src="<?php the_field ('barbeiro_3'); ?>"> -->
                    </article>
                        
                    <article class="sobre-boxgrid" id="servicos"> 
                        <h1>SERVIÇOS <img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png"></h1>
                        <a><?php the_field ('servicos'); ?></a>
                    </article>

                    <article class="sobre-boxgrid" id="jogos">
                        <h1>JOGOS<img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png"></h1>
                        <img src="<?php the_field ('jogo_1'); ?>">
                        <img src="<?php the_field ('jogo_2'); ?>">
                    </article>

                    <article class="sobre-box" id="bebidas">  
                        <h1>BEBIDAS<br><img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png"></h1>
                        <img src="<?php the_field ('bebidas_1'); ?>">
                        <img src="<?php the_field ('bebidas_2'); ?>">
                    </article>
                                                
                </div>  
        </section>  
        
        <section id="produtos"> 

                    <div class="produtos-features container">
                            <h1>PRODUTOS<br><img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png"></h1>
                            <p>Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur</p>
                            <div class="produtos-box">
                            <p>TEXTO<br><img src="<?php the_field ('pomada_1'); ?>"></p>
                            <p>TEXTO<br><img src="<?php the_field ('pomada_2'); ?>"></p>
                            <p>TEXTO<br><img src="<?php the_field ('pomada_3'); ?>"></p>                            
                            <p>TEXTO<br><img src="<?php the_field ('pomada_4'); ?>"></p>
                            <p>Teimoso<br><img src="<?php the_field ('pomada_5'); ?>"></p>
                        </div>
                    </div>
                            
                    <div class="banner-btn" >                  
                            <a href=""><span></span>COMPRAR</a>                    
                    </div>  
        <section>
       

        <?php get_footer() ?>