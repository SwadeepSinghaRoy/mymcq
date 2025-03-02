<?php
require_once 'config.php';
$subject_id= $_GET['topic_id'];
$number_of_questions= $_GET['number_of_questions'];
$stmt = $pdo->prepare('select * from questions where topic_id= ? order by rand() limit ?');
$stmt->execute([$subject_id,$number_of_questions]);
$questions=$stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($questions);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=., initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    body{
      height: 100%;
      width: 100vw;
      background-color:red;
      
    }
    .container{
      height: 100vh;
      width: 100vw;
      background-color: yellow;
      display: flex;
      flex-direction: row;
    }
    .questions{
      height: 100vh;
      width: 90vw;
      background-color:blue; 
     
      
    }
    .content{
      height: 100%;
      width: 100%;
      background-color: white;
      overflow: scroll;
      /* opacity: 0.5; */
    }
    .goto-section{
      height: 100vh;
      width: 10vw;
      background-color: green;
      
      
    }
    .QNO{
      background-color: violet;
      margin-top: 0.5%;
      display: flex;
      alogn-item: center;
      justify-content:center;

    }
    .single{
      background-color: gray;
      margin:0.5%;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="questions">
      <div class="content">
      <h4>Your Questions are:</h4>
                <form action="result.php">
                    <?php
                      $no=0;
                      foreach($questions as $question){
                        echo '<div class="single-'.++$no.'">';
                        echo '<h4>'.$no.'.'.$question['question'].'</h4>';
                        $arr=array(1,2,3,4);
                        shuffle($arr);
                        foreach($arr as $i){
                          $opt='option'.$i;
                          echo '<div class="form-check">';
                          echo '<input type="radio" class="form-check-input" value="'.$question['id'].'_'.$i.'" name="id_'.$question['id'].'" id="flexRadioDefault1">';
                          echo '<label for="flexRadioDefault1"class="form-check-label">';
                          print ($question[$opt]);
                          echo '</label>';
                          echo '</div>';
                          
                        }
                        echo '</div>';
                      }
                      
                      ?>
                    <div class="col-6">
                        <button type="submit" class=btn btn-priimary>submit your test</button>
                    </div>
                </form>


      </div>
    </div>
    <div class="goto-section">
      <h4>question no</h4>
      <?php
      for($i=1;$i<=$number_of_questions;$i++){
        echo '<div class="QNO" onClick="clicked('.$i.')">';
        echo $i;
        echo '</div>';

      }
      ?>
    </div>

  </div>
  <script>
    function clicked(i) {
      alert(`${i}`);
      window.location.hash=  `single-${i}`; 

    }
  </script>
</body>
</html>
