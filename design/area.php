<!doctype><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Auto-size TextArea Demo</title>
<script type="text/javascript" src="prototype.js"></script><script>
function resizeArea(text_id, minHeight, maxHeight)
{
   var area = $(text_id);
   var area_hidden = $(text_id + "_hidden");
   var text = '';
   area.value.replace(/[<>]/g, '_').split("\n").each( function(s) {
           text = text + '<div>' + s.replace(/\s\s/g, ' &nbsp;') + '&nbsp;</div>'+"\n";
   } );
   area_hidden.innerHTML = text;
   var height = area_hidden.offsetHeight + 15;
   height = Math.max(minHeight, height);
   height = Math.min(maxHeight, height);
   area.style.height = height + 'px';
}
</script><style>
body, textarea {
       font-family: Tahoma, Arial, 'Nimbus Sans L', sans-serif;
       font-size: 13px;
}
.text {
       width:700px !important;
	border-bottom: 1px solid ;
}
.text .textarea_behavior{
       border:0;
       width:99%;
       word-wrap: break-word;
}
.text textarea{
       overflow:hidden;
}
.text .comment_text_hidden{
       position: relative;
}
.text #comment_text_hidden{
       visibility:hidden;
       position: absolute;
}

textarea {
	outline:none;
	border: none ;
	border-bottom: 1px solid ;
}

</style></head><body>
<div class="text">
       <div class="comment_text_hidden"><div class="textarea_behavior" id="comment_text_hidden"></div></div>
       <textarea class="textarea_behavior" rows="3" id="comment_text" onkeyup="resizeArea('comment_text', 45, 450);"></textarea>
</div>
</body></html>

