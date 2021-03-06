<section class="content-header">
      <h1>
        Penjualan
        <small>Detail Penjualan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Detail Penjualan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php $this->view('message') ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Detail Penjualan</h3>
            <div class="pull-right">
                <!-- <a href="<?=site_url('detailpenjualan/add')?>" class="btn btn-primary btn-flat">
                   <i class="fa fa-plus"></i> Create
                </a> -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Import
                </button>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="detailpenjualan">
                <thead>
                    <tr>
                        <th>ID Penjualan</th>
                        <th>No Faktur</th>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Qty</th>
                        <th>Jumlah Beli</th>
                        <th>Jumlah Jual</th>
                        <th>Laba</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <!-- modal -->
            <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Import Detail Penjualan</h4>
              </div>
              
              <div class="modal-body">
              <a href="<?php print site_url();?>assets/uploads/sampledetailpenjualan-xlsx.xlsx" class="btn btn-success"><i class="fa fa-file-excel"></i> Sample .XLSX</a>
                <a href="<?php print site_url();?>assets/uploads/sampledetailpenjualan-xls.xls" class="btn btn-success"><i class="fa fa-file-excel"></i> Sample .XLS</a>
                <a href="<?php print site_url();?>assets/uploads/sampledetailpenjualan-csv.csv" class="btn btn-success" target="_blank" ><i class="fa fa-file-csv"></i> Sample .CSV</a>
                </div>
              <div class="modal-body"> 
              <form action="<?php print site_url();?>detailpenjualan/upload" class="excel-upl" id="excel-upl" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <div class="row padall">
                <div class="col-lg-6 order-lg-1">
                
                <input type="file" class="custom-file-input" id="validatedCustomFile" name="fileURL">
                <label class="custom-file-label" for="validatedCustomFile"></label>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" name="import" class="float-right btn btn-primary">Import</button>
              </div>
            </form>
              </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    </div>
    
</section>
