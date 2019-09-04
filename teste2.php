<html>
 <head>
  <title>teste</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
 </head>

 <body>

  <div class="container">
   <div class="col-md-4" style="margin-left:200px;">
    <form method="post" id="multiple_select_form">
     
     <select name="framework" id="framework" class="form-control selectpicker" data-live-search="true" multiple>
      <option value="Laravel">Laravel</option>
      <option value="Symfony">Symfony</option>
      <option value="Codeigniter">Codeigniter</option>
      <option value="CakePHP">CakePHP</option>
      <option value="Zend">Zend</option>
      <option value="Yii">Yii</option>
      <option value="Slim">Slim</option>
     </select>

     <input type="hidden" name="hidden_framework" id="hidden_framework" />
     <input type="submit" name="submit" class="btn btn-info" value="Submit" />
    </form>
    <br />
    
   </div>
  </div>
 </body>
</html>

<script>

 $('#multiple_select_form').on('submit', function(event){

  if($('#framework').val() == '')
  {
  
   alert("Please select framework");
   return false;
  }
 });

</script>