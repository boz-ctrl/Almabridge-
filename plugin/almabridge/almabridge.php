<?php
/**
 * Plugin Name: AlmaBridge Community Edition
 * Plugin URI: https://github.com/boz-ctrl/Almabridge-
 * Description: Open-source digital credential issuing and verification foundation for AlmaBridge Community Edition.
 * Version: 0.1.0
 * Author: AlmaBridge
 * License: AGPL-3.0
 * Text Domain: almabridge
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ALMABRIDGE_VERSION', '0.1.0');
define('ALMABRIDGE_PLUGIN_FILE', __FILE__);
define('ALMABRIDGE_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('ALMABRIDGE_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Minimal bootstrap class for the Community Edition scaffold.
 */
final class AlmaBridge_Community {

    /**
     * Initialise hooks.
     */
    public static function init() {
        add_action('admin_menu', array(__CLASS__, 'register_admin_menu'));
        add_action('init', array(__CLASS__, 'register_shortcodes'));
        add_action('rest_api_init', array(__CLASS__, 'register_rest_routes'));
    }

    /**
     * Register admin menu.
     */
    public static function register_admin_menu() {
        add_menu_page(
            __('AlmaBridge', 'almabridge'),
            __('AlmaBridge', 'almabridge'),
            'manage_options',
            'almabridge',
            array(__CLASS__, 'render_admin_page'),
            'dashicons-awards',
            26
        );
    }

    /**
     * Render starter admin page.
     */
    public static function render_admin_page() {
        if (!current_user_can('manage_options')) {
            wp_die(esc_html__('You do not have permission to access this page.', 'almabridge'));
        }

        echo '<div class="wrap">';
        echo '<h1>' . esc_html__('AlmaBridge Community Edition', 'almabridge') . '</h1>';
        echo '<p>' . esc_html__('This is the open-source foundation for issuing, managing and verifying trusted digital credentials.', 'almabridge') . '</p>';
        echo '<p>' . esc_html__('Next implementation steps: credential tables, issuer dashboard, learner dashboard, verification page, lifecycle actions and audit logging.', 'almabridge') . '</p>';
        echo '</div>';
    }

    /**
     * Register shortcodes.
     */
    public static function register_shortcodes() {
        add_shortcode('almabridge_verify', array(__CLASS__, 'render_verification_shortcode'));
    }

    /**
     * Render starter public verification shortcode.
     */
    public static function render_verification_shortcode($atts) {
        $atts = shortcode_atts(
            array(
                'claim_code' => '',
            ),
            $atts,
            'almabridge_verify'
        );

        $claim_code = sanitize_text_field($atts['claim_code']);

        ob_start();
        echo '<div class="almabridge-verification">';
        echo '<h2>' . esc_html__('Credential Verification', 'almabridge') . '</h2>';

        if (empty($claim_code)) {
            echo '<p>' . esc_html__('Enter or provide a credential claim code to verify status.', 'almabridge') . '</p>';
        } else {
            echo '<p>' . esc_html__('Verification placeholder for claim code:', 'almabridge') . ' <strong>' . esc_html($claim_code) . '</strong></p>';
        }

        echo '</div>';
        return ob_get_clean();
    }

    /**
     * Register starter REST routes.
     */
    public static function register_rest_routes() {
        register_rest_route('almabridge/v1', '/status', array(
            'methods' => 'GET',
            'callback' => array(__CLASS__, 'rest_status'),
            'permission_callback' => '__return_true',
        ));
    }

    /**
     * Starter REST status endpoint.
     */
    public static function rest_status() {
        return rest_ensure_response(array(
            'name' => 'AlmaBridge Community Edition',
            'version' => ALMABRIDGE_VERSION,
            'status' => 'ready',
        ));
    }
}

AlmaBridge_Community::init();
