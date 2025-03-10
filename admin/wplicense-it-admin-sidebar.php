<?php  


function enqueue_scripts() {   

	// This should only load on this settings page

	$my_current_screen = get_current_screen();

	if ( isset( $my_current_screen->id ) && in_array( $my_current_screen->id, array( 'wplit_product_page_wplit-admin-dashboard', 'wplit_product_page_wplit-admin-settings' ) ) ) {
 
	wp_enqueue_style( 'dashboard-css', WPLIT_ADMIN_URI. 'assets/dashboard.css');
	wp_enqueue_style( 'style-css', WPLIT_ADMIN_URI. 'assets/style.css');

	}

}

add_action( 'admin_enqueue_scripts', 'enqueue_scripts' );


function wplit_admin_sidebar (){

    ?>
<!-- SideBar Starts Here -->
<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="edit.php?post_type=wplit_product&page=wplit-admin-dashboard">
          <span class="align-middle"><?php _e('WP License It', 'wplicense-it'); ?><span style="font-size: 10px;"> v1.0.0</span></span>
            </a>

				<ul class="sidebar-nav">
					<li class="sidebar-item">
						<a class="sidebar-link" href="edit.php?post_type=wplit_product&page=wplit-admin-dashboard">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle"><?php _e('Dashboard', 'wp-liocense-it'); ?></span>
            </a>
					</li>

					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Attendees</span>
            </a>
					</li> -->

					<li class="sidebar-item">
						<a class="sidebar-link" href="edit.php?post_type=wplit_product&page=wplit-admin-settings">
              <i class="align-middle" data-feather="settings"></i> <span class="align-middle"><?php _e('Settings', 'wplicense-it'); ?></span>
            </a>
					</li>

					<li class="sidebar-header"><?php esc_html_e('Add-Ons', 'wplicense-it'); ?>
					</li>

					<li class="sidebar-item">
					<!-- <a class="sidebar-link" href="edit.php?page=wplit-addons&tab=wplit_free_addons&post_type=devllo_event"> 
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Free Add-Ons</span>
            </a> -->
					</li>

					<li class="sidebar-item">
					<!-- <a class="sidebar-link" href="edit.php?page=wplit-addons&tab=wplit_premium_addons&post_type=devllo_event"> 
              <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Premium Add-Ons</span>
            </a> -->
					</li>
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2"><?php esc_html_e('Premium Support', 'wplicense-it'); ?></strong>
						<div class="mb-3 text-sm">
							<?php esc_html_e('Need help? Subscribe for Premium Support here.', 'wplicense-it'); ?>
						</div>
						<div class="d-grid">
							<a href="https://wordpress.org/support/plugin/wplicense-it/" target="_blank" class="btn btn-primary"><?php esc_html_e('Get Support', 'wplicense-it'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</nav>
        <!-- SideBar Ends -->
        <?php } ?>