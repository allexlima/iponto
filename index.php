<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  require_once 'src/model/connect.php';

  $sql = 'SELECT * FROM i_colab;';

  print "colab_id \t";
  print "colab_name \t";
  print "colab_email \t";
  print "colab_supervisor \t\n\n";

  foreach ($pdo->query($sql) as $row) {
      print $row['colab_id'] . "\t";
      print $row['colab_name'] . "\t";
      print $row['colab_email'] . "\t";
      print $row['colab_supervisor'] . "\t";
  }

  // switch (@$_GET['pg']) {
  // 	case 'exam': include 'src/pgs/exam.php'; break;
  // 	case 'results': include 'src/pgs/results.php'; break;
  // 	default: include 'src/pgs/home.php'; break;
  // }

?>
