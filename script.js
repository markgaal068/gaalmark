$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky")
        }else{
            $('.navbar').removeClass("sticky")
        }
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("asd")
        }else{
            $('.scroll-up-btn').removeClass("asd")
        }
    });


    //typing animation script
    var typed = new Typed(".typing", {
        strings: ["Web developer", "Korrepetítor", "Freelancer", "Egyetemista"],
        typeSpeed: 100, 
        backSpeed: 60,
        loop: true
    });

    var typed = new Typed(".typing2", {
        strings: ["Web developer", "Korrepetítor", "Freelancer", "Egyetemista"],
        typeSpeed: 100, 
        backSpeed: 60,
        loop: true
    });


    //slide up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
    });

    //togle menui/navbar script
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });


    $('.navbar .menu a').click(function(){
        $('.navbar .menu').removeClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    
    //Email cucc
    $(".form .submit").click(function(){

        var data = {
            "email": document.getElementById('Email').value,
            "name":  document.getElementById('Name').value,
            "subject":  document.getElementById('Subject').value,
            "text":  document.getElementById('Message').value
          };

        var json = JSON.stringify(data);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "https://markxd.herokuapp.com/email");
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.send(json);
    })

});
