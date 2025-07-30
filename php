<?php
/**
 * Plugin Name: Custom Social Media Floating Bar
 * Description: Displays a floating bar with social media icons on the side of the screen.
 * Version: 1.1
 * Author: Your Name
 */

// Enqueue CSS and Font Awesome
function csfb_enqueue_styles() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    wp_enqueue_style('csfb-style', plugin_dir_url(__FILE__) . 'csfb-style.css');
}
add_action('wp_enqueue_scripts', 'csfb_enqueue_styles');

// Output HTML
function csfb_display_icons() {
    ?>
    <div class="csfb-container">
        <div class="csfb-inner">
            <a href="https://facebook.com/yourprofile" target="_blank" class="csfb-icon fb" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/yourprofile" target="_blank" class="csfb-icon tw" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com/yourprofile" target="_blank" class="csfb-icon ig" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://linkedin.com/in/yourprofile" target="_blank" class="csfb-icon li" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://youtube.com/yourchannel" target="_blank" class="csfb-icon yt" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://pinterest.com/yourprofile" target="_blank" class="csfb-icon pin" aria-label="Pinterest">
                <i class="fab fa-pinterest-p"></i>
            </a>
        </div>
    </div>
    <?php
}
add_action('wp_footer', 'csfb_display_icons');
