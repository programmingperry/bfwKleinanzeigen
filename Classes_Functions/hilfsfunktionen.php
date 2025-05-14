<?php 

function error($error = null) {
    if ($error) {
        echo '<div class="alert alert-danger">' . $error . '</div>';
    } 
}