var navIconList = document.getElementById('nav-icon-list');

var navLinks = navIconList.getElementsByClassName('nav-icon');

for (var i = 0; i < navLinks.length; i++) {
	navLinks[i].addEventListener("click", function() {
		let clickedIcon = document.getElementsByClassName('nav-icon-clicked');	
		this.className += " nav-icon-clicked icon-clicked-" + clickedIcon.length;

		if(clickedIcon.length > 1){
			for (var j = 0; j < clickedIcon.length; j++) {
				if (clickedIcon[j].className.indexOf('icon-clicked-0') > -1) {
				clickedIcon[j].className = clickedIcon[j].className.replace(' nav-icon-clicked icon-clicked-0', '');
				}
			}
		}
		if(clickedIcon.length == 1){
				clickedIcon[0].className = clickedIcon[0].className.replace(' nav-icon-clicked icon-clicked-1', ' nav-icon-clicked icon-clicked-0');
		}
	})
}

const buttons = document.querySelectorAll('BUTTON');

buttons.forEach(btn => {
	btn.addEventListener('click', function(e) {
		let x = e.offsetX;
		let y = e.offsetY;

		let ripple = document.createElement('span');

		ripple.setAttribute('class', 'ripple');

		ripple.style.top = y + "px";
		ripple.style.left = x + "px";

		this.appendChild(ripple);
		setTimeout(() => {
			ripple.remove();
		}, 1000)

	})
})



//chat js



function showEmoji(){
	let emojiBox = document.querySelector('.emoji-container');
	if(emojiBox.style.display == "block"){
		emojiBox.style.display = "none"
	} else {
		emojiBox.style.display = "block"
	}
}

function showMessage(){
	let messageBox = document.querySelector('.send-message');
	messageBox.style.display = "flex";
}

function hideMessage() {
	let messageBox = document.querySelector('.send-message');
	messageBox.style.display = "none";
}

function showSend(){
	let message = document.querySelector('.message-box input').value;
	let send = document.querySelector('.send')
	if(message.length > 0){
		send.style.display = "flex";
	} else {
		send.style.display = "none";
	}
}