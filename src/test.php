<?php
require_once "../vendor/autoload.php";

/**
 *
 */
function main() {
  printf("main()");

  $client = new Google_Client();

  var_dump($client);

}


// execute
main();

