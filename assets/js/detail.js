$(document).ready(function () {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var id = url.searchParams.get("id");

    $.ajax({
        type: "GET",
        url: base_url+"my/detail_xhr",
        data: {
            id: id
        },
        dataType: "JSON",
        success: function (response) {
            $(".myimg").attr("src", base_url+"uploads/"+response[0].image);
            $(".myartikel").text(response[0].artikel);
            $(".gmaps").attr("data-maps", response[0].urlgmaps);
        }
    });

    $(".gmaps").on("click", function () {
        var url = $(this).data("maps");
        window.open(url, "_blank");
    });
});