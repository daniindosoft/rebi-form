<div class="m-4">
    <h4><i class="fa fa-plus"></i> Buat Form</h4>
</div>
<div class="m-4 p-4 panel">
    <form>
        <div class="mb-3">
            <!-- nama, pixel, harga, form type, field -->
            <label for="exampleInputEmail1" class="form-label fw-bold">Nama Form</label>
            <input type="email" class="border-dark form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Bagian ini tidak akan ditampilkan pada user</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Script</label>
            <textarea name="" class="border-dark form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Atur Harga</label>
            <input type="email" class="border-dark form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Form Type</label>
            <select name="" id="" class="border-dark form-control">
                <option value="">Lead</option>
                <option value="">Form</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Pilih Field</label>
            <div class="panel panel-default p-3">
            <div class="row">
                <div class="col-lg-6">Field</div>
                <div class="col-lg-6 text-end">Order</div>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-lg-6">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Default checkbox
                    </label>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button class="btn-sm btn-danger btn"><i class="fa fa-arrow-down"></i></button>
                            <button class="btn-sm btn-danger btn"><i class="fa fa-arrow-up"></i></button>
                        </div>
                    </div>
                </li>
            </ul>
            </div>
        </div>
        <button type="submit" class="btn btn-danger btn-sm">Buat Form</button>
    </form>
</div>