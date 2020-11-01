<?php
if(isset($_POST['submit'])){
$solution=$_POST["question-4-answers"];
if($solution== "B"){
header('location:quiz5.php');
}else{
echo "you lost" ."<br>";
echo "Result : 3/5";
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
               
                    <h3 style="color:yellow;">Localhost IP is..</h3>
                   
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) 192.168.0.1</label>
                    </div>
                   
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) 127.0.0.0</label>
                    </div>
                   
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) 1080:80</label>
                    </div>
                   
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Any Other</label>
                    </div>
               
               
              <button type="submit"  name="submit" >submit</button>

                </li>
                            </ol>
                </form>
                </div>
        </div>
</body>
</html>
