function react(post_id) {
	var react_form_name = "#react-" + post_id;
	$.post('/ajax/react/' + post_id, $(react_form_name).serialize(), function(new_react_form){
		$(react_form_name).replaceWith(new_react_form);
		update_reactions(post_id);
	});
	return false;
}

function update_reactions(post_id) {
	$.get('/ajax/reactions/' + post_id, function(new_reactions){
		var reactions_div = $('#reactions-' + post_id);
		reactions_div.html(new_reactions);
	});
}