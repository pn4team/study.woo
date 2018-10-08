<?php
add_action('wp_ajax_search-ajax', 'esp_search_ajax_action_callback1');
add_action('wp_ajax_nopriv_search-ajax', 'esp_search_ajax_action_callback1');
function esp_search_ajax_action_callback () {
  get_vd($_POST);
  if(!wp_verify_nonce($_POST['nonce'], 'search-nonce')) {
    wp_die('Данные отправлены с левого сервиса');
  }
  
  $arg = array (
  'post_type' => array('post', 'product'),
  'post_status' => 'publish',
  's' => $_POST['s'],
  );
  $query_ajax = new WP_Query(arg);
  $json_data['out'] = ob_start();
  if ($query_ajax->have_posts()) {
    $query_ajax->the_post();
    ?><div class="search-result-text"><div class="title-search"><a href="<?php echo get_permalink();   ?>"></a><?php echo get_the_title(); ?></div></div><?php
  }
  else {
    ?><div class="search-result-text">Ничего не найдено</div><?php
  }
  $json_data['out'] .= ob_get_clean();
  wp_send_json($json_data);
  wp_die();
}