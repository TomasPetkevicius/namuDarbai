<?php 
$line = fopen("\remote_server\share\file.txt", "rw");  
// prints a single line at a time until end of file is reached
set_time_limit(1);
while (! feof ($line)){
    $pattern = 'ZZ.ZZ.ZZ';
        if (preg_match($pattern)) {new strrev($line)};    
      $file = fopen("\remote_server2\share\file.txt");
                    fwrite($file,$line);
                    if (fwrite == false){do fwrite while fwrite == true}; 
                    fclose($file);
  } 
fclose($line); 
?> 