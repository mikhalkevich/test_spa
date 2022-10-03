<html>
<head>
    <link href="/media/main.css" rel="stylesheet" />
    <script src="/media/jquery-3.6.1.min.js"></script>
    <script src="/media/main.js"></script>
</head>
<body>
 <?php include ('views/templates/header.php')?>
 <div class="content">
     <div class="content_height">
     <?php include ('views/main.php')?>
     </div>
     <div class="content_form">
         <?php include ('views/templates/comment_form.php')?>
     </div>
     <div id="empty"></div>
     <hr />
     <div class="content_form">
         <?php
         if(isset($all)){
             if(is_array($all)){
                 foreach($all as $arr){
                     include ('views/templates/comment_one.php');
                 }
             }
         }
         ?>
     </div>
 </div>
 <?php include ('views/templates/footer.php')?>
</body>
</html>
