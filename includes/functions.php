<?php

/**
 * Insert address to database
 *
 * @param array $args
 * @return int
 */
function wd_ac_insert_address($args = [])
{
    global $wpdb;

    if (empty($args['name'])) {
        return new \WP_Error('no-name', __('You Must Provide a Name', 'wedevs-academy'));
    }

    $defaults = [
        'name' => '',
        'address' => '',
        'phone' => '',
        'created_by' => get_current_user_id(),
        'created_at' => current_time('mysql')
    ];

    $data = wp_parse_args($args, $defaults);

    if (isset($data['id'])) {

        $id= $data['id'];
        unset($data['id']);

        $updated = $wpdb->update(
            "{$wpdb->prefix}ac_addresses",
            $data,
            ['id' => $id],
            [
                '%s',
                '%s',
                '%s',
                '%d',
                '%s'
            ],
            ['%d']
        );

        return $updated;

    } else {

        $inserted = $wpdb->insert(
            "{$wpdb->prefix}ac_addresses",
            $data,
            [
                '%s',
                '%s',
                '%s',
                '%d',
                '%s'
            ]
        );

        if (!$inserted) {
            return new \WP_Error('failed-to-insert', __('Failed To Insert Data', 'wedevs-academy'));
        }

        return $wpdb->insert_id;
    }
}

/**
 * Fetch All Address
 *
 * @param array $args
 * @return array
 */
function wd_ac_get_addresses($args = [])
{
    global $wpdb;

    $defaults = [
        'number' => 20,
        'offset' => 0,
        'orderby' => 'id',
        'order' => 'ASC'
    ];

    $args = wp_parse_args($args, $defaults);


    $sql = $wpdb->prepare(
        "SELECT * FROM {$wpdb->prefix}ac_addresses 
        ORDER BY {$args['orderby']} {$args['order']}
        LIMIT %d",
        $args['number']
    );

    // echo $sql;


    $items = $wpdb->get_results($sql);

    // var_dump($items);

    return $items;
}

/**
 * Get the count of total address
 *
 * @return int
 */
function wd_ac_address_count()
{
    global $wpdb;

    return (int) $wpdb->get_var("SELECT count(id) FROM {$wpdb->prefix}ac_addresses");
}

/**
 * Fetch a single Address
 *
 * @param int $id
 * @return object
 */
function wd_ac_get_address($id)
{
    global $wpdb;

    return $wpdb->get_row(
        $wpdb->prepare("SELECT * FROM {$wpdb->prefix}ac_addresses WHERE id = %d", $id)
    );
}


/**
 * Delete an address
 *
 * @param  int $id
 *
 * @return int|boolean
 */
function wd_ac_delete_address( $id ) {
    global $wpdb;

    return $wpdb->delete(
        $wpdb->prefix . 'ac_addresses',
        [ 'id' => $id ],
        [ '%d' ]
    );
}
