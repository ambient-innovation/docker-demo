<?
error_reporting(0);
$db = new mysqli($_ENV['DB_HOST'],$_ENV['DB_USER'],$_ENV['DB_PASSWORD'],$_ENV['DB_NAME']); # Connect to database
$db->query('CREATE TABLE IF NOT EXISTS visits (date DATE);'); # Init table
$db->query('INSERT INTO visits (date) VALUES (NOW());'); # Save new visit
$result = $db->query('SELECT COUNT(*) AS count FROM visits;'); # Select previous vitits
if ($result) { 
    $row = $result->fetch_object();
    $count = $row->count;
    $result->close();
} else {
    $count = 0;
}
$db->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>This is a docker example website</title>
    <style>
        body {
            width: 35em;
            margin: 0 auto;
            font-family: Tahoma, Verdana, Arial, sans-serif;
        }
    </style>
</head>
<body>
<h1>Nicolas Cage loves Docker ;)</h1>
<img src="https://www.placecage.com/403/400" />
<p>We have <?php echo $count; ?> visitors.</p>
<p>Wenn ihr das seht, habt ihr den Workshop erfolgreich überstanden ;)</p>
</body>
</html>
