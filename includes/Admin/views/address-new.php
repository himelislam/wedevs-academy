<div class="wrap">
    <h1><?php _e( 'New Address Book', 'wedevs-academy') ?></h1>

    <?php //var_dump($this->errors); ?>

    <form action="" method="post">
        <table>
            <tbody>
                <tr class="row <?php echo $this->has_error('name') ? ' form-invalid' : '' ;?>">
                    <th scope="row">
                        <label for="name"><?php _e('Name', 'wedevs-academy'); ?></label>
                    </th>
                    <td>
                        <input type="text" name="name" id="name" class="regular-text" value="">
                        <?php if($this->has_error('name')) { ?>
                        <p class="description error"><?php echo $this->get_error('name') ?></p>
                        <?php } ?>
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
                <tr class="row <?php echo $this->has_error('phone') ? ' form-invalid' : '' ;?>">
                    <th scope="row">
                        <label for="phone"><?php _e('Phone', 'wedevs-academy'); ?></label>
                    </th>
                    <td>
                        <input type="text" name="phone" id="phone" class="regular-text" value="">
                        <?php if($this->has_error('phone')) { ?>
                        <p class="description error"><?php echo $this->get_error('phone') ?></p>
                        <?php } ?>
                    </td>
                </tr>
            </tbody> 
        </table>

        <?php wp_nonce_field('new-address'); ?>

        <?php submit_button(__('Add Address', 'wedevs-academy'), 'primary', 'submit_address'); ?>
    </form>
</div>