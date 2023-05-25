function tampil() {
    var nama = document.getElementById("name").value
    var email = document.getElementById("email").value
    var message = document.getElementById("message").value
    document.getElementById("thanks").innerHTML="<b>Thank for your response. Your data recorded as :</b>"
    document.getElementById("myname").innerHTML="Hello, my name is " + "<b>" + nama + "</b>"
    document.getElementById("contactme").innerHTML="Please contact me through : " + "<b>" + email + "</b>";
    document.getElementById("saysomething").innerHTML="I want to say about : " + "<br>" + "<b>" + message + "</b>"}

function hitung(){
    var hari = 365;
    var botolPlastik = parseInt(document.getElementById("botolPlastik").value)
    var sedotan = parseInt(document.getElementById("sedotan").value)
    var putungRokok = parseInt(document.getElementById("putungRokok").value)
    
    var hasil = (botolPlastik + sedotan + putungRokok)* hari;
    document.getElementById("hasil").innerHTML="Jumlah sampah plastik tiap tahunnya adalah " +"<b>" + hasil + "<br/>"

}