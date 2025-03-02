<?php
require_once 'config.php';
$stmt = $pdo->prepare('select * from subjects');
$stmt->execute();
$subjects = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r ($subjects);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="select_topics.php" method="GET">
            <div class="col-6">
                <select required name="subject_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected value="">Select your Subject</option>
                    <?php
                    foreach($subjects as $subject){
                        echo '<option value='.$subject['id'].'>'.$subject['subject_name'].'</option>';
                    }
                    ?>
                    
                </select>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>