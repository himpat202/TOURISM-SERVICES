let controller = new ScrollMagic.Controller();
let timeline = new TimelineMax();

timeline
.to(".carousel-inner", 10, {y:50})
.to(".py-5",10,{top:'0%'}, '-=10')
.fromTo(".my-5", {opacity: 0}, {opacity: 1, duration: 4});



let scene = new ScrollMagic.Scene({
    triggerElement:".carousel-inner",
    duration: "100%",
    triggerHook: 0.2,

})

.setTween(timeline)
.addTo(controller);

function FormValidate(){
    var name = document.forms["index"]["user"].value;
    var email = document.forms["index"]["email"].value;
    var mobile = document.forms["index"]["mobile"].value;
    var date = document.forms["index"]["date"].value;

    if (name = "") {
        alert("Fill out the name field");
        return false;
    }

    if (email="") {
        alert("Please provide your E-mail id");
        return false;
    }

    if (mobile="") {
        alert("Fill out the mobile field");
        return false;
    }
    else if (mobile.length != 10) {
        alert("Please enter correct mobile number");
        return false;
    }
    if (date="") {
        alert("Please select Date for your service");
        return false;
    }
    
}


function myFunction() {
    alert("Your form is submitted successfully");
  }