while(1)
{
	var ges=document.getElementById('guess');
	if(ges<190756)
		alert('输入小了，再试试');
	else if(ges>190756)
		alert('输入大了，再试试');
	else
		{alert('Right!!!');
		break;}
}