<?php
if(isset($_POST['submit'])){
$solution=$_POST["question-2-answers"];
if($solution== "A"){
header('location:quiz3.php');
}else{
echo "you lost" ."<br>";
echo "Result : 1/5";
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
                <h3 style="color:yellow;">What is "WWW"_____</h3>


                   
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) World wide web</label>
                    </div>
                   
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Web App</label>
                    </div>
                   
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Web Server</label>
                    </div>
                   
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Other</label>
                    </div>

              <button type="submit"  name="submit" >submit</button>
               </li>
            </ol>
                </form>
                </div>
        </div>
</body>
</html>
