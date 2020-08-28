(function($){
	$(document).ready(function(){
		//Delete Button Action Control
		$(document).on('click', 'a#delete_data', function(e){
			// e.preventDefault();
			let conf = confirm('Are you sure !');
			if (conf) {
				return true;
			}else{
				return false;
			}
		});
	});
})(jQuery)