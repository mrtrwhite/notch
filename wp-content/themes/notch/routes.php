<?php

Routes::map('/foo', function() {
    Routes::load('controllers/bar.php');
});
