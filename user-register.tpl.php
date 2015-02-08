<?php

//###### render fields in user-register.php like this
print render($form['account']['mail']);
print render($form['account']['name']);

// print render ($form['field_firstname']);
// print render ($form['field_lastname']);

//Don't forget to add this to make the form usable


  print drupal_render($form['actions']);
  print drupal_render($form['form_build_id']);
  print drupal_render($form['form_id']);