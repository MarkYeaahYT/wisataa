var url = window.location.origin;

$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: url+"/welcome/showdata_xhr",
        data: "",
        dataType: "JSON",
        success: function (r) {
            // console.log(r)
            r.forEach(e => {
                // console.log(e.id_destination)
                var html = '<div class="col-lg-3 col-sm-6 mb-5">'
				+'<div class="image-tour position-relative">'
					+'<img src="/assets/upload/'+e.image+'" alt="" class="img-fluid" />'
				+'</div>'
				+'<div class="package-info">'
					+'<h6 class="mt-1"><span class="fa fa-map-marker mr-2">  </span>.</h6>'
					+'<h5 class="my-2"> '+e.nama_dest+' </h5>'
					+'<p class=""> '+e.artikel+' </p>'
					+'<ul class="listing mt-3">'
					+'<a target="_blank" href="'+e.urlgmaps+'" class="btn btn-info">Go'
					+'</ul>'
				+'</div>'
                +'</div>';
                
                $("#datahere").append(html);
            });
        }
    });

    // 

    $(".btngoes").on("click", function () {
        console.log("yeah")
    });

});