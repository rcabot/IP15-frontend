<?php
$pageName = basename($_SERVER['PHP_SELF']);
$pageEnd = '</ul>
        </div><!-- end #navbarexample -->';
switch ($pageName) {
    case "rules.php":
        $extraItems='<div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="./mainmenu.php">Main Menu</a></li>
            <li><a href="./orders.php">Orders Hub</a></li>
            <li><a href="./rules.php">Rules</a></li>
              <li><a href="#collapseOne" class="collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseOne"><span class="glyphicon glyphicon-chevron-right"></span> Automation Rules</a></li>
              <li><a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordion"  aria-expanded="false" aria-controls="collapseTwo"><span class="glyphicon glyphicon-chevron-right"></span> Message Formatting Rules</a></li>
              <li><a href="#collapseThree" class="collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseThree"><span class="glyphicon glyphicon-chevron-right"></span> Notification Rules</a></li>
              <li><a href="./queue.php">Order Queue</a></li>';
        break;
    case "queue.php":
        $extraItems='<div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="./mainmenu.php">Main Menu</a></li>
            <li><a href="./orders.php">Orders Hub</a></li>
            <li><a href="./rules.php">Rules</a></li>
            <li><a href="./queue.php">Order Queue</a></li>';
        break;
    default:
        $extraItems='<div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="./mainmenu.php">Main Menu</a></li>
            <li><a href="./orders.php">Orders Hub</a></li>
            <li><a href="./rules.php">Rules</a></li>
            <li><a href="./queue.php">Order Queue</a></li>';
        break;
}
echo $extraItems,$pageEnd;

?>