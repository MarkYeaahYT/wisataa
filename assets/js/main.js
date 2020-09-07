$(document).ready(function () {
      $.ajax({
         type: "GET",
         url: base_url+"my/show_data",
         data: "",
         dataType: "JSON",
         success: function (response) {
            response.forEach(element => {

               var html ='<div class="col-md-4 pb-3">'+
                  '<a href=" '+ base_url+"my/detail/?id="+element.id_destination+' ">'+
                      '<div class="card" style="width: 18rem;">'+
                        '<img class="card-img-top" src="' + base_url+"uploads/"+element.image + '" alt="Card image cap">'+
                          '<div class="card-body bg-light">'+
                              '<h5 class="card-title">'+ element.nama_dest +'</h5>'+
                          '</div>'+
                      '</div>'+
                  '</a>'+
               '</div>';

               $(".datashow").append(html);
            });
         }
      });
});