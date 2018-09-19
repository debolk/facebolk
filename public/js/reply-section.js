function add_reply_section(comment_id, op_name = null) {
	var div_id = "#replies-to-" + comment_id;
	if (! $(div_id).children('.reply-form').length ) {
		$.get('/ajax/reply/' + comment_id, function(reply_section){
			$(div_id).append(reply_section);
			var reply_input = $("#reply-" + comment_id);
			if (op_name){
				$(reply_input).val("@" + op_name + ": ");
			}
			reply_input.focus();
		});
	} else {
		var reply_input = $("#reply-" + comment_id);
			if (op_name){
				$(reply_input).val("@" + op_name + ": ");
			} else {
				$(reply_input).val("");
			}
			reply_input.focus();
	}
	return false;
}