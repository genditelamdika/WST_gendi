<?php
  include_once "Database.php";

  $query = $mysqli->query("SELECT * FROM table_chat ORDER BY id DESC");

  while( $data = $query->fetch_array() ){
?>
<div id="chat_data">
    <span><?php echo $data['nama']; ?></span>:
    <span><?php echo $data['isi']; ?></span>
    <span><?php echo $data['tgl']; ?></span>
    <hr>
</div>
<?php
  }
?>