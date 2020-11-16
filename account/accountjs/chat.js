let response = null;
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
                    document.getElementsByName('message')[0].value = "";
                document.getElementsByClassName('sent')[0].style.display = "flex";
                setTimeout(()=>{
                    document.getElementsByClassName('sent')[0].style.display = "none";
                }, 2000)
            } else {
                document.getElementsByClassName('not-sent')[0].style.display = "flex";
            }
        }
    }
    xmlhttp.open("GET", "./chat.process.php?name=" + name + "&message=" + message + "&university=" + university + "&department=" + department + "&image=" + image);
    xmlhttp.send();
    console.log(department);
}

function loadNewMessages(){
    let messageLenght = document.getElementsByClassName('')
}
