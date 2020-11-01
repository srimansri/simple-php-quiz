<?php
if(isset($_POST['submit'])){
$solution=$_POST["question-5-answers"];
if($solution== "C"){
header('location:result.php');
}else{
echo "you lost" ."<br>";
echo "Result : 4/5";
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
               
                     <h3 style="color:yellow;"> 'Do no evil' is tag line of ......</h3>
                   
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Microsoft</label>
                    </div>
                   
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Yahoo</label>
                    </div>
                   
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Google</label>
                    </div>
                   
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) All Above These</label>
                    </div>
               
               
              <button type="submit"  name="submit" >submit</button>

                </li>
                            </ol>
                </form>
                </div>
        </div>
</body>
</html>
