<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mokaru
 */


if(!is_user_logged_in()) {
    wp_redirect( wp_login_url() );
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php 

	add_action( 'wp_enqueue_scripts', 'dashboard_scripts');
	function dashboard_scripts() {
		wp_enqueue_script( 'jqvalidate', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js', false); 
		wp_enqueue_script( 'jqadm', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js', false); 
		wp_enqueue_style( 'dashboard_css', get_stylesheet_directory_uri() .  '/assets/dashboard/dashboard.css',array(), '' );
		wp_enqueue_style( 'dashboard_boxicon_css', 'https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css',array(), '' );
		wp_enqueue_script( 'dashboard_js', get_stylesheet_directory_uri() . '/assets/dashboard/dashboard.js', array('jquery'), '', true); 
	}


	
	wp_head();
	global $member;
	global $memberLines;
	global $current_user;



	?>
	<style>
    :root{
    --main-color-select: <?= $member->level->color ?>;
    }
	</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page-dashboard" class="site body-dashboard level_<?=$member->level->name?>">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mokaru' ); ?></a>


	<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="http://mokaru.io/wp-content/uploads/2022/12/Logo_ok.png" alt="Logo">
                </span>

                <div class="text logo-text">
                    <span class="name">Hola Andres</span> <!--'hola' + primer nombre del usuario-->
                    <span class="profession">Membresia Black</span> <!--'Membresia' + tipo de membresia, el texto va en el color representativo de cada membresia-->
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">


                
                <ul class="menu-links">
                    <li class="nav-link-d">
                        <a href="/dashboard">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link-d">
                        <a href="/transacciones">
                            <i class='bx bx-money-withdraw icon' ></i>
                            <span class="text nav-text">Transacciones</span>
                        </a>
                    </li>

                    <li class="nav-link-d">
                        <a href="/mi-billetera">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Mi billetera</span>
                        </a>
                    </li>

                    <li class="nav-link-d">
                        <a href="/mi-cuenta">
                            <i class='bx bx-cog icon' ></i>
                            <span class="text nav-text">Ajustes</span>
                        </a>
                    </li>

                    <li class="nav-link-d">
                        <a href="<?= get_permalink(325)?>">
                            <i class='bx bx-help-circle icon' ></i>
                            <span class="text nav-text">Ayuda</span>
                        </a>
                    </li>



                </ul>
            </div>

            <div class="bottom-content">
                <li>
                    <a href="<?php echo wp_logout_url( get_permalink() ); ?>">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Salir</span>
                    </a>
                </li>
                <li class="nav-link">

                            
                    <span class="text nav-text">Mokaru id: 
					<?php if($member->status == 'active'){ ?>    
						<?= $member->code  ?>
						<?php }else{ ?>    
							<p>Cuenta sin membresía</p>
					<?php } ?>
					</span>

            </li>

                
                
            </div>
        </div>

    </nav>

















		<!--Nav movil-->
		<div class="nav-movil">
			<div class="header-movil">
				<ul class="movil-nav">
					<li class="movil-nav-li">
						<p  class="movil-nav-li-a" >
							<i class='bx bx-log-out icon bx-sm OpenLogOut' ></i>
					
						</p>
					</li>
		
					<li  class="movil-nav-li" id="movil-billetera">
						<a href="#" class="movil-nav-li-a">
							<i class='bx bx-wallet icon bx-sm'></i>
					
						</a>
					</li>
		
					<li class="movil-nav-li">
						<a href="#" class="movil-nav-li-a">
							<i class='bx bx-home-alt icon bx-sm' ></i>
					
						</a>
					</li>

					<li class="movil-nav-li">
						<a href="#" class="movil-nav-li-a">
							<i class='bx bx-money-withdraw icon bx-sm' ></i>
					
						</a>
					</li>

					<li class="movil-nav-li">
						<a href="<?= get_permalink(325)?>" class="movil-nav-li-a">
							<i class='bx bx-help-circle icon bx-sm' ></i>
					
						</a>
					</li>
		
				</ul>
			</div>
		                    
		</div>    
	</header>

	<div class="alert-log-out-container noShow">

			<div class="alert-log-out primary-block">
				<p>¿Está seguro que desea salir de la aplicación?</p>
				<div>
					<a href="<?php echo wp_logout_url( get_permalink() ); ?>">Si, deseo salir</a>
					<button id="closeLogOut">No, deseo volver</button>
				</div>
			</div>

	</div>
	
	




	
			
