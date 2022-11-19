const home = document.getElementById('home');
const admin = document.getElementById('admin');
const register = document.getElementById('register');
const about = document.getElementById('about');
const contact = document.getElementById('contact');



admin.addEventListener('click',()=>{
    window.location.href="./adminlog.php"
});
home.addEventListener('click',()=>{
    window.location.href="./index.html";
    con.classList.add("off");
    console.log("hi")
})
register.addEventListener('click',()=>{
    window.location.href="./registration.php";
})


