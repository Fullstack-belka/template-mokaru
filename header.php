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

	<?php wp_head();
	global $member;
	global $current_user;

	?>
	<style>
    :root{
    --main-color-select: <?= $member['level']->color ?>;
    }
	</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page-dashboard" class="site body-dashboard level_<?=$member['level']->name?>">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mokaru' ); ?></a>

	<header >
		<div class="nav-desktop">
			<div class="logo-container">
				<a class="logo-a" href="/dashboard">
					<img class="logo" src="http://mokaru.com.co/wp-content/uploads/2022/07/Logo123-e1657239855848.png" alt="Logo">
				</a>
			</div>

			<div class="cuenta">
				<div class="profile-img-container">
					<figure>					
						<img src="<?php echo get_template_directory_uri(); ?>/assets/image/ok_icon.png" alt="Perfil">
					</figure>
				</div>
				<p class="code">
					<?php //print_r($member); ?>
					<?php if($member['status'] == 'active'){ ?>    
						<?= $member['code']  ?>
						<?php }else{ ?>    
							<p>Cuenta sin membresía</p>
					<?php } ?>    
				</p>
			</div>	

			<div class="menuWrap">
                    <ul class="menu" id="menu">
                        <li>
                            <a href="/dashboard" class="link-nav">
                                <img class="ctrl-icon" src="http://mokaru.com.co/wp-content/uploads/2022/07/dashboard.png" alt="icon">
                                <p class="ctrl-link activo-1024">Inicio</p>
                            </a>
                            
                        </li>
        
                        <li >
                            <a href="#" class="link-nav">
                                <img class="ctrl-icon" src="http://mokaru.com.co/wp-content/uploads/2022/07/trending-up.png" alt="icon">
                                <p class="ctrl-link inactivo">Mi retiro</p>
                            </a>
                            
                        </li>
        
                        <li class="">

                            <a href="#" class="link-nav">
                                <img class="ctrl-icon" src="http://mokaru.com.co/wp-content/uploads/2022/07/alcancia.png" alt="icon">
                            <p class="ctrl-link inactivo">Alcancias</p>
                            </a>
                        </li>
        
                        <li >
                            <a href="/mi-cuenta" class="link-nav">
                                <img class="ctrl-icon" src="http://mokaru.com.co/wp-content/uploads/2022/07/settings.png" alt="icon">
                            <p class="ctrl-link">Cuenta</p>
                            </a>
                            
                        </li>
                    </ul>
                    <div class="separador"></div>
                    <div class="navItem">
                        <a href="#" class="link-nav">
                            <img class="ctrl-icon" src="http://mokaru.com.co/wp-content/uploads/2022/07/help.png" alt="icon">
                            <p class="ctrl-link">Ayuda</p>
                        </a>
                    </div>            
                    <div class="navItem">
                        <a href="<?php echo wp_logout_url( get_permalink() ); ?>" class="link-nav">
                            <img class="ctrl-icon" src="http://mokaru.com.co/wp-content/uploads/2022/07/arrow-left.png" alt="icon">
                            <p class="ctrl-link">Salir</p>
                        </a>                        
                    </div>
                </div>
                     
                    </div>
                </div>

		</div>            
		<!--Nav movil-->
		<div class="nav-movil">
			<div class="header-movil">
				<ul class="movil-nav">
					<li class="movil-nav-li">
						<div class="logo-svg">
							<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.5625 3.90625C1.5625 3.28465 1.80943 2.68851 2.24897 2.24897C2.68851 1.80943 3.28465 1.5625 3.90625 1.5625H8.59375C9.21535 1.5625 9.81149 1.80943 10.251 2.24897C10.6906 2.68851 10.9375 3.28465 10.9375 3.90625V8.59375C10.9375 9.21535 10.6906 9.81149 10.251 10.251C9.81149 10.6906 9.21535 10.9375 8.59375 10.9375H3.90625C3.28465 10.9375 2.68851 10.6906 2.24897 10.251C1.80943 9.81149 1.5625 9.21535 1.5625 8.59375V3.90625ZM14.0625 3.90625C14.0625 3.28465 14.3094 2.68851 14.749 2.24897C15.1885 1.80943 15.7846 1.5625 16.4062 1.5625H21.0938C21.7154 1.5625 22.3115 1.80943 22.751 2.24897C23.1906 2.68851 23.4375 3.28465 23.4375 3.90625V8.59375C23.4375 9.21535 23.1906 9.81149 22.751 10.251C22.3115 10.6906 21.7154 10.9375 21.0938 10.9375H16.4062C15.7846 10.9375 15.1885 10.6906 14.749 10.251C14.3094 9.81149 14.0625 9.21535 14.0625 8.59375V3.90625ZM1.5625 16.4062C1.5625 15.7846 1.80943 15.1885 2.24897 14.749C2.68851 14.3094 3.28465 14.0625 3.90625 14.0625H8.59375C9.21535 14.0625 9.81149 14.3094 10.251 14.749C10.6906 15.1885 10.9375 15.7846 10.9375 16.4062V21.0938C10.9375 21.7154 10.6906 22.3115 10.251 22.751C9.81149 23.1906 9.21535 23.4375 8.59375 23.4375H3.90625C3.28465 23.4375 2.68851 23.1906 2.24897 22.751C1.80943 22.3115 1.5625 21.7154 1.5625 21.0938V16.4062ZM14.0625 16.4062C14.0625 15.7846 14.3094 15.1885 14.749 14.749C15.1885 14.3094 15.7846 14.0625 16.4062 14.0625H21.0938C21.7154 14.0625 22.3115 14.3094 22.751 14.749C23.1906 15.1885 23.4375 15.7846 23.4375 16.4062V21.0938C23.4375 21.7154 23.1906 22.3115 22.751 22.751C22.3115 23.1906 21.7154 23.4375 21.0938 23.4375H16.4062C15.7846 23.4375 15.1885 23.1906 14.749 22.751C14.3094 22.3115 14.0625 21.7154 14.0625 21.0938V16.4062Z" fill="#253046"/>
							</svg>
							
						</div>
						<a href="#" class="movil-nav-li-a">Inicio</a>
					</li>
		
					<li  class="movil-nav-li" id="movil-billetera">
						<div class="logo-svg">
							<svg id="a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 391.41 258.02"><defs><style>.b{fill:#5d3eea;}.c{fill:#37dff5;}</style></defs><g><path class="b" d="M120.71,62.73H0V192.4c0,33.11,26.96,60.35,60.35,60.35h76.49c24.43,0,44.23-19.8,44.23-44.23V123.08c0-33.11-26.96-60.35-60.35-60.35Zm8.5,138.16H60.35c-4.69,0-8.49-3.8-8.49-8.49V114.58H120.71c4.69,0,8.5,3.8,8.5,8.5v77.81Z"/><path class="b" d="M331.06,149.03c11.54-7.46,22.09-16.91,30.99-27.8,29.23-42.04,27.54-98.91,25.73-121.24h-52.67c10.65,43-1.33,84.53-29.94,104.61-14.95,10.49-31.22,12.88-42.43,13.17l-.85,.02,.03-1.84V0h-51.57V252.75h51.57v-84.09h3.22c5.57,0,11.13-.29,16.41-.88,10.55,57.13,50.1,90.24,109.87,90.24v-51.86c-24.03,0-55.37-6.45-60.35-57.13Z"/></g><path class="c" d="M180.83,79.99l-.74-54.07s-.24,.1-.39,.17c-1.05-14.19-12.57-25.48-27.03-25.48H0C0,25.38,20.08,45.46,44.84,45.46H125.52c55.9,3.04,55.31,34.53,55.31,34.53Z"/></svg>
						</div>
						
						<a href="#" class="movil-nav-li-a">Billetera Mokaru</a>
					</li>
		
					<li class="movil-nav-li">
		
						<div class="logo-svg">
							<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M25 12.5C25 12.9735 24.8354 13.4276 24.5424 13.7625C24.2494 14.0973 23.852 14.2854 23.4377 14.2854H5.33657L12.0452 21.9483C12.1905 22.1143 12.3057 22.3114 12.3843 22.5282C12.4629 22.7451 12.5034 22.9776 12.5034 23.2124C12.5034 23.4471 12.4629 23.6796 12.3843 23.8965C12.3057 24.1133 12.1905 24.3104 12.0452 24.4764C11.8999 24.6424 11.7275 24.7741 11.5377 24.8639C11.3479 24.9538 11.1445 25 10.9391 25C10.7336 25 10.5302 24.9538 10.3404 24.8639C10.1506 24.7741 9.9782 24.6424 9.83294 24.4764L0.458992 13.7641C0.313498 13.5982 0.198064 13.4012 0.119303 13.1843C0.0405411 12.9674 0 12.7348 0 12.5C0 12.2652 0.0405411 12.0326 0.119303 11.8157C0.198064 11.5988 0.313498 11.4018 0.458992 11.2359L9.83294 0.52359C10.1263 0.188341 10.5242 0 10.9391 0C11.3539 0 11.7518 0.188341 12.0452 0.52359C12.3386 0.858839 12.5034 1.31353 12.5034 1.78765C12.5034 2.26176 12.3386 2.71646 12.0452 3.05171L5.33657 10.7146H23.4377C23.852 10.7146 24.2494 10.9027 24.5424 11.2375C24.8354 11.5724 25 12.0265 25 12.5Z" fill="#253046"/>
							</svg>
						</div>
						<a href="<?php echo wp_logout_url( get_permalink() ); ?>" class="movil-nav-li-a">Salir</a>
					</li>
		
				</ul>
			</div>
		
			
			<div class="sub-menu-movil" id="sub-menu-movil">
				<ul class="movil-nav">
					<li class="movil-nav-li">
						<div class="logo-svg">
							<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.5 7.6001H21.5M21.5 7.6001V17.2001M21.5 7.6001L13.5 17.2001L9.5 12.4001L3.5 19.6001" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
								
								
						</div>
						<a href="/" class="movil-sub-nav-li-a">Mi retiro</a>
					</li>        
					<li  class="movil-nav-li">
						<div class="logo-svg">
							<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M16.3319 10.5832C16.8749 11.2089 17.8222 11.276 18.4479 10.7331C19.0737 10.1901 19.1408 9.24274 18.5978 8.61703L16.3319 10.5832ZM11.6681 16.617C11.1252 15.9913 10.1778 15.9242 9.55209 16.4671C8.92638 17.0101 8.85927 17.9575 9.4022 18.5832L11.6681 16.617ZM15.5 6.93343C15.5 6.105 14.8284 5.43343 14 5.43343C13.1716 5.43343 12.5 6.105 12.5 6.93343H15.5ZM12.5 20.2667C12.5 21.0952 13.1715 21.7667 14 21.7668C14.8284 21.7668 15.5 21.0952 15.5 20.2668L12.5 20.2667ZM24.5 13.6001C24.5 19.3991 19.799 24.1001 14 24.1001V27.1001C21.4558 27.1001 27.5 21.0559 27.5 13.6001H24.5ZM14 24.1001C8.20101 24.1001 3.5 19.3991 3.5 13.6001H0.5C0.5 21.0559 6.54416 27.1001 14 27.1001V24.1001ZM3.5 13.6001C3.5 7.80111 8.20101 3.1001 14 3.1001V0.100098C6.54416 0.100098 0.5 6.14425 0.5 13.6001H3.5ZM14 3.1001C19.799 3.1001 24.5 7.80111 24.5 13.6001H27.5C27.5 6.14425 21.4558 0.100098 14 0.100098V3.1001ZM14 12.1001C13.1503 12.1001 12.4488 11.8678 12.0036 11.571C11.5479 11.2672 11.5 11.0122 11.5 10.9334H8.5C8.5 12.3274 9.34749 13.4058 10.3395 14.0671C11.342 14.7355 12.6406 15.1001 14 15.1001V12.1001ZM11.5 10.9334C11.5 10.8546 11.5479 10.5997 12.0036 10.2959C12.4488 9.99909 13.1503 9.76676 14 9.76676V6.76676C12.6406 6.76676 11.342 7.13139 10.3395 7.79974C9.34749 8.46109 8.5 9.53948 8.5 10.9334H11.5ZM14 9.76676C15.1706 9.76676 15.9979 10.1982 16.3319 10.5832L18.5978 8.61703C17.5486 7.40786 15.7905 6.76676 14 6.76676V9.76676ZM14 15.1001C14.8497 15.1001 15.5512 15.3324 15.9964 15.6292C16.4521 15.933 16.5 16.188 16.5 16.2668H19.5C19.5 14.8728 18.6525 13.7944 17.6605 13.1331C16.658 12.4647 15.3594 12.1001 14 12.1001V15.1001ZM12.5 6.93343V8.26676H15.5V6.93343H12.5ZM12.5 18.9334L12.5 20.2667L15.5 20.2668L15.5 18.9335L12.5 18.9334ZM14 17.4334C12.8294 17.4334 12.0021 17.002 11.6681 16.617L9.4022 18.5832C10.4514 19.7923 12.2095 20.4334 14 20.4334L14 17.4334ZM16.5 16.2668C16.5 16.3456 16.4521 16.6005 15.9964 16.9043C15.5512 17.2011 14.8498 17.4334 14 17.4334V20.4334C15.3594 20.4334 16.658 20.0688 17.6605 19.4005C18.6525 18.7391 19.5 17.6607 19.5 16.2668H16.5ZM12.5 8.26677L12.5 18.9334L15.5 18.9334L15.5 8.26676L12.5 8.26677Z" fill="white"/>
								</svg>                            
						</div>                    
						<a href="/alcancia" class="movil-sub-nav-li-a">Alcancia</a>
					</li>        
					<li class="movil-nav-li">                    
						<div class="logo-svg">
							<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_42_1333)">
								<path d="M24 12.7998C24 15.9824 22.7357 19.0347 20.4853 21.2851C18.2348 23.5355 15.1826 24.7998 12 24.7998C8.8174 24.7998 5.76516 23.5355 3.51472 21.2851C1.26428 19.0347 0 15.9824 0 12.7998C0 9.61721 1.26428 6.56496 3.51472 4.31452C5.76516 2.06409 8.8174 0.799805 12 0.799805C15.1826 0.799805 18.2348 2.06409 20.4853 4.31452C22.7357 6.56496 24 9.61721 24 12.7998ZM8.244 9.8493H9.4815C9.6885 9.8493 9.8535 9.6798 9.8805 9.4743C10.0155 8.4903 10.6905 7.7733 11.8935 7.7733C12.9225 7.7733 13.8645 8.2878 13.8645 9.5253C13.8645 10.4778 13.3035 10.9158 12.417 11.5818C11.4075 12.3153 10.608 13.1718 10.665 14.5623L10.6695 14.8878C10.6711 14.9862 10.7113 15.0801 10.7814 15.1491C10.8516 15.2181 10.9461 15.2568 11.0445 15.2568H12.261C12.3605 15.2568 12.4558 15.2173 12.5262 15.147C12.5965 15.0766 12.636 14.9813 12.636 14.8818V14.7243C12.636 13.6473 13.0455 13.3338 14.151 12.4953C15.0645 11.8008 16.017 11.0298 16.017 9.4113C16.017 7.1448 14.103 6.0498 12.0075 6.0498C10.107 6.0498 8.025 6.9348 7.8825 9.4788C7.88045 9.52725 7.88832 9.57559 7.90565 9.62088C7.92297 9.66616 7.94937 9.70743 7.98323 9.74213C8.01709 9.77683 8.05769 9.80424 8.10254 9.82267C8.14738 9.8411 8.19552 9.85017 8.244 9.8493ZM11.7315 19.5138C12.6465 19.5138 13.275 18.9228 13.275 18.1233C13.275 17.2953 12.645 16.7133 11.7315 16.7133C10.8555 16.7133 10.218 17.2953 10.218 18.1233C10.218 18.9228 10.8555 19.5138 11.733 19.5138H11.7315Z" fill="white"/>
								</g>
								<defs>
								<clipPath id="clip0_42_1333">
								<rect width="24" height="24" fill="white" transform="translate(0 0.799805)"/>
								</clipPath>
								</defs>
							</svg>
								
						</div>
						<a href="/ayuda" class="movil-sub-nav-li-a">Ayuda</a>
					</li>        
				</ul>            
			</div>                     
		</div>    
	</header>     
			
