    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary">Referensi Data SMTA</h6>
                        </div>
                        <div class="col-sm-6 d-flex justify-content-end">
                            <button id="btnTambahsmta" type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#newDataSMTA"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <?php echo $this->session->flashdata('notif'); ?>
					<form id="formkabupaten" method="POST" class="row g-3">
						<div class="col-md-3">
                            <label for="optProvinsi" class="form-label">Pilih Provinsi</label>
                            <select name="optProvinsi" id="optProvinsi" class="form-control">
                                <option>Pilih Provinsi</option>
                                <?php foreach ($provinsi AS $pr) : ?>
                                <option value="<?php echo $pr['kode'];?>"><?php echo $pr['nama'];?></option>
                            <?php endforeach; ?>
                            </select>
                        </div> 
						<div class="col-md-3">
							<label for="txtKabupaten" class="form-label">Pilih Kabupaten/Kota</label>
                            <select name="optKabupaten" id="optKabupaten" class="form-control">
                                <option>Pilih Kabupaten/Kota</option>
                            </select>
						</div>    

						<div class="col-md-3">
							<label for="txtKecamatan" class="form-label">Pilih Kecamatan</label>
                            <select name="optKecamatan" id="optKecamatan" class="form-control">
                                <option>Pilih Kecamatan</option>
                            </select>
						</div>    					
					</form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                <?php echo $this->session->flashdata('notif'); ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableSMTA" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">No.</th>
                                    <th>Nama SMTA</th>
                                    <th>NPSN</th>
                                    <th>Alamat</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php
                                //$no = 1;
                                //foreach ($namasmta as $ns) : ?>
                                    <tr>
                                        <td><?php //echo $no++; ?></td>
                                        <td><?php //echo $ns['nama_smta']; ?></td>
                                        <td><?php //echo $ns['npsn_smta']; ?></td>
                                        <td><?php //echo $ns['alamat_smta']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-icon-split btn-sm editform" data-toggle="modal" data-target="#editDataSMTA" data-idsmta="<?php //echo $ns['id'] ?>" 
                                                data-namasmta="<?php //echo $ns['nama_smta'] ?>"
                                                data-npsnsmta="<?php //echo $ns['npsn_smta'] ?>"
                                                data-alamatsmta="<?php //echo $ns['alamat_smta'] ?>"
                                                data-provinsismta="<?php //echo $ns['kodeprovinsi'] ?>"
                                                >
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-idsmta="<?php //echo $ns['id'] ?>">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                <span class="text">Hapus</span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php //endforeach; ?> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

        <!-- Modal Tambah SMTA -->
        <div class="modal fade" id="newDataSMTA" tabindex="-1" role="dialog" aria-labelledby="newDataSMTALabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newDataSMTALabel">Tambah SMTA Baru</h5>
                    </div>
                    <div class="modal-body">
                    <div class="card-body">
                            <?php echo $this->session->flashdata('notif'); ?>
                            <form id="formnamasmta" action="" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama SMTA</label>
                                            <input id="namasmta" type="text" class="form-control" name="namasmta" placeholder="Nama SMTA" required>
                                            <input type="hidden" id="idsmta" name="idsmta">
                                        </div>
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <select name="provinsismta" id="provinsismta" class="form-control">
                                                <option>Pilih Provinsi</option>
                                                <?php foreach ($provinsi AS $pr) : ?>
                                                <option value="<?php echo $pr['kode'];?>"><?php echo $pr['nama'];?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <select name="kecamatansmta" id="kecamatansmta" class="form-control">
                                                <option>Pilih Kecamatan</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>NPSN</label>
                                            <input id="npsnsmta" type="text" class="form-control" name="npsnsmta" placeholder="NPSN" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Kabupaten</label>
                                            <select name="kabupatensmta" id="kabupatensmta" class="form-control">
                                                <option>Pilih Kabupaten</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea id="alamatsmta" type="text" class="form-control" name="alamatsmta" placeholder="Alamat" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary">Simpan</button> -->
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                        <button class="btn btn-primary btnSimpansmta">Save</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Tambah SMTA -->

        <!-- Modal Edit SMTA -->
        <div class="modal fade" id="editDataSMTA" tabindex="-1" role="dialog" aria-labelledby="editDataSMTALabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editDataSMTALabel">Edit SMTA Baru</h5>
                    </div>
                    <div class="modal-body">
                    <div class="card-body">
                            <?php echo $this->session->flashdata('notif'); ?>
                            <form id="formnamasmta" action="<?php echo site_url($linkform); ?>" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama SMTA</label>
                                            <input id="txtNamasmta" type="text" class="form-control" name="namasmta" placeholder="Nama SMTA" value="" required>
                                            <input type="hidden" id="idsmta" name="idsmta">
                                        </div>
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <select name="optProvinsi" id="optProvinsi" class="form-control">
                                                <option>Pilih Provinsi</option>
                                                <?php foreach ($provinsi AS $pr) : ?>
                                                <option value="<?php echo $pr['kode'];?>"><?php echo $pr['nama'];?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <select name="optKecamatan" id="optKecamatan" class="form-control">
                                                <option>Pilih Kecamatan</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>NPSN</label>
                                            <input id="txtNPSN" type="text" class="form-control" name="npsnsmta" placeholder="NPSN" required>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Kabupaten</label>
                                            <select name="optKabupaten" id="optKabupaten" class="form-control">
                                                <option>Pilih Kabupaten</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea id="txtAlamatsmta" type="text" class="form-control" name="alamatsmta" placeholder="Alamat" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary">Simpan</button> -->
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary btnSimpan">Save</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Edit SMTA -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    var save_method; //for save method string
    var tablePendaftar;

    $(document).ready(function() {
        function reload_table() {
            $('#tableSMTA').DataTable().ajax.reload(null, false);
        };

        function load_data(is_provinsi,is_kabupaten,is_kecamatan) {
            var tableSMTA = $('#tableSMTA').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
                },
                "processing": true,
                "serverSide": true,
                "stateSave": true,
                "order": [],
                "columnDefs": [{
                        "targets": 0,
                        "orderable": false,
                        "width": "8%",
                        "className": "text-center"
                    },
                    {
                        "targets": 1,
                        "orderable": false,
                    },
                    {
                        "targets": -1,
                        "orderable": false,
                        "width": "12%",
                        "className": "text-center"
                    }
                ],
                "fixedColumns": {
                    "left": 1,
                    "right": 1
                },
                "ajax": {
                    //panggil method ajax list dengan ajax
                    "url": '<?php echo site_url('Datatables/smta_list'); ?>',
                    "type": "POST",
                    "data": {
                        is_provinsi: is_provinsi,
                        is_kabupaten: is_kabupaten,
                        is_kecamatan: is_kecamatan,
                    }
                },

            });

            tableSMTA.search('').draw();
        }

        $(document).on('change', '#optProvinsi', function() {
            var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
            $('#optKabupaten').load(url);
            //return false;

            var tableSMTA = $('#tableSMTA').DataTable();
            var is_provinsi = $('#optProvinsi').val();
            // var is_kabupaten = $('#optKabupaten').val();
            // var is_kecamatan = $('#optKecamatan').val();

            tableSMTA.destroy();
            if (is_provinsi != '') {
                load_data(is_provinsi);
                tableSMTA.search('').draw();
            } else {
                load_data();
            }

            tableSMTA.search('').draw();
        });

        $(document).on('change', '#optKabupaten', function() {
            var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + $(this).val();
            $('#optKecamatan').load(url);
            //return false;

            var tableSMTA = $('#tableSMTA').DataTable();
            var is_provinsi = $('#optProvinsi').val();
            var is_kabupaten = $('#optKabupaten').val();
            // var is_kecamatan = $('#optKecamatan').val();

            tableSMTA.destroy();
            if (is_kabupaten != '') {
                load_data(is_provinsi,is_kabupaten);
                tableSMTA.search('').draw();
            } else {
                load_data();
            }
            
            tableSMTA.search('').draw();
        });

        //var table = $('#dataTable').DataTable();
        $("#dataTable").on("click", ".editform", function(){
            event.preventDefault();
            $("input#idsmta").val($(this).data('idsmta'));
            $("input#txtNamasmta").val($(this).data('namasmta'));
            $("input#txtNPSN").val($(this).data('npsnsmta'));
            $("textarea#txtAlamatsmta").val($(this).data('alamatsmta'));
            $("select#optProvinsi").val($(this).data('provinsismta')).change();

            $('#formnamasmta').attr('action', '<?php echo site_url('administrator/edit_smta'); ?>');
        });

        $(document).on('click', '.deletedata', function() {
            var idsmta = $(this).data("idsmta");
            Swal.fire({
              title: 'Apakah anda yakin akan menghapus?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya',
              cancelButtonText: 'Tidak'
            }).then((result) => {
              if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo site_url(); ?>administrator/hapus_smta",
                    method: "POST",
                    data: {
                        idsmta: idsmta
                    },
                    success: function(data) {
                        
                    }
                });
                Swal.fire(
                  'Terhapus!'
                );
                location.reload();
              }
            })
        });

        $(document).on('click', '#btnTambahsmta', function() {
            $("#provinsismta").change(function() {
                var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
                $('#kabupatensmta').load(url);
                return false;
            });

            $("#kabupatensmta").change(function() {
                var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + $(this).val();
                $('#kecamatansmta').load(url);
                return false;
            });
        });

        $(document).on('click', '.btnSimpansmta', function() {
            var namasmta = $("#namasmta").val();
            var provinsismta = $("#provinsismta").val();
            var kabupatensmta = $("#kabupatensmta").val();
            var kecamatansmta = $("#kecamatansmta").val();
            var npsnsmta = $("#npsnsmta").val();
            var alamatsmta = $("#alamatsmta").val();
            
            Swal.fire({
                title: 'Apakah Anda Yakin akan menghapus?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo site_url(); ?>administrator/tambah_smta",
                        method: "POST",
                        data: {
                            namasmta: namasmta,
                            provinsismta: provinsismta,
                            kabupatensmta: kabupatensmta,
                            kecamatansmta: kecamatansmta,
                            npsnsmta: npsnsmta,
                            alamatsmta: alamatsmta
                        },

                        success: function(data) {
                            // alert("Data Berhasil Dihapus");
                            // location.reload();
                        }
                    });

                    Swal.fire(
                        'Sukses!',
                        'Data SMTA Berhasil Ditambah!',
                        )
                    };
                    
                    location.reload();            
            })

        });

    	$("#tableSMTA").on("click", ".btnEdit", function() {
            var idsmta = $("#idsmta").val();
            var namasmta = $("#txtNamasmta").val();
            var provinsismta = $("#optProvinsi").val();
            var kabupatensmta = $("#optKabupaten").val();
            var kecamatansmta = $("#optKecamatan").val();
            var npsnsmta = $("#txtNPSN").val();
            var alamatsmta = $("#txtAlamatsmta").val();

            Swal.fire({
                title: 'Apakah Anda Yakin akan mengubah?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo site_url(); ?>administrator/edit_smta",
                        method: "POST",
                        data: {
                            idsmta: idsmta,
                            namasmta: namasmta,
                            provinsismta: provinsismta,
                            kabupatensmta: kabupatensmta,
                            kecamatansmta: kecamatansmta,
                            npsnsmta: npsnsmta,
                            alamatsmta: alamatsmta
                        },
                        
                        success: function(data) {

                        }
                    });

                    Swal.fire(
                        'Sukses!',
                        'Data SMTA Berhasil Diubah!',
                        )
                    };
                    
                    location.reload();            
            })
        });        

    });
</script>