<br>
<br>
<br>
<nav class="navbar bottom navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Profile Matching</a>
</nav>

<!--Script-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
  <script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("#tab1").hide();
  });
  $(".btn2").click(function(){
    $("#tab1").show();
  });
});
$(document).ready(function(){
  $(".btn3").click(function(){
    $("#tab2").hide();
  });
  $(".btn4").click(function(){
    $("#tab2").show();
  });
});
$(document).ready(function(){
  $(".btn5").click(function(){
    $("#tab3").hide();
  });
  $(".btn6").click(function(){
    $("#tab3").show();
  });
});
$(document).ready(function(){
  $(".btn7").click(function(){
    $("#tab4").hide();
  });
  $(".btn8").click(function(){
    $("#tab4").show();
  });
});
$(document).ready(function(){
  $(".btn9").click(function(){
    $("#tab5").hide();
  });
  $(".btn10").click(function(){
    $("#tab5").show();
  });
});
$(document).ready(function(){
  $(".btn11").click(function(){
    $("#tab6").hide();
  });
  $(".btn12").click(function(){
    $("#tab6").show();
  });
});
$(document).ready(function(){
  $(".btn13").click(function(){
    $("#tab7").hide();
  });
  $(".btn14").click(function(){
    $("#tab7").show();
  });
});
$(document).ready(function(){
  $(".btn15").click(function(){
    $("#tab8").hide();
  });
  $(".btn16").click(function(){
    $("#tab8").show();
  });
});
$(document).ready(function(){
  $(".btn17").click(function(){
    $("#tab9").hide();
  });
  $(".btn18").click(function(){
    $("#tab9").show();
  });
});
function hapus(url)
    {
      swal({
        title: "Hapus Jangan?",
          text: "Data tidak bisa dikembalikan",
          icon: "warning",
        // buttons: true,
        buttons: ["tidak", "ya!"],
        dangerMode: true,
        })
      .then((willDelete) => {
        if (willDelete) {
          swal({
            title: "Poof!",
              text: "Data dihapus!",
            icon: "success",
            closeOnConfirm: true,
          })
          .then((okay) =>{
            if(okay)
              window.location = url;
            else
              window.location = url;
          });
        } 
        else {
          swal({
            title: "Safe!",
              text: "Data tidak dihapus!",
          });
        }
      });
      return false;
    }
</script>
<script src="<?=base_url()?>assets/dist/js/sort-table.js"></script>
<script src="<?=base_url()?>assets/dist/js/bootstrap.js"></script>
</body>
</html>