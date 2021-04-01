<?php
  $mysqli = new mysqli('db', 'dbuser', 't0ps3kr1t', 'demodb');

  if ($_POST['message']) {
    // TODO: sanitise content before inserting!
    $stmt = $mysqli->prepare("INSERT INTO messages (message) VALUES (?)");
    $stmt->bind_param("s", $_POST['message']);
    $stmt->execute();
    $stmt->close();
  }
?>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
  <h1>Messages</h1>
  <ul>
    <?php
      $result = $mysqli->query('SELECT * FROM messages');
      foreach ($result as $row) {
        echo "<li>" . htmlspecialchars($row['message']) . "</li>";
      }
    ?>
  </ul>
  <p>
    <form action="/" method="post">
      <input type="text" name="message" />
      <input type="submit" value="Add message" />
    </form>
  </p>
 </body>
</html>

<?php
  $mysqli->close();
?>
