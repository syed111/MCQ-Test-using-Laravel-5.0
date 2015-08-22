<input type="hidden" value="{{csrf_token()}}" name="_token">
<?php
	// ['a'],$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],$_POST['f'],$_POST['g'])
if (isset($_POST['subject'],$_POST['q_description'],$_POST['q_op_1'],$_POST['q_op_2'],$_POST['q_op_3'],$_POST['q_op_4'],
			$_POST['q_ans']))
{
	alert('success');
}