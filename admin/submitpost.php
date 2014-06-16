<?php

  $mysqli = new mysqli('localhost','parkjh','password','testcms');
  if(!$mysqli) {exit(mysqli_connect_error ());}
  
  $hometbl = array(
      'title'=>'string',
      'body'=>'string',
      'links'=>'string',
      'images'=>'string');
    $conttbl = array(
      'title'=>'string',
      'body'=>'string',
      'links'=>'string');
    $newstbl = array(
      'title'=>'string',
      'date'=>'string',
      'body'=>'string',
      'links'=>'string',
      'images'=>'string');
  
  class adminSetup{
    
    private $tables = array('homepage','content','news');
    private $stmt = NULL;
    
    function __construct($mysqli) {
      // create a query statement resource
      $stmt = $mysqli->prepare("SELECT * FROM ? LIMIT 0, 4");
    }
    
    
    
    protected function fetchData($tableNO){
      if ( $stmt ) {
        $stmt->bind_param( "s", $tables[$tableNO] );
        $stmt->execute();
        $stmt->bind_result( $intelligence );
        if ($stmt->fetch()) {
          
        }
      }
    }
    
  }
  
  /**
  function secureInput($expected)
  {
    foreach ( $expected AS $key=>$type ) 
    {
      if ( empty( $_GET[ $key ] ) ) {
        ${$key} = NULL;
        continue;
      }
      switch ( $type ) {
        case 'string' :
          if ( is_string( $_GET[ $key ] ) && strlen( $_GET[ $key ] ) < 256 ) {
            ${$key} = "'".mysql_real_escape_string($_GET[ $key ])."'";
          }
        break;
        case 'int' :
          if ( is_int( $_GET[ $key ] ) ) {
            ${$key} = $_GET[ $key ];
          }
        break;
        case 'filename' :
          // limit filenames to 64 characters
          if ( is_string( $_GET[ $key ] ) && strlen( $_GET[ $key ] ) < 64 ) {
          // escape any non-ASCII
            ${$key} = str_replace( '%', '_', rawurlencode( $_GET[ $key ] ) );
            // disallow double dots
            if ( strpos( ${$key}, '..' ) === TRUE ) {
              ${$key} = NULL;
            }
          }
        break;
      }
      if ( !isset( ${$key} ) ) {
        ${$key} = NULL;
      }
    }
  }
  **/
  
?>