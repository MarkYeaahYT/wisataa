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
            <button class="btn btn-info">Tambah</button>
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

<link rel="stylesheet" href="<?php echo base_url("assets/css/style4.css") ?>">

<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#mytable').DataTable();

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>