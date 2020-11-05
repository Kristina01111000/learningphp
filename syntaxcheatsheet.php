<?php
  // <?php        ?> side bars
  /* multiline comment -> can be used to comment out parts of a line
  // single line comment
  # single line comment
  */  

  # key words not case sensitive
  ECHO "Hello World";
  echo "Hello World";
  EcHo "Hello World";

  # variables are case sensitive
  $var1 = "test";
  echo $var1; # works
  echo $Var1; # does not work
  echo $VAR1; # does not work

  # varibles are assigned when you first use them
  $var2 = "test" // need '' or "" for text
  $var3 = 5 // numbers do not need quotations

  /*Variable name rules:
    - starts with $
    - then letter or _
    - can only contain letters, numbers, and underscore
    - case sensitive ($test and $TEST are different variables)
  */


?>
