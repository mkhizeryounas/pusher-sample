<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'ap2',
    'encrypted' => true
  );
  $pusher = new Pusher\Pusher(
    '3a2bd43d6c2974573b4b',
    'a3c27c6c0327dde1ea55',
    '569253',
    $options
  );

  $data['message'] = 'Custom notification here';
  $pusher->trigger('channel_test_user_hash', 'notify', $data);
?>