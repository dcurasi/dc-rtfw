<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Rtfw
 * @subpackage Dc_Rtfw/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<h1>Responsive Table for Woocommerce</h1>
<form method="post" action="options.php">
    <!--necessaria per il corretto aggiornamento dei dati-->
    <?php settings_fields('dc_rtfw_options_group'); ?>
    <?php settings_errors(); ?>
    <table class="form-table">
           <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_rtfw_activate">Enable / Disable</label>
                    </th>
                    <td>
                      <label for="dc_rtfw_activate">
                          <input type="checkbox" id="dc_rtfw_activate" value="1" <?php checked(get_option('dc_rtfw_activate'), 1); ?> name="dc_rtfw_activate"> Activate Options
                      </label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_rtfw_activate_cart">Cart</label>
                    </th>
                    <td>
                      <label for="dc_rtfw_activate_cart">
                          <input type="checkbox" id="dc_rtfw_activate_cart" value="1" <?php checked(get_option('dc_rtfw_activate_cart'), 1); ?> name="dc_rtfw_activate_cart"> Activate Responsive Cart
                      </label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_rtfw_activate_wishlist">Wishlist</label>
                    </th>
                    <td>
                      <label for="dc_rtfw_activate_wishlist">
                          <input type="checkbox" id="dc_rtfw_activate_wishlist" value="1" <?php checked(get_option('dc_rtfw_activate_wishlist'), 1); ?> name="dc_rtfw_activate_wishlist"> Activate Responsive Wishlist
                      </label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_rtfw_wishlist_page">Wishlist Page</label>
                    </th>
                    <td>
                        <select id="dc_rtfw_wishlist_page" name="dc_rtfw_wishlist_page">
                            <option value="">Select a page</option>
                            <?php
                                $args = array(
                                  'sort_order' => 'asc',
                                  'sort_column' => 'post_title',
                                  'hierarchical' => 1,
                                  'parent' => -1,
                                  'offset' => 0,
                                  'post_type' => 'page',
                                  'post_status' => 'publish'
                                ); 
                                $pages = get_pages($args);
                                foreach ($pages as $key => $page) {
                                   echo '<option value="'.$page->ID.'" '.selected(get_option('dc_rtfw_wishlist_page'), $page->ID).'>'.$page->post_title.'</option>';
                                }
                            ?>
                        </select>
                        <p class="description">Select the Wishlist page</p>
                    </td>
                </tr>
                <tr valign="top">
                   <th scope="row"></th>
                   <td>
                       <p>
                           <input type="submit" class="button-primary save-options" id="submit" name="submit" value="Save options">
                       </p>
                   </td>
                </tr>
            </tbody>
       </table>
</form>