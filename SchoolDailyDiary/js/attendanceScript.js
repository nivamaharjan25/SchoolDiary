$( ".btn-info" ).click(function() {
    //$(this).removeClass('btn-info');
    $(this).toggleClass('btn-success');
    $(this).toggleClass('btn-info');
  });


function show(){
  document.getElementById("table_att").style.display="none";
}

function submit(){
  alert("Attendance Recorded!");
}