<?php
if(isset($_POST['submit'])){
$solution=$_POST["question-3-answers"];
if($solution== "B"){
header('location:quiz4.php');
}else{
echo "you lost" ."<br>";
echo "Result : 2/5";
}
}
?>
<!DOCTYPE html>
<head>
        <meta charset=UTF-8" />
        <title> QUIZ </title>
        <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
        <div id="page-wrap">
        <div class="boxed">
                <header>
                <h1>Simple Quiz </h1>
                </header>
                <form action="" method="post" id="quiz">
            <ol>
                <li>
               
                    <h3 style="color:yellow;">Who Invented Java?</h3>
                   
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Shankunthala Devi</label>
                    </div>
                   
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B)  James A Gosling</label>
                    </div>
                   
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) James T Russel</label>
                    </div>
                   
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Kristen Josepf</label>
                    </div>
               
              <button type="submit"  name="submit" >submit</button>

                </li>
                            </ol>
                </form>
                </div>
        </div>
</body>
</html>