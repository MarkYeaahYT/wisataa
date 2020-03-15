$(document).ready(function () {
   
    $(".send").click(function (e) { 
        e.preventDefault();
        $("#table tr").each(function (index, element) {
            // element == this
            var minuman = $(this).find(".minuman").html();
            var harga_mi = $(this).find(".harga_mi").html();
            console.log(minuman + harga_mi);
        });
    });
});