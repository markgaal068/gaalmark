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
        strings: ["Web developer", "Korrepetítor", "Freelancer", "Egyetemista", "IT Szakember"],
        typeSpeed: 100, 
        backSpeed: 60,
        loop: true
    });

    var typed = new Typed(".typing2", {
        strings: ["Web developer", "Korrepetítor", "Freelancer", "Egyetemista", "IT Szakember"],
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
    function Submit(){
    fetch('https://markxd.herokuapp.com/email', {
            method: 'POST',
            body: JSON.stringify({
                "email": document.getElementById('Email'),
                "name":  document.getElementById('Name'),
                "subject":  document.getElementById('Subject'),
                "text":  document.getElementById('Message')
            })
        })
            .then(response => response.json())
            .then(response => console.log(JSON.stringify(response)))
}

});
