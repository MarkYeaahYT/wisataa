$(document).ready(function () {
    $(".banner_inner").css("min-height", "500px");
    // $(".banner_inner_overlay").css("min-height", "500px");

    var url_s = window.location.href;
    var url = new URL(url_s);
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
            console.log(r)
            $("#home").css('background-image', 'url("/assets/upload/'+r[0].image+'")');
            $("#judul").text(r[0].nama_dest);
            $("#artikel").text(r[0].artikel);
            $("#visit").attr("href", r[0].urlgmaps);
        }
    });

});