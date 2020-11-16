
window.onscroll = function() {
	showNav()
}

function showNav(){
	var nav = document.getElementById('nav');
	
	if(document.documentElement.scrollTop > 150 || document.body.scrollTop > 150){
		nav.style.top = '0px';
		nav.style.opacity = '0.9';
	} else {
		nav.style.top = '-55px';
		nav.style.opacity = '0';
	}
}

const button = document.querySelectorAll('button');

	button.forEach(btn => {
		btn.addEventListener('click', function (e) {
		let x = e.offsetX;
		let y = e.offsetY
		
		let ripple = document.createElement('span');

		ripple.setAttribute("class", "ripple");

		ripple.style.left = x + "px";
		ripple.style.top = y + "px";

		this.appendChild(ripple);
		setTimeout(() => {
			ripple.remove()
		}, 1000)

	})
})

// snow flakes

var nav = document.getElementById('header');

nav.addEventListener('mousemove', function(e){
let flakes = document.createElement('span');

flakes.setAttribute('class', 'flakes');
flakes.innerHTML = "&#10052;";

let x = e.offsetX;
let y = e.offsetY;

let flakeSize = Math.floor(Math.random() * 22) + 10;

flakes.style.fontSize = flakeSize + "px";
flakes.style.left = x + "px";
flakes.style.top = y + "px";

nav.appendChild(flakes);

setTimeout(() => {
		flakes.remove();
	}, 6000);
})


/*input validation*/

function checkInput(input){
	id = input.attributes[2].value;
	if (!input.checkValidity()) {
		document.getElementById(id).innerHTML = "&#x2718; " +  input.validationMessage;
	} else {
		document.getElementById(id).innerHTML = "";
	}
}

