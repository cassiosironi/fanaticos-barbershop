<?php //Template Name: Page Home ?>

 <?php get_header() ?>

<body>
        <section id="banner">
            <img src="<?php echo get_template_directory_uri (); ?>/logo1.png" class="logo">
            <div class="banner-text">
                <img style="width: 500px; height: 300px; max-width: 100%; max-height: 100%; border-radius: 0px;" src="<?php echo get_template_directory_uri (); ?>/logo.png">
                 <h2>Amigos, Lazer e Resenha</h2>
                 <img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png">
                 <div class="banner-btn">
                  
                    <a href="http://localhost/fanaticos-barbearia/page-infos/#jogos" target="_blank"><span></span>Jogos</a>
                    <a href="http://localhost/fanaticos-barbearia/page-infos/#bebidas" target="_blank"><span></span>Bebibas</a>
                    <a href="http://localhost/fanaticos-barbearia/page-infos/#produtos" target="_blank"><span></span>Produtos</a>

                </div>
            </div>
        </section>

        <div id="sideNav">                
            <nav>                
            <ul>       
                <li><a href="#banner" target="_blank">HOME</a></li>
                <li><a href="http://localhost/fanaticos-barbearia/page-infos/" target="_blank">SOBRE</a></li>
                <li><a href="#ambiente" target="_blank">AMBIENTE</a></li>
                <li><a href="#fotos" target="_blank">FOTOS</a></li>
                <li><a href="#servicos" target="_blank">SERVIÇOS</a></li>                
                <li><a href="#contato" target="_blank">CONTATO</a></li>
            </ul>   
            </nav>

        </div>
        <div id="menubtn">
            <img src="<?php echo get_template_directory_uri (); ?>/menu.png" id="menu">
        </div>

        <!-- Player-->

        <section id="player">
            <div class="title-text container">
                <h1>Entre no clima</h1>
                <img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png">
                <h2><br><?php the_field ('player_sound'); ?></h2>                
            </div>
            
        </section>
               
        <!--Ambiente -->

        <section id="ambiente">
            <div class="title-text container">                
                <h1>Aqui é diferenciado</h1>
                <img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png">
  
            </div>
            <div class="feature-box container">
                <div class="features container">

                    <article class="ambiente-box">
                            <img style="max-width: 350px; max-height: 350px; padding: 20px;" src="<?php echo get_template_directory_uri (); ?>/socialclub-white.png">
                    </article>
                        
                    <article class="ambiente-box">
                            <h1><br><br><?php the_field ('titulo_ambiente'); ?></h1>
                            <img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png">
                            <h1><br><br><?php the_field ('descricao_ambiente'); ?></h1>
                    </article> 
                    
                </div>
                
                <div class="banner-btn container" style="text-align: center;">                  
                <a href="http://localhost/fanaticos-barbearia/page-infos/" target="_blank"><span></span>Conheça Mais</a>
                </div>

            </div>

                
                

        </section>

        <!--Instagram-->

        <section id="fotos">
            <div class="title-text container">                
                <h1>Nos siga no Instagram! &nbsp; 
                <img style="max-width: 100px; max-height: 100px; padding-top: 20px;" src="<?php echo get_template_directory_uri (); ?>/insta.png">
                </h1>
                
                <p></p>
            </div>
                <p><?php the_field ('instagram'); ?></p>                    
            </div>

            <div class="feature-box" style="background: #303030;" >
                <div class="banner-btn" style="margin: 0 auto;" >                  
                <a href="https://www.instagram.com/fanaticos_barbearia/" target="_blank"><span></span>VER MAIS</a>                    
                </div>
                
            </div>
                    

        </section>

                     
        <!-- Serviços-->

        <section id="servicos">
                <div class="title-text container">                    
                <img src="<?php echo get_template_directory_uri (); ?>/pole.gif">  
                <h1>SERVIÇOS</h1>
                <img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png">
                <p><br>Providenciamos sempre o melhor</p>
            </div>
            <div class="service-box">

                <div class=" single-service">
                    <h2>Cabelo</h2>
                    <img src="<?php echo get_template_directory_uri (); ?>/hair.png"> 
                </div>
                <div class=" single-service-price">
                    <a href="http://localhost/fanaticos-barbearia/page-infos/#servicos-info" target="_blank">
                    <h2><?php the_field ('preco_produto1'); ?></h2>                    
                    <div class="overlay"></div></a>
                </div>

                <div class="single-service">
                    <h2>Barba</h2>
                    <img src="<?php echo get_template_directory_uri (); ?>/beard.png">
                </div>
                <div class=" single-service-price">
                    <a href="http://localhost/fanaticos-barbearia/page-infos/#servicos-info" target="_blank">
                    <h2><?php the_field ('preco_produto2'); ?></h2>                  
                    <div class="overlay"></div></a>
                </div>

                <div class="single-service">
                    <h2>Máquina 1 Pente</h2>
                    <img src="<?php echo get_template_directory_uri (); ?>/maquina.png">
                </div>
                <div class=" single-service-price">
                    <a href="http://localhost/fanaticos-barbearia/page-infos/#servicos-info" target="_blank">
                    <h2><?php the_field ('preco_produto3'); ?></h2>                  
                    <div class="overlay"></div></a>
                </div>

                <div class="single-service">
                    <h2>Sobrancelha</h2>
                    <img src="<?php echo get_template_directory_uri (); ?>/eyebrow.png">
                </div>
                <div class=" single-service-price">
                    <a href="http://localhost/fanaticos-barbearia/page-infos/#servicos-info" target="_blank">
                    <h2><?php the_field ('preco_produto4'); ?></h2>                  
                    <div class="overlay"></div></a>
                </div>

                <div class="single-service">
                    <h2>Combo Cabelo + Barba</h2>
                    <img src="<?php echo get_template_directory_uri (); ?>/combo.png">
                </div>
                <div class="single-service-price">
                    <a href="http://localhost/fanaticos-barbearia/page-infos/#servicos-info" target="_blank">
                    <h2><?php the_field ('preco_produto5'); ?></h2>                  
                    <div class="overlay" ></div></a> 
                </div>

            </div>
        </section>
            
        <!-- Serviços - Carousel -->           
       

        <?php get_footer() ?>