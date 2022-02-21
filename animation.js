function show(){
var pswrd = document.getElementById('pswrd');
var icon = document.querySelector('.show');
if(pswrd.type==="password"){
    pswrd.type="text";
    icon.textcontrnt ="hide";
    icon.style.color="#3498db";
}
else{
    pswrd.type="password";
    icon.style.color="#222";
}
}