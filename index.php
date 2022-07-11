$post_table = $wpdb->prefix . 'posts';
$is_exist_csv_ex_page = $wpdb->get_row("SELECT * FROM $post_table WHERE post_type = 'page' AND post_status='publish' AND post_name='csv-shop-eporter'");

if ($is_exist_csv_ex_page) {
} else {
    $csv_exporter_page = [];
    $csv_exporter_page['post_title']    = 'CSV Shop Exporter';
    $csv_exporter_page['post_status']   = 'publish';
    $csv_exporter_page['post_name']     = 'csv-shop-eporter';
    $csv_exporter_page['post_type']     = 'page';
    wp_insert_post($csv_exporter_page);
}
