function tampil() {
    var nama = document.getElementById("name").value
    var email = document.getElementById("email").value
    var message = document.getElementById("message").value
    document.getElementById("thanks").innerHTML="<b>Thank for your response. Your data recorded as :</b>"
    document.getElementById("myname").innerHTML="Hello, my name is " + "<b>" + nama + "</b>"
    document.getElementById("contactme").innerHTML="Please contact me through : " + "<b>" + email + "</b>";
    document.getElementById("saysomething").innerHTML="I want to say about : " + "<br>" + "<b>" + message + "</b>"}