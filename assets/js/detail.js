$(document).ready(function () {
    $(".banner_inner").css("min-height", "500px");
    // $(".banner_inner_overlay").css("min-height", "500px");

    var datenow = new Date().toISOString().slice(0,10);

    var url = window.location.href;
    url = new URL(url);
    var id = url.searchParams.get("id");

    var myurl = window.location.origin;

    $.ajax({
        type: "GET",
        url: myurl+"/welcome/detail_xhr",
        data: {
            id: id
        },
        dataType: "JSON",
        success: function (r) {
            // console.log(r)
            $("#home").css('background-image', 'url("/assets/upload/'+r[0].image+'")');
            $("#judul").text(r[0].nama_dest);
            $("#artikel").text(r[0].artikel);
            $("#visit").attr("href", r[0].urlgmaps);
        }
    });

    $(".btncomment").on("click", function () {
        var nama = $("#nama").val();
        var comment = $("#comment").val();

        $.ajax({
            type: "POST",
            url: myurl+"/welcome/comentar",
            data: {
                nama: nama,
                comment: comment,
                id: id,
                date: datenow
            },
            dataType: "JSON",
            success: function (r) {
                $(".mybois").empty();
                $("#nama").val("");
                $("#comment").val("");
                // console.log(r)
                $.ajax({
                    type: "GET",
                    url: myurl+"/welcome/showcomentar_xhr",
                    data: {
                        id: id
                    },
                    dataType: "JSON",
                    success: function (r) {
                        // console.log(r)
                        r.forEach(e => {
                            html = '<hr style="height:2px;border-width:0;color:gray;background-color:gray">'
                            +'<div class="container d-flex">'
                                +'<div class="pr-2">'
                                    +'<img src="/uploads/default.png" alt="" width="35" height="35" class="rounded-circle">'
                                +'</div>'
                                +'<div>'
                                    +'<span class="text-light">'+e.nama+'</span>'
                                    
                                +'</div>'
                            +'</div>'
                            +'<div class="pt-2 container">'
                                +'<span class="text-light">'+e.comentar+'</span>'
                                +'<br>'
                                +'<small class="text-light">'+e.date+'</small>'
                            +'</div>';
                            
                            $(".mybois").append(html);
                        });
                    }
                });
            }
        });
    });

    // showcomment
    $.ajax({
        type: "GET",
        url: myurl+"/welcome/showcomentar_xhr",
        data: {
            id: id
        },
        dataType: "JSON",
        success: function (r) {
            console.log(r)
            r.forEach(e => {
                html = '<hr style="height:2px;border-width:0;color:gray;background-color:gray">'
                +'<div class="container d-flex">'
                    +'<div class="pr-2">'
                        +'<img src="/uploads/default.png" alt="" width="35" height="35" class="rounded-circle">'
                    +'</div>'
                    +'<div>'
                        +'<span class="text-light">'+e.nama+'</span>'
                        
                    +'</div>'
                +'</div>'
                +'<div class="pt-2 container">'
                    +'<span class="text-light">'+e.comentar+'</span>'
                    +'<br>'
                    +'<small class="text-light">'+e.date+'</small>'
                +'</div>';
                
                $(".mybois").append(html);
            });
        }
    });

});