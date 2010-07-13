<?php
 /**
  * Variables:
  *  - $sid:       A session ID string.
  *  - $username:  A themed username.
  *  - $hostname:  A hostname (or IP address) string.
  *  - $timestamp: A unix timestamp.
  *  - $session:   A keyed array containing session data.
  */
?>

<ul>
<li><?php print t('User'); ?>: <?php print $username; ?></li>
<li><?php print t('Hostname'); ?>: <?php print $hostname; ?></li>
<li><?php print t('Timestamp'); ?>: <?php print format_date($timestamp, 'custom', 'D j M G:i:s'); ?></li>
</ul>

<?php
  if (empty($session)):
    print '<p>' . t('This session contains no variables.') . '</p>';
  else:
    print theme('stickybeak-session', $sid, $session);
  endif;
?>
