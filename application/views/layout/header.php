<!DOCTYPE html>
<html>
<head>
	<title></title>
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
    function tambah()
    {
      swal({
        title: "Noice!",
          text: "Data berhasil ditambahkan",
          icon: "success",
        // buttons: true,
        button: "Okay!",
      }).then((okay) =>{
        if(okay)
          document.getElementById("myform").submit(); 
        else
          document.getElementById("myform").submit(); 
      });
    }
</script>
<script>
$(document).ready(function(){
  $(".btn3").click(function(){
    $("#tab2").hide();
  });
  $(".btn4").click(function(){
    $("#tab2").show();
  });
});
</script>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/dist/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SPK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Alternatif">Alternatif</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Target">Target</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Aspek">Aspek</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Kriteria">Kriteria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Nilai">Nilai</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Perhitungan">Perhitungan</a>
      </li>
    </ul>
  </div>
</nav>
