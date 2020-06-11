<?php
  
  require_once dirname(__FILE__) . '/../../index.php';
  
  $config->set('TEST-2732047088252149-080516-1f121aa69d78d4e8a526ea8bfb67783c-45061754', 'TEST-2732047088252149-080516-1f121aa69d78d4e8a526ea8bfb67783c-45061754');

  # Create a Payment
  require_once dirname(__FILE__) . '/create.php';

  # Cancel the previous payment, only works from a pending or in_process status
  $payment->status = "canceled";
  $payment->update();
  
  echo $payment->status;
  echo $payment->status_detail;
  
?>
