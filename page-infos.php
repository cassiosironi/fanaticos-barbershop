<?php //Template Name: Page Infos ?>

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

                <p><?php the_field ('texto_sobre'); ?></p>
                
                <img style="padding-top: 50px; max-widht: 200px; max-height: 200px;" src="<?php echo get_template_directory_uri (); ?>/quebra.png">                
            </div>
            
        </section>

        <!-- Menu -->
                <div id="sideNav">
                    <nav>
                    <ul>
                        <li><a href="http://localhost/fanaticos-barbearia/#banner">HOME</a></li>
                        <li><a href="#banner-sobre">SOBRE</a></li>
                        <li><a href="http://localhost/fanaticos-barbearia/#ambiente">AMBIENTE</a></li>
                        <li><a href="http://localhost/fanaticos-barbearia/#fotos">FOTOS</a></li>
                        <li><a href="http://localhost/fanaticos-barbearia/#servicos">SERVIÇOS</a></li>                
                        <li><a href="#contato">CONTATO</a></li>
                    </ul>   
                    </nav>

                </div>
                <div id="menubtn">
                    <img src="<?php echo get_template_directory_uri (); ?>/menu.png" id="menu">
                </div>

                      
        <!--Sobre -->

        <section id="ambiente-sobre">
            
                <div class="sobre-features container">

                    <article class="sobre-box" id="jogos">
                        <h1>JOGOS<img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png"></h1>
                        <a><?php the_field ('jogo_1'); ?></a>
                    </article>                    
                        
                    <article class="sobre-boxgrid" id="servicos-info"> 
                        <h1>SERVIÇOS <img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png"></h1>
                        <a><?php the_field ('servicos'); ?></a>
                    </article>

                    <article class="sobre-boxgrid" id="equipe"> 
                        <h1>EQUIPE<br><img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png"></h1>
                        <p><?php the_field ('nomebarbeiro_1'); ?><br>
                            <img style="height: 400px; width: 400px; margin-top: 20px; border-radius: 50%; border: 4px solid #a00303;" src="<?php the_field ('barbeiro_1'); ?>"><br>
                            <div class="banner-btn" >                  
                                <a href="https://www.instagram.com/vitorfranca2020/" target="_blank"><span></span>SEGUIR <?php the_field ('nomebarbeiro_1'); ?></a>                    
                            </div>
                        </p>                        
                        <p><?php the_field ('nomebarbeiro_2'); ?><br>
                            <img style="height: 400px; width: 400px; margin-top: 20px; border-radius: 50%; border: 4px solid #a00303;" src="<?php the_field ('barbeiro_2'); ?>"><br>
                            <div class="banner-btn" >                  
                                <a href="https://www.instagram.com/fanaticooss/" target="_blank"><span></span>SEGUIR <?php the_field ('nomebarbeiro_2'); ?></a>                    
                            </div>
                        </p>                      
                        <p><?php the_field ('nomebarbeiro_3'); ?><br>
                            <img style="height: 400px; width: 400px; margin-top: 20px; border-radius: 50%; border: 4px solid #a00303;" src="<?php the_field ('barbeiro_3'); ?>"><br>
                            <div class="banner-btn" >                  
                                <a href="https://www.instagram.com/tailanlinde/" target="_blank"><span></span>SEGUIR <?php the_field ('nomebarbeiro_3'); ?></a>                    
                            </div>
                        </p>                    
                    </article>                    

                    <article class="sobre-box" id="bebidas">  
                        <h1>BEBIDAS<br><img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png"></h1><br>
                        
                            <p><?php the_field ('texto_bebidas'); ?><br><br>
                            <img src="<?php the_field ('bebidas_1'); ?>">
                            <img src="<?php the_field ('bebidas_2'); ?>">
                            <img src="<?php the_field ('bebidas_3'); ?>">
                            </p>

                    </article>
                                                
                </div>  
        </section>  
        
        <section id="produtos"> 

                    <div class="produtos-features container">
                            <h1>PRODUTOS<br><img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png"></h1>
                            <p><?php the_field ('texto_produtos'); ?></p>
                            <div class="produtos-box">
                            <p><?php the_field ('nomeitem_1'); ?><br><img src="<?php the_field ('Item_1'); ?>"></p>
                            <p><?php the_field ('nomeitem_2'); ?><br><img src="<?php the_field ('Item_2'); ?>"></p>
                            <p><?php the_field ('nomeitem_3'); ?><br><img src="<?php the_field ('Item_3'); ?>"></p>                            
                            <p><?php the_field ('nomeitem_4'); ?><br><img src="<?php the_field ('Item_4'); ?>"></p>
                            <p><?php the_field ('nomeitem_5'); ?><br><img src="<?php the_field ('Item_5'); ?>"></p>
                            <p><?php the_field ('nomeitem_6'); ?><br><img src="<?php the_field ('Item_6'); ?>"></p>
                        </div>
                    </div>
                            
                    <div class="banner-btn" >                  
                            <a href="https://web.whatsapp.com/send?phone=555199986919&text=Ol%C3%A1!%20Encontrei%20seu%20contato%20no%20site.%20Gostaria%20de%20adquirir%20um%20produto."><span></span>COMPRAR</a>                    
                    </div>  
        <section>
       

        <?php get_footer() ?>