<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nextgen
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
              
            <div id="main-banner">
                <picture>
                    <source srcset="<?php echo(get_template_directory_uri()); ?>/images/banner-s.jpg" media="(max-width: 480px)">
                    <source srcset="<?php echo(get_template_directory_uri()); ?>/images/banner-m.jpg" media="(max-width: 768px)">
                    <img srcset="<?php echo(get_template_directory_uri()); ?>/images/banner.jpg" alt="banner">
                </picture> 
                    <p id="above-text">Lorem ipsum dolor sit amet, consectetur</p> 
                    <p id="under-text">We create innovative digital products that impact the way people experience the world.</p>
            </div>
        
        <main class="wrapper">
        
        
            <section id="text">
                <div id="description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nis</p>
                </div>
            </section>
            
            
            <section id="selling-points">
                <ul>
                    <li>
                        <img src="<?php echo(get_template_directory_uri()); ?>/images/thumb-1.jpg" alt="selling point">
                        <h3>Digital Design Strategy</h3>
                        <p>We design through an iterative process mind mapping ideas to find opportunities.</p>
                    </li>
                    <li>
                        <img src="<?php echo(get_template_directory_uri()); ?>/images/thumb-2.jpg" alt="selling point">
                        <h3>Branding, Illustration & Animation</h3>
                        <p>Mind mapping ideas to find opportunities.</p>
                    </li>
                    <li>
                        <img src="<?php echo(get_template_directory_uri()); ?>/images/thumb-3.jpg" alt="selling point">
                        <h3>User Experience Design</h3>
                        <p>We design through an iterative process mind mapping ideas to find opportunities.</p>
                    </li>
                </ul>
            </section>
            
            
            
            <section id="text-picture">
                <ul>
                    <li>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu</h3>
                        <p>We design through an iterative process mind mapping ideas to find opportunities and market niches, creating concepts. Your users are impatient. They're probably distracted too. Keep it simple and beautiful, fun and functional. Clean aesthetics supported by a strong concept is what we stand for. Your users are impatient. They're probably distracted too.</p>
                    </li>
                    <li>
                        <img src="<?php echo(get_template_directory_uri()); ?>/images/mockup.jpg" alt="text-picture">
                    </li>
                </ul>     
            </section>
            
            
            
            <section id="latest-work">
                <ul>
                    <li><img src="<?php echo(get_template_directory_uri()); ?>/images/01.jpg" alt="work"></li>
                    <li><img src="<?php echo(get_template_directory_uri()); ?>/images/02.jpg" alt="work"></li>
                    <li><img src="<?php echo(get_template_directory_uri()); ?>/images/03.jpg" alt="work"></li>
                    <li><img src="<?php echo(get_template_directory_uri()); ?>/images/04.jpg" alt="work"></li>
                    <li><img src="<?php echo(get_template_directory_uri()); ?>/images/05.jpg" alt="work"></li>
                    <li><img src="<?php echo(get_template_directory_uri()); ?>/images/06.jpg" alt="work"></li>
                </ul>
            </section>
        
        </main>
        
        <!----
        <section id="location">
            <img src="images/screen-shot-2017-05-22-at-09-30-53.jpg" alt="location">
        </section>---->         
           
           
        <section id="location">
            <picture>
                <source srcset="<?php echo(get_template_directory_uri()); ?>/images/screen-shot-2017-05-22-at-09-30-53-m.jpg" media="(max-width: 768px)" class="images">
                <img srcset="<?php echo(get_template_directory_uri()); ?>/images/screen-shot-2017-05-22-at-09-30-53.jpg" class="images">
            </picture>
            <div id="icon">
                <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/placeholder.png" alt="placeholder">
            </div>
        </section>        
           
           
        <div class="wrapper">
           
            <section id="contact">
                <ul>
                    <li><h1>Have you tried NextGEN Agency?</h1></li>
                    <li><p>We bring a huge wealth of experience to native application design and development as an app design company based in London. We work with both established businesses and start-ups looking to disrupt the market through innovative app design.</p></li>
               </ul>
                <div id="contact-form">
                    <ul>
                        <li><input type="text" id="input" placeholder="E-mail">
                            <button><a href="">Contact us</a></button>
                        </li>
                        <li></li> 
                   </ul>
                </div>
            </section>
        </div>
	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
