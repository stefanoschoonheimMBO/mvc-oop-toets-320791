<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pound-for-Pound</title>
</head>
<body>
    <h3><?= $data['title']; ?></h3>
    <table border="1">
        <thead>
            <th>Name</th>
            <th>Ranking</th>
            <th>Length (m)</th>
            <th>Weight (kg)</th>
            <th>Age</th>
            <th>Wins by knockout</th>
        </thead>
        <tbody>
            <tr>
                <?= $data['rows']; ?>
            </tr>
        </tbody>
    </table>

</body>
</html>