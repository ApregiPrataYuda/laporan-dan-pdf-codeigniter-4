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
        <a href="<?= base_url('pdf-make')?>" class="btn btn-sm btn-outline-primary" target="_blank"><i class="fa fa-file"> buat pdf</i></a>
        </div>
        <!-- /.card -->
  </section>
<!--start view for end -->

<?= $this->endSection() ?>