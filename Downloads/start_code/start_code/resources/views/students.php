<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <p>List of students:</p>
    <ul>
        <?php foreach($students as $student):?>
            <li><?php echo $student->name . " in class " . $student->class . " is " . $student->age;?></li>
        <?php endforeach;?>
    </ul>
</body>

</html>