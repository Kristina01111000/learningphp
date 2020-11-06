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

  # loosely typed language
  # can name type in function declaration if wanted
  /* Variable scope
    global: declared outside function, can only be accessed outside function
    local: declared inside function, can only be accessed inside function
      - use global keyword to access global variable inside a function
    static: static keyword makes a local variable remain in memory, not be deleted after function runs
  */
  
  // echo vs. print
  echo $var2, $var1;  // no return value, can take multiple parameters
  echo "one","two","three";
  echo $var3 + 4;
  print $var2;        // return value = 1, only one parameter
  print "one, two, three";


  /* Data Types
    - integer   -> automatic type conversion (can cause errors when you change between numbers  and string)
    - float     -> int * float is automatically a float
    - boolean
    - array
    - object -> needs a constructor
    - null -> value null = has no value, can empty a variable by setting it to null
      $n = null; // null declaration
    - resource
  */

  # Basic String Functions
    echo strlen("Hello World");                       // 11 -> string length
    echo str_word_count("Hello World");               // 2 -> word count
    echo strrev("Hello");                             // olleH -> string reverse
    echo strpos("Hello World", "World");              // 6 -> search for world, output is the character position of match
    echo srt_replace("World", "You", "Hello World");  // Hello You -> replaces world with you

  # Basic number functions
    var_dump($var3);  // bool(true) -> returns data type of value
    # all below have var dump infront b/c they don't print the data to the screen
    is_int($var3);    // bool(true)   -> returns boolean 
    is_float($var3);  // bool(false)  -> returns boolean
    is_numeric('5');  // bool(true)   -> to check if strings have numbers
    # casting also exists 

  # Math 
  /*Expected math functions, google them if needed*/
  echo rand();        // gives random number
  echo rand(0, 100);  // gives random number between 0 and 100 inclusive
?>
