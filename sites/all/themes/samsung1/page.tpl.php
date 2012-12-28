<?php
if (isset($node)) {
    switch ($node->type) {
        case "page":
            include 'tpl_page.php';
            break;
        case "webform":
            include 'tpl_form.php';
            break;
        default:
            include 'tpl_page.php';
    }
} else {
    include 'tpl_system.php';
}
?>