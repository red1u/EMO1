window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
 document.getElementById("myBtn").onclick=function() {

 var timing = setInterval(function(){

  window.scrollBy(0,-500 );

  if( window.pageYOffset === 0){
     
    clearInterval(timing);

  }
   
  },100)
  
}

function validation(){
				if(document.sentMessage.name.value == ""){
					alert ("Merci de saisir votre Nom");
					return false;
				}else{
					if(document.sentMessage.email.value == ""){
						alert ("Merci de saisir votre Email");
						return false;
					}else{
						if(document.sentMessage.phone.value == ""){
							alert ("Merci d indiquer votre Telephone ");
							return false;
						}else{
							if(document.sentMessage.message.value == ""){
								alert ("Merci d entre votre Message ");
								return false;
							}else{
								return true;
							}
						}
					}
				}
			}