$(document).ready(function () {

    $('#add_comments_button').click(function () {
        if($("#text").val()==="")
        {
            alert("Введите текст!");
            return false;
        }
        var name = document.getElementById('username').value;
        var text = document.getElementById('text').value;
        $.post('add_coment.php',
            {name:name,text:text},
            function(responsd){
                $("#responsd").append(responsd);
                $("#text").val('');
                $("#username").val('');
                location.reload();
        },'text');

    });


    $('.del_button').click(function (){
        var clickedID = this.id.split("-");
        var delet = clickedID[1];
        console.log(delet)
        $.post(
            'delet_coment.php',{delet:delet},function(responsd){
                $('#comment_'+delet).fadeOut("slow");
                location.reload();
            },'text'
        );
    });
})
