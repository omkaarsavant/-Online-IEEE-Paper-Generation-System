<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Pdf</title>
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float:left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

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


<div class="row">
  <div class="column" >
    <h4>Abstract</h4>
    <p style="text-align: justify;font-style: italic;"><b><?=$user['abstract']?></b> <br><span style="font-weight:bold;font-style: italic; text-align: justify;">keywords : <?=$user['keyword']?></span></p>
  </div>
  <div class="column" >
    <h4>Proposed system</h4>
    <p style="text-align: justify;"><?=$user['parposed_system']?></p>
  </div>
</div>  

<div class="row">
  <div class="column" >
    <h4>Introdcution</h4>
    <p style="text-align: justify;"><?=$user['introduction']?></p>
  </div>
  <div class="column" >
    <h4>Exsisting system</h4>
    <p style="text-align: justify;"><?=$user['exsisting_system']?></p>
    <br>
    <br>
    <br>
  </div>
</div>  
<div class="row">
  <div class="column" >
    <br>
    <h4>figures</h4>
    <img src="assets/img/download.jpg" height="250" width="250" style="margin-left:50px;">
  </div>
  <div class="column" >
    <h4>Review of related work</h4>
    <p style="text-align: justify;"><?=$user['review_of_related_work']?></p>
  </div>
</div> 
<div class="row">
  <div class="column" >
    <h4>Future Scope</h4>
    <p style="text-align: justify;"><?=$user['future_scope']?></p>
  </div>
  <div class="column" >
    <h4>Conclusion</h4>
    <p style="text-align: justify;"><?=$user['conclusion']?></p>
  </div>
</div>  
<div class="row" style="margin-top:-60px;">
  <div class="column" >
    <h4>References</h4>
    <p style="text-align: justify;"><ol><li style="text-align: justify;"><?=$user['rfer_1']?></li><li  style="text-align: justify;" ><?=$user['rfer_2']?></li><li  style="text-align: justify;"><?=$user['rfer_3']?></li><li style="text-align: justify;" ><?=$user['rfer_4']?></li><li style="text-align: justify;"><?=$user['rfer_5']?></li></ol>





  </div>
 
</div>  

<br><br> 
  
  
</body>
</html>