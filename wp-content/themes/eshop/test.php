<?php global $wpdb;
$helloworld_id = $wpdb->get_var("SELECT last_visit FROM wp_statistics_visit WHERE visit = '1'");
echo $helloworld_id;
?>
