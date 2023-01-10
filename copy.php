<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Pdf</title>


</head>
<body>
    <p style="text-align: center;">IEEE JOURNAL</p>

	 <div class="head">
	 <h1 style="text-align:center;" ><?=$user['project_title']?></h1>
	 <h3 style="text-align:center;">Authors: <?=$user['author_name_1']?> <?=$user['author_name_2']?>  <?=$user['author_name_3']?> <?=$user['author_name_4']?> </h3>
	 <h4  style="text-align:center;"><?=$user['college_name']?> </h4>
	 	<h5  style="text-align:center;">Student Name:  <?=$user['student_name']?> </h5>
	 </div>

	<hr>
	 <div class="container">
	 	<h4>Abstract :</h4>
        <p style="text-align:justify;"><?=$user['abstract']?></p>
        <p  style="font-style: italic;">Keywords :<?=$user['keyword']?> </p>
        <h4>Introduction :</h4>
        <p style="text-align:justify;"><?=$user['introduction']?></p>
        <h4>Exsisting System :</h4>
        <p style="text-align:justify;"><?=$user['exsisting_system']?></p>
        <h4>Praposed System :</h4>
        <p style="text-align:justify;"><?=$user['parposed_system']?></p>
        <h4>Figure</h4>
        <img src="ieee/Rapid/img/1.png"  alt="">
          <h4>Review Of Related Work :</h4>
        <p style="text-align:justify;"><?=$user['review_of_related_work']?></p>
         <h4>Future Scope:</h4>
        <p style="text-align:justify;"><?=$user['future_scope']?></p>
         <h4>Acknowledgment:</h4>
        <p style="text-align:justify;"><?=$user['acknowledgment']?></p>
          <h4>Conclusion:</h4>
        <p style="text-align:justify;"><?=$user['conclusion']?></p>
         <h4>References:</h4>
         <ol>
        <li style="text-align:justify;"><?=$user['rfer_1']?></li>
        <li style="text-align:justify;"><?=$user['rfer_2']?></li>
        <li style="text-align:justify;"><?=$user['rfer_3']?></li>
        <li style="text-align:justify;"><?=$user['rfer_4']?></li>
        <li style="text-align:justify;"><?=$user['rfer_5']?></li>
        <li style="text-align:justify;"><?=$user['rfer_6']?></li>

        
       </ol>
	 </div>
     
	
    
	
</body>
</html>