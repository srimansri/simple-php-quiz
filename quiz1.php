<?php
if(isset($_POST['submit'])){
$solution=$_POST["question-1-answers"];
if($solution== "A"){
header('location:quiz2.php');
}else{
echo "you lost" ."<br>";
echo "Result : 0/5";
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
                    <h3 style="color:yellow;">PHP is a....</h3>
                    <div>
 <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Server Side Script</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Programming Language</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Markup Language</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) None Of Above These</label>
                    </div>
              <button type="submit"  name="submit" >submit</button>
               </li>
            </ol>
                </form>
                </div>
        </div>
</body>
</html>