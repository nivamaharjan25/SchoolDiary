<?php
    @include 'user_header.php';
?>

<html>
    <head>
    <link rel="stylesheet" href="css/dropdown.css">
    <script src="js/user_activity.js"></script>
    </head>
    <!-- <select class="item" name="dropdown" onchange="myFunction(this.value)">
        <option value="" disabled selected>Day</option>
        <option value="1">Sunday</option>
        <option value="2">Monday</option>
        <option value="3">Tuesday</option>
        <option value="4">Wednesday</option>
        <option value="5">Thursday</option>
        <option value="6">Friday</option>
    </select> -->
    
    <table class="table-striped table table-bordered vertical" id="center">
      <br/>
      <div class="date1">
        <?php
          $d=strtotime("-6 days");
          echo "<b>Date: ".date("Y-m-d",$d)."</b><br/>";
        ?>
        <?php
          echo "<b>Day: ".date("l",$d)."</b><br/>";
        ?>
      </div>
      
              <thead style="color: white; font-weight: normal; background-color: rgb(241, 146, 178);" >
                <tr>
                  <th  class="head">S.No.</th>
                  <th  class="head">Subject Name</th>
                  <th  class="head">Class Work</th>
                  <th  class="head">Home Work</th>
                </tr>
              </thead>
              <tbody style="border:1px solid transparent; background-color:#d6fcf0; color:#A1A6AB; text-align: left;">
                <tr>
                  <td style="padding: 14px;">01</td>
                  <td>English</td>
                  <td>
                    <ul>
                      <li>Course Book: Read pg no. 50</li>
                    </ul>
                  </td>
                  <td>
                    <ul>
                      <li>Worksheet</li>
                    </ul>
                  </td>
                  <!-- <td>
                   <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
                   </label>
                  </td> -->
                </tr>
                <tr>
                  <td style="padding: 14px;">02</td>
                  <td>Maths</td>
                  <td>
                    <ul>                      
                      <li>Activity Book: Do pg no. 28</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>Activity Book : Do pg no.54</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">03</td>
                  <td>Nepali</td>
                  <td>
                    <ul>                      
                      <li>Course Book: Read pg no. 63</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>Worksheet</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>Social</td>
                  <td>
                    <ul>                      
                      <li>-</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>-</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>ECA/CCA</td>
                  <td>
                    <ul>                      
                      <li>Rhymes</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>-</li>
                    </ul>
                  </td>
                </tr>
    </table>

    <table class="table-striped table table-bordered vertical" id="center">
      <br/>
      <div class="date1">
        <?php
          $d=strtotime("-5 days");
          echo "<b>Date: ".date("Y-m-d",$d)."</b><br/>";
        ?>
        <?php
          echo "<b>Day: ".date("l",$d)."</b><br/>";
        ?>
      </div> 
      
              <thead style="color: white; font-weight: normal; background-color: rgb(241, 146, 178);" >
                <tr>
                  <th  class="head">S.No.</th>
                  <th  class="head">Subject Name</th>
                  <th  class="head">Class Work</th>
                  <th  class="head">Home Work</th>
                </tr>
              </thead>
              <tbody style="border:1px solid transparent; background-color:#d6fcf0; color:#A1A6AB; text-align: left;">
                <tr>
                  <tr>
                    <td style="padding: 14px;">01</td>
                  <td>English</td>
                  <td>
                    <ul>
                      <li>Activity Book: Done pg no. 40</li>
                    </ul>
                  </td>
                  <td>
                    <ul>
                      <li>Activity Book: Done pg no. 40 and 41</li>
                    </ul>
                  </td>
                  <!-- <td>
                   <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
                   </label>
                  </td> -->
                </tr>
                <tr>
                  <td style="padding: 14px;">02</td>
                  <td>Maths</td>
                  <td>
                    <ul>                      
                      <li>Worksheet</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>Worksheet</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">03</td>
                  <td>Nepali</td>
                  <td>
                    <ul>                      
                      <li>Course Book: Read pg no. 53</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>Course Book: Read pg no. 53</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>Social</td>
                  <td>
                    <ul>                      
                      <li>-</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>-</li>-
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>ECA/CCA</td>
                  <td>
                    <ul>                      
                      <li>Outdoor Games</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>-</li>
                    </ul>
                  </td>
                </tr>
    </table>

    <table class="table-striped table table-bordered vertical" id="center">
      <br/>
      <div class="date1">
        <?php
          $d=strtotime("-4 days");
          echo "<b>Date: ".date("Y-m-d",$d)."</b><br/>";
        ?>
        <?php
          echo "<b>Day: ".date("l",$d)."</b><br/>";
        ?>
      </div>
      
              <thead style="color: white; font-weight: normal; background-color: rgb(241, 146, 178);" >
                <tr>
                  <th  class="head">S.No.</th>
                  <th  class="head">Subject Name</th>
                  <th  class="head">Class Work</th>
                  <th  class="head">Home Work</th>
                </tr>
              </thead>
              <tbody style="border:1px solid transparent; background-color:#d6fcf0; color:#A1A6AB; text-align: left;">
                <tr>
                  <td style="padding: 14px;">01</td>
                  <td>English</td>
                  <td>
                    <ul>
                      <li>-</li>
                    </ul>
                  </td>
                  <td>
                    <ul>
                      <li>-</li>
                    </ul>
                  </td>
                  <!-- <td>
                   <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
                   </label>
                  </td> -->
                </tr>
                <tr>
                  <td style="padding: 14px;">02</td>
                  <td>Maths</td>
                  <td>
                    <ul>                      
                      <li>Activity Book: Do pg no. 25</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>Worksheet</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">03</td>
                  <td>Nepali</td>
                  <td>
                    <ul>                      
                      <li>Worksheet</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>Course Book: Read pg. 54</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>Social</td>
                  <td>
                    <ul>                      
                      <li>Activity Book: Do pg no.72</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>Worksheet</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>ECA/CCA</td>
                  <td>
                    <ul>                      
                      <li>Dancing</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>-</li>
                    </ul>
                  </td>
                </tr>
    </table>

    <table class="table-striped table table-bordered vertical" id="center">
      <br/>
      <div class="date1">
        <?php
          $d=strtotime("-3 days");
          echo "<b>Date: ".date("Y-m-d",$d)."</b><br/>";
        ?>
        <?php
          echo "<b>Day: ".date("l",$d)."</b><br/>";
        ?>
      </div>
      
              <thead style="color: white; font-weight: normal; background-color: rgb(241, 146, 178);" >
                <tr>
                  <th  class="head">S.No.</th>
                  <th  class="head">Subject Name</th>
                  <th  class="head">Class Work</th>
                  <th  class="head">Home Work</th>
                </tr>
              </thead>
              <tbody style="border:1px solid transparent; background-color:#d6fcf0; color:#A1A6AB; text-align: left;">
                <tr>
                  <td style="padding: 14px;">01</td>
                  <td>English</td>
                  <td>
                    <ul>
                      <li>Course Book: Read pg no. 50</li>
                    </ul>
                  </td>
                  <td>
                    <ul>
                      <li>Activity Book : Do pg no.54</li>
                    </ul>
                  </td>
                  <!-- <td>
                   <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
                   </label>
                  </td> -->
                </tr>
                <tr>
                  <td style="padding: 14px;">02</td>
                  <td>Maths</td>
                  <td>
                    <ul>                      
                      <li>Activity Book: Do pg no. 28</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>Worksheet</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">03</td>
                  <td>Nepali</td>
                  <td>
                    <ul>                      
                      <li>Course Book: Read pg no. 63</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>Worksheet</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>Social</td>
                  <td>
                    <ul>                      
                      <li>-</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>     
                      <li>-</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>ECA/CCA</td>
                  <td>
                    <ul>                      
                      <li>Rhymes</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>-</li>
                    </ul>
                  </td>
                </tr>
    </table>

    <table class="table-striped table table-bordered vertical" id="center">
      <br/>
      <div class="date1">
        <?php
          $d=strtotime("-2 days");
          echo "<b>Date: ".date("Y-m-d",$d)."</b><br/>";
        ?>
        <?php
          echo "<b>Day: ".date("l",$d)."</b><br/>";
        ?>
      </div>
      
              <thead style="color: white; font-weight: normal; background-color: rgb(241, 146, 178);" >
                <tr>
                  <th  class="head">S.No.</th>
                  <th  class="head">Subject Name</th>
                  <th  class="head">Class Work</th>
                  <th  class="head">Home Work</th>
                </tr>
              </thead>
              <tbody style="border:1px solid transparent; background-color:#d6fcf0; color:#A1A6AB; text-align: left;">
              <tr>
                  <td style="padding: 14px;">01</td>
                  <td>English</td>
                  <td>
                    <ul>
                      <li>-</li>
                    </ul>
                  </td>
                  <td>
                    <ul>
                      <li>-</li>
                    </ul>
                  </td>
                  <!-- <td>
                   <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
                   </label>
                  </td> -->
                </tr>
                <tr>
                  <td style="padding: 14px;">02</td>
                  <td>Maths</td>
                  <td>
                    <ul>                      
                      <li>-</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>-</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">03</td>
                  <td>Nepali</td>
                  <td>
                    <ul>                      
                      <li>-</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>-
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>Social</td>
                  <td>
                    <ul>                      
                      <li>-</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>-</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>ECA/CCA</td>
                  <td>
                    <ul>                      
                      <li>-</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>-</li>
                    </ul>
                  </td>
                </tr>
    </table>

    <table class="table-striped table table-bordered vertical" id="center">
      <br/>
      <div class="date1">
        <?php
          $d=strtotime("-1 days");
          echo "<b>Date: ".date("Y-m-d",$d)."</b><br/>";
        ?>
        <?php
          echo "<b>Day: ".date("l",$d)."</b><br/>";
        ?>
      </div>
      
              <thead style="color: white; font-weight: normal; background-color: rgb(241, 146, 178);" >
                <tr>
                  <th  class="head">S.No.</th>
                  <th  class="head">Subject Name</th>
                  <th  class="head">Class Work</th>
                  <th  class="head">Home Work</th>
                </tr>
              </thead>
              <tbody style="border:1px solid transparent; background-color:#d6fcf0; color:#A1A6AB; text-align: left;">
              <tr>
                  <td style="padding: 14px;">01</td>
                  <td>English</td>
                  <td>
                    <ul>
                      <li>Discussion</li>
                    </ul>
                  </td>
                  <td>
                    <ul>
                      <li>Revision Worksheet</li>
                    </ul>
                  </td>
                  <!-- <td>
                   <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
                   </label>
                  </td> -->
                </tr>
                <tr>
                  <td style="padding: 14px;">02</td>
                  <td>Maths</td>
                  <td>
                    <ul>                      
                      <li>Course Book: Read pg no. 34</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>Course Book: Read pg no.34</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">03</td>
                  <td>Nepali</td>
                  <td>
                    <ul>                      
                      <li>-</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>-</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>Social</td>
                  <td>
                    <ul>                      
                      <li>Course Book: Concept of water animals</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>Course Book: Read pg no. 73</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 14px;">04</td>
                  <td>ECA/CCA</td>
                  <td>
                    <ul>                      
                      <li>Legos</li>                      
                    </ul>
                  </td>
                  <td>
                    <ul>                      
                      <li>-</li>
                    </ul>
                  </td>
                </tr>
    </table>

</html>

<?php
    @include 'footer.php';
?>


