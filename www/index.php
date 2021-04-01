<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
  <h1>Messages</h1>
  <ul>
    <li>
      <?php echo htmlspecialchars($_POST['message']) ?>
    </li>
  </ul>
  <p>
    <form action="/" method="post">
      <input type="text" name="message" />
      <input type="submit" value="Add message" />
    </form>
  </p>
 </body>
</html>
