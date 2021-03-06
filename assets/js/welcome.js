var url = window.location.origin;

$(document).ready(function () {
    $(".banner_inner").css("min-height", "300px");
    $(".banner_inner_overlay").css("min-height", "300px");
    $("#home").css('background-image', 'url("/assets/images/banner1.jpg")');

    $.ajax({
        type: "GET",
        url: url+"/welcome/showdata_xhr",
        data: "",
        dataType: "JSON",
        success: function (r) {
            // console.log(r)
            r.forEach(e => {
                if(e.rating != null){
                    var html = ' <div class="col-lg-3 col-sm-6 mb-5">'
                    +'<div class="image-tour position-relative">'
                        +'<img src="/assets/upload/'+e.image+'" alt="" class="img-fluid" />'
                    +'</div>'
                    +'<div class="package-info">'
                        +'<a target="_blank" href="'+e.urlgmaps+'"> <span class=" fa fa-map-marker mr-2"></span></a>'
                        +'<i class="fa fa-eye"></i> '+e.visitor+' <i class="fa fa-comment"></i> '+e.comentar+' <i class="fa fa-star">'+e.rating.slice(0, 3)+'</i>'
                        +'<h5 class="my-2"> '+e.nama_dest+' </h5>'
                        +'<p class=""> '+e.artikel.slice(0, 75)+' ...</p>'
                        +'<ul class="listing mt-3">'
                        +'<a href="/welcome/detail?id='+e.id_destination+'" class="btn btn-info">Go'
                        +'</ul>'
                    +'</div>'
                    +'</div>';
                }else{
                    var html = ' <div class="col-lg-3 col-sm-6 mb-5">'
                    +'<div class="image-tour position-relative">'
                        +'<img src="/assets/upload/'+e.image+'" alt="" class="img-fluid" />'
                    +'</div>'
                    +'<div class="package-info">'
                        +'<a target="_blank" href="'+e.urlgmaps+'"> <span class=" fa fa-map-marker mr-2"></span></a>'
                        +'<i class="fa fa-eye"></i> '+e.visitor+' <i class="fa fa-comment"></i> '+e.comentar+' <i class="fa fa-star">0</i>'
                        +'<h5 class="my-2"> '+e.nama_dest+' </h5>'
                        +'<p class=""> '+e.artikel.slice(0, 75)+' ...</p>'
                        +'<ul class="listing mt-3">'
                        +'<a href="/welcome/detail?id='+e.id_destination+'" class="btn btn-info">Go'
                        +'</ul>'
                    +'</div>'
                    +'</div>';

                }
                
                $("#datahere").append(html);
            });
        }
    });

    // 

    // $(".urlgmaps").on("click", function () {
    //     console.log("yeah")
    // });

    $("#cari").on("keypress", function (e) {
        if (e.which == 13) {
            $("#datahere").empty();
            $.ajax({
                type: "POST",
                url: url+"/welcome/cari_xhr",
                data: {
                    cari: $(this).val()
                },
                dataType: "JSON",
                success: function (r) {
                    // console.log(r)
                    r.forEach(e => {
                        // console.log(e.id_destination)
                        var html = ' <div class="col-lg-3 col-sm-6 mb-5">'
                        +'<div class="image-tour position-relative">'
                            +'<img src="/assets/upload/'+e.image+'" alt="" class="img-fluid" />'
                        +'</div>'
                        +'<div class="package-info">'
                            +'<h6 class="mt-1"><span class="fa fa-map-marker mr-2">  </span>.</h6>'
                            +'<h5 class="my-2"> '+e.nama_dest+' </h5>'
                            +'<p class=""> '+e.artikel.slice(0, 75)+' ...</p>'
                            +'<ul class="listing mt-3">'
					        +'<a href="/welcome/detail?id='+e.id_destination+'" class="btn btn-info">Go'
                            +'</ul>'
                        +'</div>'
                        +'</div>';
                        
                        $("#datahere").append(html);
                    });
					window.scroll({top: 150,down: 0, behavior: "smooth"})
                }
            });
        }
    });
});
