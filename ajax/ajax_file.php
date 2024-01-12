<?php
add_action('wp_ajax_wqdata_entry', 'wqdata_entry_callback_function');
add_action('wp_ajax_nopriv_wqdata_entry', 'wqdata_entry_callback_function');

function wqdata_entry_callback_function() {
  global $wpdb;
  $wpdb->get_row( "SELECT * FROM `prefix_rul_team` WHERE `title` = '".$_POST['wqtitle']."' AND `designation` = '".$_POST['wqdesignation']."' AND 
  `empid` = '".$_POST['wqempid']."' AND 
  `email` = '".$_POST['wqemail']."' ORDER BY `id` DESC" );
  if($wpdb->num_rows < 1) {
    $wpdb->insert("prefix_rul_team", array(
      "title" => $_POST['wqtitle'],
     "designation" => $_POST["wqdesignation"],
      "empid" => $_POST["wqempid"],
      "email" => $_POST['wqemail'],
      "created_at" => time(),
      "updated_at" => time()
    ));

    $response = array('message'=>'Data Inserted Successfully', 'rescode'=>200);
  } else {
    $response = array('message'=>'Data Already Exist', 'rescode'=>404);
  }
  echo json_encode($response);
  exit();
  wp_die();
}

add_action('wp_ajax_wqedit_entry', 'wqedit_entry_callback_function');
add_action('wp_ajax_nopriv_wqedit_entry', 'wqedit_entry_callback_function');

function wqedit_entry_callback_function() {
  global $wpdb;
  $wpdb->get_row( "SELECT * FROM `prefix_rul_team` WHERE `title` = '".$_POST['wqtitle']."' AND `designation` = '".$_POST['wqdesignation']."' AND `empid` = '".$_POST['wqempid']."'AND 
  `email` = '".$_POST['wqemail']."' AND `id`!='".$_POST['wqentryid']."' ORDER BY `id` DESC" );
  if($wpdb->num_rows < 1) {
    $wpdb->update( "prefix_rul_team", array(
      "title" => $_POST['wqtitle'],
      "designation" => $_POST['wqdesignation'],
      "empid" => $_POST['wqempid'],
      "email" => $_POST['wqemail'],
      "updated_at" => time()
    ), array('id' => $_POST['wqentryid']) );

    $response = array('message'=>'Data Updated Successfully', 'rescode'=>200);
  } else {
    $response = array('message'=>'Data Already Exist', 'rescode'=>404);
  }
  echo json_encode($response);
  exit();
  wp_die();
}



