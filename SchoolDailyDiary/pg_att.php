<?php
    @include'user_header.php';
?>

<link rel="stylesheet" href="css/dropdown.css">
<div class="container">
    <div class="row"  style="margin-top: 50px;">
    <div class="col-md-12 text-center">
              <div class="outer-form">
                  <center><b>Attendance</b></center>
        <table class="table-striped table table-bordered vertical" id="center">
              <thead style="color: white; font-weight: normal; background-color: rgb(241, 146, 178);" >
                <tr>
                  
                  <th  class="head">Date</th>
                  <th  class="head">Day</th>
                  <th  class="head">Status</th>
                </tr>
              </thead>

              <tbody style="border:1px solid transparent; background-color:#d6fcf0; color:#A1A6AB; text-align: left;">
                <tr>
                  <td>
                      <?php
                        $d=strtotime("-6 days");
                        echo date("Y-m-d",$d)."<br/>";
                      ?>
                  </td>
                  <td>
                      <?php                      
                        echo date("l",$d)."<br/>";
                      ?></td>
                  <td>P</td>
                </tr>
                

                <tr>
                  <td>
                      <?php
                        $d=strtotime("-5 days");
                        echo date("Y-m-d",$d)."<br/>";
                      ?>
                  </td>
                  <td><?php                      
                        echo date("l",$d)."<br/>";
                      ?></td>
                  <td>P</td>
                </tr>

                <tr>
                  <td>
                      <?php
                        $d=strtotime("-4 days");
                        echo date("Y-m-d",$d)."<br/>";
                      ?>
                  </td>
                  <td><?php                      
                        echo date("l",$d)."<br/>";
                      ?></td>
                  <td>A</td>
                </tr>

                <tr>
                  <td>
                      <?php
                        $d=strtotime("-3 days");
                        echo date("Y-m-d",$d)."<br/>";
                      ?>
                  </td>
                  <td><?php                      
                        echo date("l",$d)."<br/>";
                      ?></td>
                  <td>P</td>
                </tr>

                <tr>
                  <td>
                      <?php
                        $d=strtotime("-2 days");
                        echo date("Y-m-d",$d)."<br/>";
                      ?>
                  </td>
                  <td><?php                      
                        echo date("l",$d)."<br/>";
                      ?></td>
                  <td>-</td>
                </tr>

                <tr>
                  <td>
                      <?php
                        $d=strtotime("-1 days");
                        echo date("Y-m-d",$d)."<br/>";
                      ?>
                  </td>
                  <td><?php                      
                        echo date("l",$d)."<br/>";
                      ?></td>
                  <td>P</td>
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