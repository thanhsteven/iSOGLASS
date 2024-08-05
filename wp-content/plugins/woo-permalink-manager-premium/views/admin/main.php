<?php

if ( ! defined('WPINC')) {
    die;
}
?>
<div class="wrap">
    <h2><?php esc_html_e('WooCommerce Permalink Settings', 'premmerce-url-manager'); ?></h2>

    <h2 class="nav-tab-wrapper">
        <?php foreach ($tabs as $tab => $name):
        $class = ($tab == $current) ? ' nav-tab-active' : '';
        $link = ('affiliate' == $tab) ? '?page=premmerce-url-manager-admin-affiliation' : '?page=premmerce-url-manager-admin&tab=' . $tab;

        ?>
        <a class='nav-tab<?php echo $class; ?>' href='<?php echo $link; ?>'>
            <?php echo $name; ?>
        </a>
        <?php endforeach; ?>

        <?php if (!premmerce_wpm_fs()->can_use_premium_code()) : //if it is not Premium plan.?>
        <a class="nav-tab premmerce-upgrate-to-premium-button"
            href="<?php echo admin_url('admin.php?page=premmerce-url-manager-admin-pricing'); ?>">
            <?php _e('Upgrate to Premium', 'premmerce-url-manager') ?>
        </a>
        <?php endif; ?>
    </h2>

    <?php $file = __DIR__ . "/tabs/{$current}.php"; ?>
    <?php if (file_exists($file)): ?>
    <?php include $file; ?>
    <?php endif; ?>
</div>