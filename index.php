<?php
 ?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<?php
// Instantiate a DateTime with microseconds.
$d = new DateTime();


// Output the date with microseconds.
echo $d->format('Y-m-d\TH:i:s.u'); // 2011-01-01T15:03:01.012345

?>
</body>
<html>