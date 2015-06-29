var store = null;
var limit = null;

$(document).ready(function(){

  $("#list").on('click',".glyphicon-remove",function(){
    $(this).parent('a').remove();
    var item = $(this).parent('a').text();
    $.post('remove.php',{ item: item}).done(function(){ 
      update_list();
    });
  });

  $('#submit').click(function(){
    var list = $("#entry").val();
    list = list.split(",");
    var store = list[0].toUpperCase();
    for(var i = 1;i<list.length;i++){
      $.post('submit.php',{ store:store,item:list[i].toUpperCase() }).done(function(){
        update_list();
        $("#entry").val("");
      });
    }
  });


  $("#list").on("click",".store",function(){
    //alert("test"); 
    limit=$(this).parent("div").attr("id");
    update_list();
  });

  $("#showAll").click(function(){
    limit = null;
    update_list();
  });

  setInterval(function(){
    update_list();
  },5000);

  update_list();
});

function update_list(){
  $.getJSON( 'get.php', function( data ) {
    $("#list").html("");
    data.forEach(function(item){
      if(store != item.store){
        store=item.store;
        $("#list").append('<div id="store_'+item.store+'" class="list-group"></div>');    
        $("#store_"+item.store).append('<a href="#" id="'+item.store+'" class="list-group-item active store">'+item.store+'</a>');
      }

      $("#store_"+item.store).append('<a href="#" id="'+item.item+'" class="list-group-item">'+item.item+'<span class="glyphicon glyphicon-remove pull-right"></a>');
        
    });
  }).done(function(){
    store=null

    if(limit != null){
      $(".list-group").each(function(idex){
        
        var id = $(this).attr('id')
        if(id != limit){
          $(this).hide();
        }        
      });
    };
  });
};

