<?php
    @include'header.php';
?>
<script src="attendanceScript.js"></script>
<!-- <link href="assets/bootstrap2-2/css/bootstrap-responsive.css" rel="stylesheet"> -->
<link rel="stylesheet" href="css/dropdown.css">
<!-- <link rel="stylesheet" href="css/style1.css"> -->
<div class='jumbotron'>
  <br>
  <center><h2><u>Food Schedule</u></h2></center>
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
  <a href="pg_food.php" name="table_att" onclick='show();'>OK</a>
  <br>
</div>

<div class="container">
    <div class="row"  style="margin-top: 50px;">
    <div class="col-md-12 text-center">
              <div class="outer-form">
        <table class="table-striped table table-bordered vertical" id="center">
              <thead style="color: white; font-weight: normal; background-color: rgb(241, 146, 178);" >
                <tr>
                  <th  class="head">Day</th>
                  <th  class="head">Lunch</th>
                  <th  class="head">Snacks</th>
                </tr>
              </thead>

              <tbody style="border:1px solid transparent; background-color:#d6fcf0; color:#A1A6AB; text-align: left;">
                <tr>
                  <td style="padding: 14px;">Sunday</td>
                  <td>Rice, daal, seasonal vegetables and achar</td>
                  <td>Kheer and fried potato</td>
                </tr>
                

                <tr>
                  <td style="padding: 14px;">Monday</td>
                  <td>Rice, daal, kwati and achar</td>
                  <td>Biscuit, milk and fruits</td>
                </tr>

                <tr>
                  <td style="padding: 14px;">Tuesday</td>
                  <td>Rice, daal, seasonal vegetables and achar</td>
                  <td>Noodles with vegetables</td>
                </tr>

                <tr>
                  <td style="padding: 14px;">Wednesday</td>
                  <td>Rice, daal, chicken/paneer/mushroom and salad</td>
                  <td>Bread,milk nd seasonal fruits</td>
                </tr>

                <tr>
                  <td style="padding: 14px;">Thursday</td>
                  <td>Rice, daal, rajma and papad</td>
                  <td>Porridge and milk</td>
                </tr>

                <tr>
                  <td style="padding: 14px;">Friday</td>
                  <td>Rice, daal, seasonal vegetables and achar</td>
                  <td>Haluwa and milk</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
  </div>
</div>

<?php
    @include'footer.php';
?>