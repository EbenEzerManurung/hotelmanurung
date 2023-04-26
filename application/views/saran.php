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


      <!-- search box-->
        <div class="container-fluid">
          
        <h2 >Saran</h2>
        <hr style="border: 1px solid">
        
      <!--end search box-->

<div class="row">

    <div class="col-lg-9 col-sm-9 mx-auto mt-5">
    <?php echo form_open('saran_aksi');?>

                <input type="text" class="form-control" name="nama_saran" placeholder="Nama">
                <input type="text" class="form-control" name="email_saran" placeholder="Email ">
                <input type="number" class="form-control" name="tlp_saran" placeholder="No Hp/Telp">
                <textarea rows="6" class="form-control" name="isi_saran" placeholder="Saran"></textarea><br>
             
      <button type="submit" class="btn btn-secondary" name="Submit" onclick="return confirm('Kirim?');">Send Message</button>
    <?php echo form_close();?> 


                
        </div>


    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("tamu/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
</div>
</div>
</div>
<!-- /#wrapper -->


<?php $this->load->view("tamu/scrolltop.php") ?>
<?php $this->load->view("tamu/modal.php") ?>
<?php $this->load->view("tamu/js.php") ?>
    
</body>
</html>