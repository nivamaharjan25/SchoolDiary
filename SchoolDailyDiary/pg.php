<div style="font-size: 1em;">
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<link href="assets/bootstrap2-2/css/bootstrap-responsive.css" rel="stylesheet">

<!-- <link rel="stylesheet" href="css/style1.css"> -->
<script src="attendanceScript.js"></script>
<link rel="stylesheet" href="css/dropdown.css">

<?php
    @include 'header.php';
?>
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
<div class="container">
    <div class="row"  style="margin-top: 50px;">
    <div class="col-md-12 text-center">
              <div class="outer-form">
        <table class="table-striped table table-bordered vertical" id="center">
              <thead style="color: white; font-weight: normal; background-color: rgb(241, 146, 178);" >
                <tr>
                  <th  class="head">S.No.</th>
                  <th  class="head">Name</th>
                  <th  class="head">Grade</th>
                  <th  class="head">Section</th>
                  <th  class="head">Status</th>
                </tr>
              </thead>

              <tbody style="border:1px solid transparent; background-color:#d6fcf0; color:#A1A6AB; text-align: left;">
                <tr>
                  <td style="padding: 14px;">01</td>
                  <td>Aadit</td>
                  <td>P.G</td>
                  <td>A</td>
                  <td>
                   <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
                   </label>
                  </td>
                </tr>
                

                <tr>
                  <td style="padding: 14px;">02</td>
                  <td>Aakrit</td>
                  <td>P.G</td>
                  <td>A</td>
                  <td>
                   <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
                   </label>
                  </td>
                </tr>

                <tr>
                  <td style="padding: 14px;">03</td>
                  <td>Abhi</td>
                  <td>P.G</td>
                  <td>A</td> 
                  <td>
                   <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
                   </label>
                  </td>
                </tr>

                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>Aarohan</td>
                  <td>P.G</td>
                  <td>A</td>
                  <td>
                   <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
                   </label>
                  </td>
                </tr>

                <tr>
                  <td style="padding: 14px;">05</td>
                  <td>Sarah</td>
                  <td>P.G</td>
                  <td>A</td>
                  <td>
                   <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
                   </label>
                  </td>
                </tr>

                <tr>
                  <td style="padding: 14px;">06</td>
                  <td>Ishaan</td>
                  <td>P.G</td>
                  <td>A</td>
                  <td>
                   <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
                   </label>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
  </div>
</div>
<button class="submit" onClick="alert('Attendance Recorded!')">Submit</button>
</div>
<?php
  @include'footer.php';
?>