<?php

$files = new \FilesystemIterator(__DIR__ . '/functions', \FilesystemIterator::SKIP_DOTS);
foreach ( $files as $file ) {
    ! $files->isDir() and include $files->getRealPath();
}

?>
