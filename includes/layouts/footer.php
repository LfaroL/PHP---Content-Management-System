    <div id="footer">Copyright 20xx, Widget Corp</div>

	</body>
</html>


<?php
  // 5. Close database connection
  // In case connection to database never occurred
  if (isset($connection)) {
    mysqli_close($connection);      
  }
?>