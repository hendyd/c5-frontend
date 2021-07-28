<?php 

class AutoCache {
    public function cache($filePath): string
    {
        $path = $_SERVER['DOCUMENT_ROOT'] . $filePath;
        if (file_exists($path)) {
            return $filePath . '?' . filemtime($path);
        } else {
            return $filePath;
        }
    }
}
