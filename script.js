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
        strings: ["Web developer", "CAD-CAM informatikus", "Egyetemista", "Magántanár"],
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
    // $('.scroll-up-btn').click(function(){
    //     $('html').animate({scrollTop: 0});
    // });

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
    $(".form .button_send").click(function () {

        document.querySelector(".button_send span").classList.add("button--loading");
        document.querySelector(".button_send span").innerHTML = "";

        var data = {
            "email": document.getElementById('Email').value,
            "name": document.getElementById('Name').value,
            "subject": document.getElementById('Subject').value,
            "text": document.getElementById('Message').value
        };

        fetch("https://magnificent-hen-beret.cyclic.app/email", {
            method: "POST", // or 'PUT'
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        })
            .then((response) => response.json())
            .then((data) => {
                alert("Sikeres e-mail küldés!");
                window.location.reload();

                document.querySelector(".button_send span").classList.remove("button--loading");
                document.querySelector(".button_send span").innerHTML = "Küldés!";
            })
            .catch((error) => {
                console.error("Error:", error);
                alert("Oops!");

                document.querySelector(".button_send span").classList.remove("button--loading");
                document.querySelector(".button_send span").innerHTML = "Küldés!";
            });
    })
});



// $('.aimsg').click(function(){
// const KEY= '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';
// const apiUrl = 'https://api.openai.com/v1/chat/completions';
// console.log("api url");
// const requestData = {
//   method: 'POST',
//   headers: {
//     'Content-Type': 'application/json',
//     'Authorization': `Bearer ${KEY}`
//   },
//   body: JSON.stringify({
//     model: "gpt-3.5-turbo",
//     messages: [
//       {
//         role: "user",
//         content: "Compose a poem that explains the concept of recursion in programming."
//       }
//     ]
//   })
// };

// fetch(apiUrl, requestData)
//   .then(response => response.json())
//   .then(data => console.log(data))
//   .catch(error => console.error('Error:', error));
// } 
// );



