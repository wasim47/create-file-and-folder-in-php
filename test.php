<?php
// Multiple Folder
/*$pathToFile = 'test1/test2/test3/test4/test.txt';
$fileName = basename($pathToFile);
$folders = explode('/', str_replace('/' . $fileName, '', $pathToFile));

$currentFolder = '';
foreach ($folders as $folder) {
    $currentFolder .= $folder . DIRECTORY_SEPARATOR;
    if (!file_exists($currentFolder)) {
        mkdir($currentFolder, 0755);
    }
}
file_put_contents($pathToFile, 'test');*/


////// Single Folder and File//////////////
/*$foldername 	= 'wasim/test.php';
$existingfile   = 'wasim/test.php';
$filename = basename($foldername);
$folders = explode('/', str_replace('/'.$filename, '',$foldername));
file_get_contents($existingfile );*/


xcopy('wasim','md','');
function xcopy($source, $dest, $permissions = 0755)
{
    // Check for symlinks
    if (is_link($source)) {
        return symlink(readlink($source), $dest);
    }

    // Simple copy for a file
    if (is_file($source)) {
        return copy($source, $dest);
    }

    // Make destination directory
    if (!is_dir($dest)) {
        mkdir($dest, $permissions);
    }

    // Loop through the folder
    $dir = dir($source);
    while (false !== $entry = $dir->read()) {
        // Skip pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Deep copy directories
        xcopy("$source/$entry", "$dest/$entry", $permissions);
    }

    // Clean up
    $dir->close();
    return true;
}
?>