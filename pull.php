<?php
// Use in the “Post-Receive URLs” section of your GitHub repo.
// input the application's home folder
$folder = "/";
if ( $_POST['payload'] ) {
   shell_exec("cd ~/$location && git pull");
}
?>