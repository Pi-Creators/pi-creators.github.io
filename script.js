function sendMail(){
    let parms = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        subject : document.getElementById("ubject").value,
        message : document.getElementById("message").value,
    }

    emailjs.send("service_qv4o3zg","template_labeb2m",parms).then(alert("Email Sent!!"))
}