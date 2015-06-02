#!/bin/bash

cat > "raw/config.php" << EOF
<?php
  \$client_id = '$CLIENT_ID';
  \$client_secret = '$CLIENT_SECRET';
  \$project_key = '$PROJECT_KEY';
?>
EOF

cat > "sdk/config.php" << EOF
<?php
return [
    'client_id' => '$CLIENT_ID',
    'client_secret' => '$CLIENT_SECRET',
    'project' => '$PROJECT_KEY'
];
?>
EOF
