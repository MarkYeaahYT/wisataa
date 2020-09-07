$(document).ready(function () {
    $(".save").on("click", function () {
        var destination = $("#destinasi").val();
        var urlgmap = $("#urlgmap").val();
        var artikel = $("#artikel").val();

        var fd = new FormData();
        var files = $('#photo')[0].files[0];
        fd.append('file', files);
        fd.append('destination', destination);
        fd.append('urlgmaps', urlgmap);
        fd.append('artikel', artikel);

        $.ajax({
            type: "POST",
            url: base_url+"admin/add",
            processData: false,
            contentType: false,
            data: fd,
            dataType: "JSON",
            success: function (response) {
                table.ajax.reload();
                $("#addModal").modal('hide');
            }
        });
    });   
    
    // --------
    $("#mytable").on("click", ".item-edit",function () {
        var dest = $(this).data("nama");
        var url = $(this).data("url");
        var artikel = $(this).data("artikel");
        var id = $(this).data("id");

        $("#destinasi_e").val(dest);
        $("#urlgmap_e").val(url);
        $("#artikel_e").val(artikel);
        $("#id_e").val(id);

        $("#ModalEdt").modal("show");
    });

    // ---------
    $(".edit").on("click", function () {
        var dest = $("#destinasi_e").val();
        var url = $("#urlgmap_e").val();
        var artikel = $("#artikel_e").val();
        var id = $("#id_e").val();
        var editphoto = false;
        
        var fd = new FormData();
        var files;
        if($("#photo_e")[0].files.length == 0){
            editphoto = false;
            console.log("false")
        }else{
            console.log("true")
            editphoto = true;
            files = $('#photo_e')[0].files[0];

        }
        fd.append('file', files);
        fd.append('pedit', editphoto);
        fd.append('destination', dest);
        fd.append('urlgmaps', url);
        fd.append('artikel', artikel);
        fd.append('id', id);

        $.ajax({
            type: "POST",
            url: base_url+"admin/edit",
            processData: false,
            contentType: false,
            data: fd,
            dataType: "JSON",
            success: function (response) {
                table.ajax.reload();
                $("#ModalEdt").modal('hide');
            }
        });
    });

    // -------
    $("#mytable").on("click", ".item-del",function () {
        var id = $(this).data("id");
        $("#id_hapus").val(id);
        $("#ModalDel").modal("show");
    });

    // ------
    $(".del").on("click", function () {
        var id = $("#id_hapus").val();
        $.ajax({
            type: "POST",
            url: base_url+"admin/delete",
            data: {
                id:id
            },
            dataType: "JSON",
            success: function (response) {
                table.ajax.reload();
                $("#ModalDel").modal("hide");
            }
        });
    });
});