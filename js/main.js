$("[href]").click(function(){
    var href=$(this).attr("href");
    var body=$(this).attr("load_page");
    $.post("",{ajax:href},function(e){
if(body){
$(body).html("");
$(body).append(e);
}else{
    $(".body").html("");
    $(".body").append(e);
}
    });
   
})