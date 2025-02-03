<?php
// Use in the “Post-Receive URLs” section of your GitHub repo.
// input the application's home folder
// $folder = "~/public_html/resume-builder/api";

date_default_timezone_set('America/New_York');

// echo "Running the file...\n";
file_put_contents("log.txt",date('Y-m-d H:i:s')." - Starting update...", FILE_APPEND);
if ( $_POST['payload'] ) {
   // echo "Executing the shell script...\n";
   shell_exec("cd ".__DIR__." && git pull origin");
   // shell_exec("cd $folder && git pull origin");
   // shell_exec("git pull origin");
   file_put_contents("log.txt",date('Y-m-d H:i:s')." - Shell executed...", FILE_APPEND);
}
file_put_contents("log.txt",date('Y-m-d H:i:s')." - Finished...\n", FILE_APPEND);
// echo "Finished...";
?>