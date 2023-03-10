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

<div class="container">
    <div class="row"  style="margin-top: 50px;">
    <div class="col-md-12 text-center">
              <div class="outer-form">
        <table class="table-striped table table-bordered vertical" id="center">
              <thead style="color: white; font-weight: normal; background-color: rgb(241, 146, 178);" >
                <tr>
                  <th  class="head">S.No.</th>
                  <th  class="head">Name</th>
                  <th  class="head">Lunch</th>
                  <th  class="head">Snacks</th>
                </tr>
              </thead>

              <tbody style="border:1px solid transparent; background-color:#d6fcf0; color:#A1A6AB; text-align: left;">
                <tr>
                  <td style="padding: 14px;">01</td>
                  <td>Aadit</td>
                  <td>
                  <input type="checkbox" checked>Ate well!
                   <input type="checkbox" >Ate some!
                  </td>
                  <td>
                  <input type="checkbox" checked>Ate well!
                   <input type="checkbox" >Ate some!
                  </td>
                </tr>
                

                <tr>
                  <td style="padding: 14px;">02</td>
                  <td>Aakrit</td>
                  <td>
                  <input type="checkbox" checked>Ate well!
                   <input type="checkbox" >Ate some!
                  </td>
                  <td>
                  <input type="checkbox" checked>Ate well!
                   <input type="checkbox" >Ate some!
                  </td>
                </tr>

                <tr>
                  <td style="padding: 14px;">03</td>
                  <td>Abhi</td>
                  <td>
                  <input type="checkbox" checked>Ate well!
                   <input type="checkbox" >Ate some!
                  </td> 
                  <td>
                  <input type="checkbox" checked>Ate well!
                   <input type="checkbox" >Ate some!
                  </td>
                </tr>

                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>Aarohan</td>
                  <td>
                  <input type="checkbox" checked>Ate well!
                   <input type="checkbox" >Ate some!
                  </td>
                  <td>
                  <input type="checkbox" checked>Ate well!
                   <input type="checkbox" >Ate some!
                  </td>
                </tr>

                <tr>
                  <td style="padding: 14px;">05</td>
                  <td>Sarah</td>
                  <td>
                  <input type="checkbox" checked>Ate well!
                   <input type="checkbox" >Ate some!
                  </td>
                  <td>
                  <input type="checkbox" checked>Ate well!
                   <input type="checkbox" >Ate some!
                  </td>
                </tr>

                <tr>
                  <td style="padding: 14px;">06</td>
                  <td>Ishaan</td>
                  <td>
                  <input type="checkbox" checked>Ate well!
                   <input type="checkbox" >Ate some!
                  </td>
                  <td>
                   <!-- <label class="switch"> -->
                   <input type="checkbox" checked>Ate well!
                   <input type="checkbox" >Ate some!
                   <!-- <span class="slider round"></span> -->
                   <!-- </label> -->
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
  </div>
</div>
<button class="submit" onClick="alert('Food Recorded!')">Submit</button>
</div>
<?php
  @include'footer.php';
?>