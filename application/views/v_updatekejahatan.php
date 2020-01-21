<?php include("header_admin.php"); ?>



<div class="container">
  <div class="row">
    <div class="col-sm-7">
      <div class="panel panel-primary">
        <div class="panel-heading">Lokasi Kejahatan</div>
        <div class="panel-body">

          <?php echo $map['html']; ?>

        </div>
        <div class="panel-footer">
        </div>
      </div>
    </div>

    <div class="col-sm-5">
      <div class="panel panel-primary">
        <div class="panel-heading">Input Data Kejahatan</div>
        <div class="panel-body">

          <?php
          echo validation_errors('<div class="alert alret-warning">', '</div>');
          if ($this->session->flashdata('sukses')) {
            echo '<div class="alert alert-warning">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
          }
          echo form_open(base_url('admin/update/' . $kejahatan->id_kejahatan), 'class="form-horizontal" entype="multipart/formdata"');
          ?>

          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-4 control-label"> Jenis Kejahatan </label>
              <div class="col-sm-8">
                <select type="text" name="jenis_kejahatan" class="form-control" placeholder="Jenis Kejahatan" value="<?php echo $kejahatan->jenis_kejahatan; ?>" required>
                  <option value="">Silahkan Pilih</option>
                  <option value="Pencurian ">Pencurian</option>
                  <option value="Penculikan">Penculikan</option>
                  <option value="Narkoba">Narkoba</option>>
                  <option value="Pembunuhan">Pembunuhan</option>
                  <option value="Pemerkosaan">Pemerkosaan</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label"> Alamat </label>
              <div class="col-sm-8">
                <Input type="text" name="alamat" class="form-control" placeholder="alamat" value="<?php echo $kejahatan->alamat; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label"> Tanggal </label>
              <div class="col-sm-8">
                <Input type="date" name="tanggal" class="form-control" placeholder="tanggal" value="<?php echo $kejahatan->tanggal; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label"> Latitude </label>
              <div class="col-sm-8">
                <Input type="text" name="latitude" class="form-control" placeholder="latitude" value="<?php echo $kejahatan->latitude; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label"> Long latitude </label>
              <div class="col-sm-8">
                <Input type="text" name="longitude" class="form-control" placeholder="longitude" value="<?php echo $kejahatan->longitude; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Keterangan </label>
              <div class="col-sm-8">
                <Input type="text" name="Keterangan" class="form-control" placeholder="Keterangan" value="<?php echo $kejahatan->keterangan; ?>" required> </Input>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-4 control-label"></label>
              <div class="col-sm-8">
                <button class="btn btn-primary" type="submit">Update</button>

              </div>
            </div>
          </form>

          <?php echo form_close(); ?>
        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div>