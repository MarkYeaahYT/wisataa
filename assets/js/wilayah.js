var myurl = window.location.pathname;
var splt = myurl.split("/");
var url = window.location.origin;

$(document).ready(function () {
    $(".banner_inner").css("min-height", "300px");
    $(".banner_inner_overlay").css("min-height", "300px");
    $("#home").css('background-image', 'url("/assets/images/banner1.jpg")');

    $.ajax({
        type: "GET",
        url: url+"/welcome/select_id_wilayah",
        data: {
            id: splt[3]
        },
        dataType: "JSON",
        success: function (r) {
            console.log(r)
            r.forEach(e => {
                // console.log(e.id_destination)
                var html = ' <div class="col-lg-3 col-sm-6 mb-5">'
				+'<div class="image-tour position-relative">'
					+'<img src="/assets/upload/'+e.image+'" alt="" class="img-fluid" />'
				+'</div>'
				+'<div class="package-info">'
					// +'<h6 class="mt-1"><span class=" fa fa-map-marker mr-2"></span>.<i class="fa fa-eye"></i> 1000 <i class="fa fa-comment"></i> 55 <i class="fa fa-star">4</i> </h6>'
                    +'<a target="_blank" href="'+e.urlgmaps+'"> <span class=" fa fa-map-marker mr-2"></span></a>'
                    +'<i class="fa fa-eye"></i> '+e.visitor+' <i class="fa fa-comment"></i> '+e.comentar+' <i class="fa fa-star">00</i>'
					+'<h5 class="my-2"> '+e.nama_dest+' </h5>'
					+'<p class=""> '+e.artikel.slice(0, 75)+' ...</p>'
					+'<ul class="listing mt-3">'
					+'<a href="/welcome/detail?id='+e.id_destination+'" class="btn btn-info">Go'
					+'</ul>'
				+'</div>'
                +'</div>';
                
                $("#wilayah").append(html);
            });
        }
    });

    // 

    
});
