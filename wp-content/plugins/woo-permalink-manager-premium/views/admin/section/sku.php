<?php

if ( ! defined('WPINC')) {
    die;
}

/**
 * @var bool $free
 * @var string $sku
 * @var string $product
 * @var string $productPath
 */

use Premmerce\UrlManager\Admin\Settings;

#premmerce_clear
$free = true;
if ( premmerce_wpm_fs()->can_use_premium_code() ) {
    #/premmerce_clear
	$free = false;
    #premmerce_clear
}
#/premmerce_clear

switch( $product ) {
  case 'category_slug':
    $productPath = '/category';
    break;
  case 'hierarchical':
    $productPath = 'parent-category/category';
    break;
  default:
    $productPath = '';
    break;
}

?>
<table class="form-table">
    <tbody class="<?php echo $free ? 'is-free' : ''; ?>">
        <tr>
            <th>
                <label class="flex-label">
                    <input type="radio" name="<?= Settings::OPTIONS ?>[sku]" value="" <?php checked( '', $sku ); ?>>
                    <span>
                        <?php esc_html_e( 'Use WooCommerce settings', 'premmerce-url-manager' ); ?>
                    </span>

                </label>
            </th>
        </tr>
        <tr>
            <th>
                <label class="flex-label">
                    <input <?php echo $free ? 'disabled' : '' ?> type="radio" name="<?= Settings::OPTIONS ?>[sku]"
                        value="sku" <?php checked( 'sku', $sku ); ?>>
                    <?php esc_html_e( 'Replace product slug', 'premmerce-url-manager' ); ?>
                </label>
                <p class="description">
                    <span class="premium-only-feature">
                        <a class="premium-only-feature-link"
                            href="<?php echo admin_url('admin.php?page=premmerce-url-manager-admin-pricing'); ?>">
                            <?php esc_html_e( 'Available only in premium version', 'premmerce-url-manager' ); ?>
                        </a>
                    </span>
                </p>
            </th>
            <td>
                <code><?php echo home_url( $productPath . '/SKU' ); ?></code>
            </td>
        </tr>
    </tbody>
</table>