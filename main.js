var store = null;
var limit = null;
var itemNum;
var list;

$(document).ready(function(){
  //hide progess bar
  $(".progress").fadeOut('slow');

  $("#list").on('click',".glyphicon-remove",function(){
    var pos = document.body.scrollTop;
    $(this).parent('a').remove();
    var item = $(this).parent('a').text();
    $.post('remove.php',{ item: item}).done(function(){ 
      window.scrollTo(0, pos);
      update_list();
    },pos);
  });

  $('#submit').click(function(){
    itemNum = 1;
    $("#progress").css("width","0%");
    $(".progress").fadeIn();

    list = $("#entry").val();
    list = list.split(",");
    var store = list[0].toUpperCase();
    for(var i = 1;i<list.length;i++){
      if(list[i] != ""){
        $.post('submit.php',{ store:store,item:list[i].replace(/'/g, "`").toUpperCase() }).done(function(){
          update_list();
          itemNum+=1;
          var percent = Math.round(itemNum/list.length*100);
          $("#progress").css("width",percent+"%");

          if(percent == 100){
            $(".progress").fadeOut('slow');
          }
        });
      }
    }
    $("#entry").val("");

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
        storeID = store.replace(/ /g,"_");
        storeID = storeID.replace(/'/g,"_");
        $("#list").append('<div id="store_'+storeID+'" class="list-group"></div>');    
        $("#store_"+storeID).append('<a href="#" id="'+storeID+'" class="list-group-item active store">'+item.store+'</a>');
      }

      storeID = store.replace(/ /g,"_");
      storeID = storeID.replace(/'/g,"_");
      $("#store_"+storeID).append('<a href="#" id="'+item.item+'" class="list-group-item">'+item.item+'<span class="glyphicon glyphicon-remove pull-right"></a>');
        
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

