<div class="container">

  <h3>Tambah Dosen</h3>

  <div class="col-md-5" style="margin-top: 2%">
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url();?>admin/c_master_data/do_add_dosen" method="post">
      <table class="table table-borderless">
        <tr>
          <td width="140px">NIP</td>
          <td><input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" required></td>
        </tr>

        <tr>
          <td>Nama Dosen</td>
          <td><input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Dosen" required></td>
        </tr>

        <tr>
          <td></td>
          <td class="text-right">					
            <input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="btn btn-default btn-sm" style="width: 120px; height: 30px"/>
					  <input type="submit" value="Simpan" class="btn btn-success" style="width: 120px; height: 30px"/>
          </td>
				</tr>
      </table>
  	</form>
  </div>
</div>
