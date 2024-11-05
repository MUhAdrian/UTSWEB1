<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'home':
            include "includes/home.php";
            break;
        case 'about':
            include "includes/about.php";
            break;
        case 'contact':
            include "includes/contact.php";
            break;
        case 'form':
            include "includes/form.php";
            break;
        case 'datatables':
            include "includes/datatables.php";
            break;
        case 'tables':
            include "includes/tables.php";
            break;



    }

} else {
    include "home.php";
}

