<?php

  $ketnoi['host']='localhost';
  $ketnoi['dbname']='baogamephp';
  $ketnoi['username']='root';
  $ketnoi['password']='';
  @mysql_connect("{$ketnoi['host']}","{$ketnoi['username']}","{$ketnoi['password']}")
    or
  die("Không thể kết nối database");

@mysql_select_db("{$ketnoi['dbname']}")
or
die("Không thể chọn database");
@mysql_query("SET NAME 'utf8'");
@mysql_set_charset('utf8');
?>