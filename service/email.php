<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=d321aem4kva19e host=ec2-54-225-112-205.compute-1.amazonaws.com port=5432 user=egauidjrujdzuf password=4fzndpfmO_mv_rGp1RHqj8j6ub sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
   echo "Database connection error.";
   exit;
}

$email = $_GET["email"];
pg_query($db, "INSERT INTO temp.emails (address) VALUES ('$email')";
?>