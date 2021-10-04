<?php  $conn = mysqli_connect("localhost", "root", "", "survey"); ?>
<?php  $result = mysqli_query($conn, "SELECT * FROM questions"); ?>
<?php  $questionnaireSet = mysqli_fetch_all($result, MYSQLI_ASSOC) ?>
<!-- <?php  print_r($questionnaireSet) ?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>

    <style>
    </style>

</head>

<body>
    <table>
        <ol>
            <?php foreach ($questionnaireSet as $questionnaire) { ?>
                <tr>
                    <td>
                        <li>
                            <?php echo $questionnaire['question'] ?>
                        </li>
                    </td>
                </tr>
            <?php } ?>

        </ol>
    </table>
</body>

</html>