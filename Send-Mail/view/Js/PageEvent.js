const pageLink = document.querySelectorAll(".pageLink"),
        
      for (let i = 0; i < pageLink.length; i++) {
        pageLink[i].addEventListener("click", function(e) {
          e.preventDefault();
        });
      }

//Whatssp Button

$(function () {
  $('#myButton').floatingWhatsApp({
      phone: '+212631686308',
      popupMessage: 'Bonjour Comment pouvons-nous vous aider',
      message: "",
      showPopup: true,
      showOnIE: false,
      headerTitle: 'Welcome!',
      headerColor: 'crimson',
      backgroundColor: 'crimson',
      buttonImage: '<img src="whatsapp.svg" />'
  });
});