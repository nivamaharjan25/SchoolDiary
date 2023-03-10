<!-- <body style="font-size: 0em;"> -->
<?php
    @include 'header.php';
?>
<!-- </body> -->
<script src="attendanceScript.js"></script>
<!-- <link href="assets/bootstrap2-2/css/bootstrap-responsive.css" rel="stylesheet"> -->
<link rel="stylesheet" href="css/dropdown.css">
<!-- <link rel="stylesheet" href="css/style1.css"> -->
<div class='jumbotron'>
  <br>
  <center><h2><u>Attendance</u></h2></center>
  <br>
</div>

<div class="rowC">
  <div class="container my-4">
   <select class="item">
    <option value="" disabled selected>Grade</option>
    <option value="1">Play Group</option>
    <option value="2">Nursery</option>
    <option value="3">L.K.G</option>
    <option value="4">U.K.G</option>
   </select>
   
  </div>
  <div class="container my-4">
    <select class="item">
      <option value="" disabled selected>Section</option>
      <option value="1">A</option>
      <option value="2">B</option>
    </select>
  </div>
  <a href="pg.php" name="table_att" onclick='show();'>OK</a>
  <br>
</div>

<!-- <div id="table_att" onclick='show()'>
  <iframe width="1000" height="500" src="pg.html"></iframe>
</div> -->
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!-- <ul class="inner">
        <li><a href="#"> P.G</a></li>
        <li><a href="#"> Nursery</a></li>
        <li><a href="#"> L.K.G</a></li>
        <li><a href="#"> U.K.G</a></li>
    </ul>
</ul> -->

<!-- TABLE --> 

<!-- <div class='container'>
<table class="table table-striped">
  <thead class='thead-dark'>
    <tr>
      <th scope="col">Rollno</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Attendance</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><button class='btn btn-info btn-lg'></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><button class='btn btn-info btn-lg'></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td><button class='btn btn-info btn-lg'></td>
    </tr>
  </tbody>
</table> -->

<?php
    @include 'footer.php';
?>
