<!--footer-->
<section>
        <div class="up-footer">
        <img style="width: 200px; height: 100px; max-width: 100%; max-height: 100%;" src="<?php echo get_template_directory_uri (); ?>/logo.png">
        </div>

</section>


<section id="contato">
            <div class="title-text" style="padding-bottom: 20px;">               
                <h1>CONTATO</h1>
                <img style="widht: 30px; height: 5px;" src="<?php echo get_template_directory_uri (); ?>/linha-quebra.png">
            </div>

            <div class="footer-row">

                <div class="footer-left">
                    <p><?php the_field ('horarios'); ?></p>                     
                </div>

                <div class="footer-right">
                    <p><?php the_field ('endereco'); ?></p>
                    <p><?php the_field ('email'); ?></p>
                    <p><?php the_field ('whatsapp'); ?></p>
                    <a class="bandeiras-cards">
                        <img src="<?php echo get_template_directory_uri (); ?>/logo-visa.png">
                        <img src="<?php echo get_template_directory_uri (); ?>/logo-mastercard.png">  
                        <img src="<?php echo get_template_directory_uri (); ?>/logo-pix.png">
                    </a>
                </div>

            </div>

            <div class="map">
                <a target="_blank" href="https://www.google.com/maps/place/R.+Rui+Barbosa,+795+-+Bairro+F%C3%A1tima,+Canoas+-+RS,+92200-750/@-29.9433011,-51.1899559,16z/data=!4m5!3m4!1s0x95197a86a45acd7d:0xef7423a110725930!8m2!3d-29.9433058!4d-51.1855785">
                <img src="<?php the_field ('mapa'); ?>"></a>   
            </div>

            <div class="social-link">
                <a target="_blank" href="https://www.instagram.com/fanaticos_barbearia/">
                <img src="<?php echo get_template_directory_uri (); ?>/insta.png"></a>
                <a target="_blank" href="https://www.facebook.com/FanaticosBarberShop">
                <img src="<?php echo get_template_directory_uri (); ?>/facebook.png"></a>
            </div>
</section>

<section>
    <div class="down-footer">
        <p><?php bloginfo('name');?> &copy; <?php the_time('Y');?> <br> 
            Desenvolvido por:<br> 
            <a target="_blank" href="https://cassiosironi.com/">
            <img src="<?php echo get_template_directory_uri (); ?>/logoCRS.png"></a>
        </p>
    </div>
</section>


        <script>
            var menubtn = document.getElementById("menubtn")            
            var sideNav = document.getElementById("sideNav")
            var menu = document.getElementById("menu")

            menubtn.onclick = function(){
                if(sideNav.style.right == "-250px"){
                sideNav.style.right = "0"
            }
            else{
                sideNav.style.right = "-250px";
             }
            }

                        
            var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 1000,
	speedAsDuration: true
});
           
        </script>      
        
               
    <?php wp_footer();?>
    </body>
</html>

                    <!--<div class="features-img">
                    <img src="<?php the_field ('foto_equipe'); ?>">
                    </div> -->