<?php
require_once 'config.php';
$stmt= $pdo->prepare('select * from  topics where subject_id=?');
$stmt->execute([$_GET['subject_id']]);
$topics= $stmt->fetchAll(PDO::FETCH_ASSOC);
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
        <form action="questions.php" method="GET">
            <div class="col-6">
                <select required name="topic_id" class="form-select form-select-sm"
                    aria-label=".form-select-sm example">
                    <option selected value="">Select your topic</option>
                    <?php
                foreach($topics as $topic){
                  echo '<option value=' .$topic['id']. '>' .$topic['topic_name']. '</option>';
                }
                ?>
                </select>
            </div>
            <div class="col-6">
                <label for="">No of Question</label>
                <input type="number" min="10" required name="number_of_questions">
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary">Start Test</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>