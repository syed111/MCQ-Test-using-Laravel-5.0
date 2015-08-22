$(function(){
    $('#btn-insert').click(function(){
        var subject = $('#subject_s').val();
        var q = $('#q_description').val();
        var op1 = $('#q_opt_1').val();
        var op2 = $('#q_opt_2').val();
        var op3 = $('#q_opt_3').val();
        var op4 = $('#q_opt_4').val();
        var ans = $('#q_ans').val();
        var token = $('#token').val();
        $.ajax({
            type: "POST",
            //url:"QuestionController.php",
            url : baseUrl+ '/saveQuestion',
            data: {
                subject : subject,
                q_description  : q,
                q_opt_1  : op1,
                q_opt_2  : op2,
                q_opt_3  : op3,
                q_opt_4  : op4,
                q_ans     : ans,
                _token  : token
            },
            success: function(response){
                console.log(response);
            },
            error:function(response){
                console.log(response);
            }
        });
    });
});


