<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><span class="badge badge-secondary"> <?= $title ?> </span></h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a class="text-info" href="#"><span class="badge badge-secondary"> <?= $title ?></span></a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<!--start view for user -->
<section class="content">
<div id="flash" data-flash="<?= session()->getFlashdata('success')?>">
<!-- <div id="flashErr" data-flash="<?= session()->getFlashdata('err')?>"> -->
        <!-- Default box -->
        <div class="card">
          <div class="card-header" style="background-color:RGB(40, 178, 170);">
            <h3 class="card-title text-light">Data <?= $title ?></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
          
          <form method="post" action="<?= base_url('generateReport') ?>">
            <div class="row">
                <div>
                    <div class="form-group">
                        <label>Filter Data for Report</label>
                        <div class="input-group">
                            <input type="text" id="datepicker" name="tgl_awal" value="<?= @$_GET['tgl_awal'] ?>" class="form-control" placeholder="Start Date" autocomplete="off">
                            <span class="badge badge-info ml-1 mr-1">
                            <span class="badge badge-light mt-2 font-bold">From / To</span>
                            </span>
                            <input type="text" id="datepickers" name="tgl_akhir" value="<?= @$_GET['tgl_akhir'] ?>" class="form-control startdate" placeholder="End Date" autocomplete="off">
                            <div class="ml-1">
                            <button type="submit" name="filter" value="true" class="btn btn-outline-info">Showing</button>
                            <?php
                            if(isset($_GET['filter'])) 
                                echo '<a href="'.base_url('Admin/Report').'" class="btn btn-outline-warning">RESET</a>';
                            ?>
                          </div>
                            <div class="ml-1">
                             <div class="btn-group">
                             <button type="button" class="btn btn-info">Export</button>
                             <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                             </button>
                             <div class="dropdown-menu">
                                 <a class="dropdown-item" href=""><i class="fa fa-file-excel" aria-hidden="true">  Export Excel</i></a>
                                <a class="dropdown-item" href=""><i class="fa fa-file-pdf" aria-hidden="true">  Export PDF</i></a>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        <h1>Transaction Report</h1>
      
        <div class="table-responsive" style="margin-top: 10px;">
            <table class="table table-striped" id="example2">
                <thead>
                    <tr class="tr-secondary">
                        <th>KODE</th>
                        <th>PRODUCT</th>
                        <th>QTY</th>
                        <th>TOTAL PRICE</th>
                    </tr>
                </thead>
                <tbody>
              
            
     
                </tbody>
               </table>
              </div>


        </div>
        <!-- /.card -->
  </section>
<!--start view for end -->
<script>
    $(function(){
    // $("#datepicker").datepicker({
    //     dateFormat: "yy-mm-dd",
    //     changeMonth: true,
    //     changeYear: true
    // });

    // $("#datepickers").datepicker({
    //     dateFormat: "yy-mm-dd",
    //     changeMonth: true,
    //     changeYear: true
    // });

    $("#datepickers").datepicker({
    autoclose: true,
    dateFormat: "yy-mm-dd",
    orientation: "bottom right"
  }).attr("readonly", "readonly").css({"cursor":"pointer", "background":"white"});

    $("#datepicker").datepicker({
    autoclose: true,
    dateFormat: "yy-mm-dd",
    orientation: "bottom right"
  }).attr("readonly", "readonly").css({"cursor":"pointer", "background":"white"});
});

</script>


<?= $this->endSection() ?>