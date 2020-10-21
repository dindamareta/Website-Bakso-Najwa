<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <title>View Karyawan</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css">
</head>

<body style="" class="rounded-circle">
  <nav class="navbar navbar-expand-md navbar-dark bg-primary py-1" style="background-color: #4093C2;">
    <div class="container"> <a class="navbar-brand" href="#" style="font-size:30px;">
        <b class="text-white"> BAKSO NAJWA</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar16">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar16">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-2"> <a href="#" class="nav-link d-inline-flex justify-content-center align-items-center text-light text-center"><i class="fa fa-fw fa-home fa-2x" style="color:white;"></i>HOME</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link d-inline-flex justify-content-center align-items-center text-light" href="#"><i class="fa fa-info-circle fa-2x fa-fw" style="color:white;"></i>HELP</a> </li>
          <li class="nav-item mx-2 d-inline-flex justify-content-center align-items-center text-light"> <a href="#" class="nav-link text-light text-center d-inline-flex justify-content-center align-items-center"><i class="fa fa-fw fa-sign-out fa-2x" style="color:white;"></i>LOGOUT</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="display-1 text-center">Data Karyawan</h1>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-8"><a href="#" class="btn btn-outline-primary text-center text-dark btn-lg text-capitalize justify-content-center align-items-center flex-grow-0 d-inline-flex border-0" style=""><i class="fa fa-fw fa-plus-square-o pull-left text-dark fa-2x" style="color:white"></i>Input</a></div>
        <div class="col-md-4 text-left">
          <form class="form-inline">
            <div class="input-group"> <input type="search" class="form-control shadow" placeholder="Find Your Data" style="border-radius: 20px; bg">
              <div class="input-group-append"> <button class="btn mx-1 btn-primary" type="button" style="border-radius:20px;">Search</button> </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <form class="form-inline">
  </form>
  <div class="h-50">
    <div class="container">
      <div class="row">
        <div class="col-md-12 shadow-none">
          <table class="table-responsive table-primary shadow justify-content-center align-items-center" style="background-color: rgba(64, 147, 194, 0.8); border-radius:10px">
            <thead>
              <tr>
                <th class="text-center">NIK</th>
                <th class="text-center">Nama Karyawan</th>
                <th class="text-center">Gaji</th>
                <th class="text-center">Nomor Hp</th>
                <th class="text-center">Divisi</th>
                <th style="" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">1</td>
                <td class="text-center">Mark</td>
                <td class="text-center">Otto</td>
                <td class="text-center">Otto</td>
                <td class="text-center">Otto</td>
                <td class="w-25"><a href="#" class="btn btn-success mx-3 shadow text-center align-items-center justify-content-center" data-toggle="modal" data-target="#edit<?php echo $row->idkar; ?>" style="  backgroud-color: #1E8D4D; border-radius: 20px;  width: 76.65px; height: 35px;">Edit</a><a href="#" class="btn btn-danger mx-3 shadow" style=" backgroud-color: #9B1C1C; border-radius: 20px;  width: 76.65px; height: 35px;">Delete</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="p-0 align-items-center justify-content-center text-right">
    <div class="container">
      <ul class="pagination justify-content-end">
        <li class="page-item"> <a class="page-link" href="#"> <span>Prev</span> <span class="sr-only" style="border-radius:20px">Previous</span> </a> </li>
        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
        <li class="page-item"> <a class="page-link" href="#">2</a> </li>
        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
        <li class="page-item rounded-circle"> <a class="page-link" href="#">4</a> </li>
        <li class="page-item rounded-circle"> <a class="page-link" href="#"> <span style="border-radius:20px">Next</span> <span class="sr-only">Next</span> </a> </li>
      </ul>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>


  <div class="modal fade" id="edit<?php echo $row->idkar; ?>" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <?php echo form_open("Pemilik/editkayawan"); ?>
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Karyawan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>          
        </div>
        <div class="modal-body" style="background-color: #4093C2;">
          <input type="hidden" name="idkar" value="<?php echo $row->idkar; ?>">
          <div class="form-group">
            <label for="NIK">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $row->nik; ?>" placeholder="NIK">           
          </div>
          <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" class="form-control" id="namaKar" name="namaKar" value="<?php echo $row->namaKar; ?>" placeholder="Nama Karyawan">           
          </div>
          <div class="form-group">
            <label for="Gaji">Gaji</label>
            <input type="text" class="form-control" id="gajiKar" name="gajiKar"  value="<?php echo $row->gajiKar; ?>" placeholder="Gaji">           
          </div>
          <div class="form-group">
            <label for="nohp">No HP</label>
            <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $row->nohp; ?>" placeholder="nohp">           
          </div>
          <div class="form-group">
            <label for="Divisi">Divisi</label>
            <input type="text" class="form-control" id="divisi" name="divisi" value="<?php echo $row->divisi; ?>" placeholder="Divisi">           
          </div>
        </div>
        <div class="modal-footer" style="background-color:transparent;">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <?php echo form_close(); ?>
      </div>
      </div>
    </div> 
</body>

</html>