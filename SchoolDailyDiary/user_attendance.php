<?php
    @include'user_header.php';
?>
<link rel="stylesheet" href="css/dropdown.css">
<div class='jumbotron'>
  <br>
  <center><h2><u>Attendance</u></h2></center>
  <br>
</div>

<div class="rowC">
  <div class="container my-4">
   <select class="item">
    <option disabled selected>Month</option>
    <option value="1">January</option>
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option>    
    <option value="5">May</option>
    <option value="6">June</option>    
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
   </select>
   
  </div>
  <a href="pg_att.php" name="table_att" onclick='show();'>OK</a>
  <br>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
    @include'footer.php';
?>