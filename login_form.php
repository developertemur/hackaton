<input type="text" id="user_name">
<input type="text" id="user_password">
<button type="button" class="btn btn-default" id="kirish">Kirish</button>
<script>
//555
$("#kirish").click(function(){
    
    var post={
        user_name:$("#user_name").val(),
        user_password:$("#user_password").val(),
        request:"login"
    }
    console.log(post);
    $.post("",post,function(e){
        console.log(e);
        var data=JSON.parse(e);
        if(data.status==1){
            location.reload();
        }else{
            alert(data.info);
        }
    })
})
</script>
