<?php
class User
{

  public function getUserList()
  {
    $dbconn = new DatabaseConnection('localhost','user','password');
    $users = $dbconn->query('select name from user');

    return sort($users);
  }
}

?>
