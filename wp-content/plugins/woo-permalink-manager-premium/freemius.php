<?php

// Create a helper function for easy SDK access.
class premmercewpmFsNull {
    public function is_registered() {
        return true;
    }
    public function is__premium_only() {
        return true;
    }
    public function can_use_premium_code() {
        return true;
    }
}
if ( !function_exists( 'premmerce_wpm_fs' ) ) {
    // Create a helper function for easy SDK access.
    function premmerce_wpm_fs()
    {
        global  $premmerce_wpm_fs ;
        
        if ( !isset( $premmerce_wpm_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $premmerce_wpm_fs = new premmercewpmFsNull();
        }
        
        return $premmerce_wpm_fs;
    }
    
    // Init Freemius.
    premmerce_wpm_fs();
    // Signal that SDK was initiated.
    do_action( 'premmerce_wpm_fs_loaded' );
    function premmerce_wpm_fs_settings_url()
    {
        return admin_url( 'admin.php?page=premmerce-url-manager-admin' );
    }
    
}
