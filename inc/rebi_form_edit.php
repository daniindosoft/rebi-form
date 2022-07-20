<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<div class="m-4">
    <h4><i class="fa fa-pencil"></i> Edit Form</h4>
</div>
<div class="m-4 p-4 panel">
    <form>
        <div class="row">
            <div class="mb-3 col-lg-7">
                <!-- nama, pixel, harga, form type, field -->
                <label for="exampleInputEmail1" class="form-label fw-bold">Nama Form</label>
                <input type="email" class="border-dark form-control" value="<?php echo $edit->name ?>" >
                <div id="emailHelp" class="form-text">Bagian ini tidak akan ditampilkan pada user</div>
            </div>
            <div class="mb-3 col-lg-4">
                <label for="exampleInputPassword1" class="form-label fw-bold">Atur Harga</label>
                <input type="number " class="border-dark form-control" value="<?php echo $edit->price ?>">
            </div>
            <div class="mb-3 col-lg-4">
                <label for="exampleInputPassword1" class="form-label fw-bold">Form Type</label>
                <select name="" id="" class="border-dark form-control">
                    <option value="0" <?php if($edit->form_type == '0') echo 'selected' ?>>Form Lead</option>
                    <option value="1" <?php if($edit->form_type == '1') echo 'selected' ?>>Purchase Form</option>
                </select>
            </div>
            <div class="mb-3 col-lg-4">
                <label for="exampleInputPassword1" class="form-label fw-bold">Produk</label>
                <select name="" id="" class="border-dark form-control">
                    <option value="">Pilih Produk</option>
                    <option>Form Lead</option>
                    <option>Purchase Form</option>
                </select>
                <div id="emailHelp" class="form-text">Kosongkan jika tidak ingin mengkaitkan form ini dengan produk</div>
            </div>
        
            <div class="mb-3">
                <label class="form-label fw-bold">Pilih Field</label>
                <div class="panel panel-default p-3">
                    <div class="row fw-bold">
                        <div class="col-lg-4">Nama</div>
                        <div class="col-lg-4">Type</div>
                        <div class="col-lg-3">Lebar</div>
                        <div class="col-lg-1 text-end"></div>
                    </div>
                    <ul class="list-group parentitemfield">
                        <li class="list-group-item itemfield">
                            <div class="row">
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="nama field" name="name">
                                </div>
                                <div class="col-lg-4">
                                    <select class="form-control" name="type">
                                        <option>Text</option>
                                        <option>Select</option>
                                        <option>Textarea</option>
                                        <option>-</option>
                                        <option>Nama</option>
                                        <option>E-Mail</option>
                                        <option>No Hp/Whatsapp</option>
                                        <option>Jenis Kelamin</option>
                                        <option>Kecamatan</option>
                                        <option>Kabupaten/Kota</option>
                                        <option>Provinsi</option>
                                        <option>Alamat Lengkap</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-control" name="width">
                                        <?php echo $option=self::rebiFormLoop(10); ?>
                                    </select>
                                </div>
                                <div class="col-lg-1 text-end">
                                    <button type="button" class="btn-sm btn-warning btn"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <button class="btn btn-sm btn-success" type="button" id="addrow"><i class="fa fa-plus"></i> Tambah Field</button>
                </div>
            </div>
            <button type="submit" class="btn btn-danger btn-sm">Buat Form</button>
        </form>
    </div>
</div>
<script type="text/javascript">
    var numrow = 0;
    var option = '<?php echo $option; ?>';
    $(document).ready(function() {
        $('#addrow').on('click', function(){
            numrow = $('.itemfield').length + 1;
            $('.parentitemfield').append(`
                    <li class="list-group-item itemfield">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="nama field" name="name">
                            </div>
                            <div class="col-lg-4">
                                <select class="form-control" name="type">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <select class="form-control" name="width">
                                    `+option+`
                                </select>
                            </div>
                            <div class="col-lg-1 text-end">
                                <button type="button" class="btn-sm btn-warning btn"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </li>
                `);
        });
    });
</script>