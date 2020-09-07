<!-- Page Content Holder -->
<div id="content">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                    <i class="glyphicon glyphicon-align-left"></i>
                    <span>Menu</span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container border">
        <h3>Data</h3>
        <div class="pb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Tambah</button>

            <!-- <button id="tambah" class="btn btn-info">Tambah</button> -->
        </div>
        <br>
        <div class="container-fluid">
            <table id="mytable" class="table-striped">
                <thead class="bg-info">
                    <tr>
                        <th>No</th>
                        <th>Destinasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- JS -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Add -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="destinasi" class="col-form-label">Destinasi</label>
                        <input type="text" class="form-control" id="destinasi">
                    </div>
                    <div class="form-group">
                        <label for="urlgmap" class="col-form-label">URL Google Map</label>
                        <input type="text" class="form-control" id="urlgmap">
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-form-label">Photo</label>
                        <input type="file" class="form-control" id="photo">
                    </div>
                    <div class="form-group">
                        <label for="artikel" class="col-form-label">Artikel</label>
                        <textarea class="form-control" id="artikel"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add -->
<!-- Modal edit -->
<div class="modal fade" id="ModalEdt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="destinasi_e" class="col-form-label">Destinasi</label>
                        <input type="text" class="form-control" id="destinasi_e">
                        <input type="text" class="form-control" id="id_e" hidden>
                    </div>
                    <div class="form-group">
                        <label for="urlgmap_e" class="col-form-label">URL Google Map</label>
                        <input type="text" class="form-control" id="urlgmap_e">
                    </div>
                    <div class="form-group">
                        <label for="photo_e" class="col-form-label">Photo</label>
                        <input type="file" class="form-control" id="photo_e">
                    </div>
                    <div class="form-group">
                        <label for="artikel_e" class="col-form-label">Artikel</label>
                        <textarea class="form-control" id="artikel_e"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary edit">Edit</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit -->
<!-- Modal hapus -->
<div class="modal fade" id="ModalDel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <input type="text" class="form-control" id="id_hapus" hidden>

                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Yakin ingin menghapus</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger del">Hapus</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal hapus -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/style4.css") ?>">
<script type="text/javascript">
    var table;
    $(document).ready(function () {
        table = $('#mytable').DataTable({
            ajax: {
                url: base_url+"my/show_data",
                dataSrc: ''
            },
            columns: [
                {data: 'id_destination'},
                {data: 'nama_dest'},
                {render: function (data, type ,row) {
                    return '<a href="javascript:void(0);" class="btn btn-info item-edit"'+
                        'data-nama="'+row.nama_dest+
                        '"data-url="'+row.urlgmaps+
                        '"data-artikel="'+row.artikel+
                        '"data-id="'+row.id_destination+
                        '" >Edit</a>'+
                        '<a href="javascript:void(0);" class="btn btn-danger item-del" data-id="'+row.id_destination+'">Del</a>'
                }}
            ]
        });

        table.on('order.dt search.dt', function(){
		    table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) { 
		        cell.innerHTML = i + 1;
		    });
	    })

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<style>
    #content{
        width: 100%;
    }
</style>
<!-- Modal -->
<script src="<?php echo base_url("assets/js/admin.admin.js") ?>"></script>
