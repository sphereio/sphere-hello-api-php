#!/bin/bash

cat > "config.php" << EOF
<?php
  \$client_id = '$CLIENT_ID';
  \$client_secret = '$CLIENT_SECRET';
  \$project_key = '$PROJECT_KEY';
?>
EOF