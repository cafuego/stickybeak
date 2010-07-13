<?php
 /**
  * $Id$
  *
  * Variables:
  *  - $sid    : A session ID string.
  *  - $session: A keyed array containing session data.
  */
?>

<?php
  print '<p>' . t('Below are listed all session variables and their contents for session @sid.', array('@sid' => $sid)) . '</p>';

  foreach ($session as $variable => $data):
    print '<h3>' . $variable . '</h3>';
    print '<pre>';
    print_r($data, TRUE);
    print '</pre>';
  endforeach;
?>
