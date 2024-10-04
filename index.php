<?php
require_once 'maincontroller.php';

$flip = new cardcontroller();

if (isset($_GET['maart'])) {
    $page = $_GET['maart'];
//   print $page;
    if ($page == 'achter') {
        $flip->achter();
 //       print $page;
    } else {
        $flip->voor();
        print $page;
    }
}

?>
