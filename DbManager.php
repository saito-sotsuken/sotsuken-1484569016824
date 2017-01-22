<?php
function getDb() {
  $dsn = 'mysql:dbname=anctsaito_sotsuken; host=mysql1.php.xdomain.ne.jp';
  $usr = 'anctsaito_root';
  $passwd = 'kuren0610';

  try {
    $db = new PDO($dsn, $usr, $passwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec('SET NAMES utf8');
  } catch (PDOException $e) {
    die("接続エラー：{$e->getMessage()}");
  }
  return $db;
}