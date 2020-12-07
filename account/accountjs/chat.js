let response = null;
let lastmessageread = "";
function sendMessage() {
    let name = document.getElementsByName('name')[0].value;
    let message = document.getElementsByName('message')[0].value;
    let university = document.getElementsByName('university')[0].value;
    let department = document.getElementsByName('department')[0].value;
    let image = document.getElementsByName('image')[0].value;

    let xmlhttp = new XMLHttpRequest;
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            response = this.responseText;
            if(response == "sent"){
                let send = document.querySelector('.send')
	            send.style.display = "none";
                document.getElementsByName('message')[0].value = "";
                document.getElementsByClassName('sent')[0].style.display = "flex";
                setTimeout(()=>{
                    document.getElementsByClassName('sent')[0].style.display = "none";
                }, 2000);
                document.getElementById('send-audio').play();
            } else {
                document.getElementsByClassName('not-sent')[0].style.display = "flex";
            }
        }
    }
    xmlhttp.open("GET", "./chat.process.php?name=" + name + "&message=" + message + "&university=" + university + "&department=" + department + "&image=" + image, true);
    xmlhttp.send();
 
	
}
function unreadMessages(){
    let xttp = new XMLHttpRequest;
    xttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('message-container').innerHTML += this.responseText; 
            if(this.responseText !== ""){
                window.scrollTo(0, document.documentElement.scrollHeight);
                runScript(this.responseText);
                document.getElementById('receive-audio').play();
            }  
        } 
    }
    xttp.open("GET", "./message.load.php?unreadmessages=true", true);
    xttp.send(); 
    
     
}
 setInterval(unreadMessages, 1000);

 function runScript(code){
     let scripts = [];
     while(code.indexOf("<script") > -1 || code.indexOf("</script") > -1){
        let start = code.indexOf("<script");
        let startEnd = code.indexOf(">", start);
        let endStart = code.indexOf("</script");
        let endEnd = code.indexOf(">", endStart);

        scripts.push(code.substring(startEnd + 1, endStart));
        code = code.substring(0, start) + code.substring(endEnd + 1);
        

     }
     for (let i = 0; i < scripts.length; i++) {
         try {
             eval(scripts[i])
         } catch (error) {
             
         }
         
     }
     setInterval(runScript, 5000)
 }
function loadMessage(){
    let xttp = new XMLHttpRequest;
    xttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let messageResponse = this.response;
            if(messageResponse !== "No more messages"){
                document.getElementById('message-container').innerHTML = this.responseText + document.getElementById('message-container').innerHTML;
            }
            if(this.responseText !== ""){
                window.scrollTo(0, document.documentElement.scrollHeight);
                runScript(this.responseText);
            }
        } 
    }
    xttp.open("GET", "./message.load.php?oldmessages=true", true);
    xttp.send();  
}
loadMessage();

function sendMessageUsingEnter(e){
     let message = document.getElementsByName('message')[0].value; 
    if(message.length > 0){
        if(e.keyCode == 13){
            sendMessage();
        }
    }
}
function preventDefaultSubmit(e){
    e.preventDefault();
}