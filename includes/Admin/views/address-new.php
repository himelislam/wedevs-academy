<div class="wrap">
    <h1><?php _e( 'New Address Book', 'wedevs-academy') ?></h1>

    <form action="" method="post">
        <table>
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="name"><?php _e('Name', 'wedevs-academy'); ?></label>
                    </th>
                    <td>
                        <input type="text" name="name" id="name" class="regular-text" value="">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="name"><?php _e('Address', 'wedevs-academy'); ?></label>
                    </th>
                    <td>
                        <textarea name="address" id="address" cols="30" rows="10" class="regular-text"></textarea>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="phone"><?php _e('Phone', 'wedevs-academy'); ?></label>
                    </th>
                    <td>
                        <input type="text" name="phone" id="phone" class="regular-text" value="">
                    </td>
                </tr>
            </tbody> 
        </table>

        <?php wp_nonce_field('new-address'); ?>

        <?php submit_button(__('Add Address', 'wedevs-academy'), 'primary', 'submit_address'); ?>
    </form>
</div>