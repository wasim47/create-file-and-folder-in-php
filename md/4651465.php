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



$src = '/full/path/to/src'; // or relative path if so desired 
$dst = '/full/path/to/dst'; // or relative path if so desired
$command = 'cp -a ' . $src . ' ' .$dst;
$shell_result_output = shell_exec(escapeshellcmd($command));
echo $shell_result_output;
?>