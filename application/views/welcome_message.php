<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("tamu/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("tamu/navbar.php") ?>

<div id="wrapper">

<div id="content-wrapper">

<div class="container-fluid">

<style>
      div.b {
          text-align: left;
    
      }
      </style>
      
    
      
      <div class="b">
      <script type='text/javascript'>
        <!--
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth();
        var thisDay = date.getDay(),
            thisDay = myDays[thisDay];
        var yy = date.getYear();
        var year = (yy < 1000) ? yy + 1900 : yy;
        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
        //-->
      </script>   
      
      <div id="clock"></div>
      <script type="text/javascript">
      <!--
      function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "W.I.B";
        } else {
            a_p = "W.I.B";
        }
        if (curr_hour == 0) {
            curr_hour = 0;
        }
        if (curr_hour > 24) {
            curr_hour = curr_hour - 24;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
      document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }
      
      function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
      }
      setInterval(showTime, 500);
      //-->
      </script>
<!-- search box-->
<div class="container-fluid">
  
<div class="search-form"><h4><span class="fa fa-search"></span> Search for</h4>
<?php echo form_open('Welcome/cari');?>
<div class="row">
<div class="col-lg-12">
<select class="form-control" name="id_kelas_kamar">
<option value="">Pilih Kelas Kamar</option>
<?php
foreach ($kelas_kamar->result_array() as $value) { ?>
    <option value="<?php echo $value['id_kelas_kamar']; ?>"><?php echo $value['nama_kelas_kamar'] ?></option>
<?php
}
?>

</select>
</div>
</div>
<button class="btn btn-success">Find Now</button>

<?php echo form_close();?>
</div>
<hr style="border: 1px solid">
<!--end search box-->


<!-- Icon Cards-->
<div class="row">

<?php foreach ($kamar->result_array() as $value) { ?>
<div class="col-xl-3 col-sm-6 mb-3" >

<div class="properties" style="background-color: white; ">
<div class="text-black font-weight-bold center">
<img src="<?php echo base_url();?>/assets/images/<?php echo $value['nama_kamar_gambar'];?>" class="img-responsive" alt="properties" style="width:278.5px;height:150px;">
<?php
if ($value['status_kamar']=="0") { ?>
  <div class="card-body status sold">
<div style="color: white;"> Room Avaliable</div>
</div>
<?php
}
else { ?>
  <div class="card-body status new">
<div style="color: white;">Being Reserved</div>
</div>
<?php 
}
?>

<h3><a href="<?php echo base_url();?>welcome/kamardetail/<?php echo $value['id_kamar'];?>"><?php echo $value['no_kamar'];?></a></h3>
  <hr style="margin-top: 1; margin-bottom: 1;">
  <h5><p class="price">Harga: <?php echo rupiah($value['harga_kamar']);?></p></h5>
    <hr style="margin-top: 1; margin-bottom: 1;">
  <div class="listing-detail"><?php echo $value['nama_kelas_kamar'];?>   </div>
  <a class="btn btn-warning" href="<?php echo base_url();?>welcome/kamardetail/<?php echo $value['id_kamar'];?>">selengkapnya</a>
</div>
<br>


</div>
</div>

<?php
}
?>

</div>
<!-- /.iron-card -->
</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->
<?php $this->load->view("tamu/footer.php") ?>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("tamu/scrolltop.php") ?>
<?php $this->load->view("tamu/modal.php") ?>
<?php $this->load->view("tamu/js.php") ?>

</body>
</html>