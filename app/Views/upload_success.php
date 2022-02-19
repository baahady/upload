<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>
<ul>
    <li>name: <?php echo $name; ?></li>
    <li>baseName: <?php echo $baseName; ?></li>
    <li>size: <?php echo $size; ?></li>
    <li>type: <?php echo $type; ?></li>
</ul>
<p><?= anchor('/', 'Upload Another File!') ?></p>

</body>
</html>