$(function(){
    $('#save').click(function(){
       let name = $('#name').val();
       let email = $('#email').val();
       let title = $('#title').val();
       let body = $('#body').val();
       console.log(body);
       $.ajax({
           method: 'Post',
           url: '/ajax_add_data.php',
           data: `name=${name}&email=${email}&title=${title}&body=${body}`,
           success:function(data){
               $('#empty').prepend(data);
           }
       })
    });
})