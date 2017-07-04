<?php // exec.php
$cmd = "dir /s";   // Windows
// $cmd = "ls"; // Linux, Unix & Mac
exec(escapeshellcmd($cmd), $output, $status); //si status est zero alors tout est ok
if ($status){
echo "Exec command failed";
} else {
    echo "<pre>";
    foreach ($output as $line) echo htmlspecialchars("$line\n");
    echo "</pre>";
}
