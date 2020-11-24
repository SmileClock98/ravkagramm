let form = document.querySelector("form");
let pass_input = document.querySelector("#pass-js");
let pass_again_input = document.querySelector("#pass_again-js");

form.addEventListener('submit', function(e) {

	if (pass_input.value != pass_again_input.value) {
		event.preventDefault();
		pass_again_input.classList.add('input-warning');
	}

});