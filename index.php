

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
		<div class="row mt-5">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			
				<?php
					/*We know

					A+ = 80-100;
					A  = 70-79;
					A- = 60-69;
					B  = 50-59;
					C  = 40-49;
					D  = 33-39;
					F =  1-32;
					*/

					//given that,

					$subjectA = 75;
					$subjectB = 80;
					$subjectC = 65;
					$subjectD = 90;

					$total_mark   = $subjectA + $subjectB + $subjectC + $subjectD;
					$average_mark = $total_mark/4;

					if ($average_mark >= 80 && $average_mark <= 100){
						echo "You got A+";
					}elseif($average_mark >= 70 && $average_mark <= 79){
						echo "You got A";
					}elseif($average_mark >= 60 && $average_mark <= 69){
						echo "You got A-";
					}elseif($average_mark >= 50 && $average_mark <= 59){
						echo "You got B";
					}elseif($average_mark >= 40 && $average_mark <= 49){
						echo "You got C";
					}elseif($average_mark >= 33 && $average_mark <= 99){
						echo "You got D";
					}else{
						echo "You are Fail";
					}
				?>
				
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
    
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
