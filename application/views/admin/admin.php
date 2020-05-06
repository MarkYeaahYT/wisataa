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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open </button>

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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/style4.css") ?>">
<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#mytable').DataTable();

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
