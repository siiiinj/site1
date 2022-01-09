const mutedButton = volumeButton.querySelector('.muted');
const volumeButton = document.querySelector('.video-container .controls button.volume');
const fullVolumeButton = volumeButton.querySelector('.full-volume');
("#right").click(function() {
    var currentLeft = parseInt($('.items').css('left'));
    $('.items').css('left', (currentLeft - 800) + 'px');
  })
  
 
  function ouvrirPage(){
    var a = document.getElementById("search").value;
    const div = document.createElement('div');
    div.className = 'hentai';
    if (a === "dr"){
      window.location.href="#docté"
    }
    if (a === "dr stone"){
      window.location.href="#docté"
    }
    if (a === 'shoujosect'){
     window.location.href="shoujosect.php"
    }
    if (a === "sk"){
      window.location.href="#sk8"
    }
    if (a === "sk8"){
      window.location.href="#sk8"
    }
    if (a === "juju"){
      window.location.href="#jujutsu"
    }
    if (a === "docté"){
      window.location.href="#docté"
    }
    if (a === "docteur stone"){
      window.location.href="#docté"
    }   
    if (a === "demon"){
      window.location.href="#kimetsu"
    }  
    if (a === "jujutsu"){
      window.location.href="#jujutsu"
    }   
    if (a === "jajatso"){
      window.location.href="#jujutsu"
    }
    if (a === "jojotsa"){
      window.location.href="#jujutsu"
    }       
   
    if (a === "one"){
      window.location.href="#onepiece"
    } 
    if (a === "one piece"){
      window.location.href="#onepiece"
    } 
   
    if (a === "snko"){
      window.location.href="#snk"
    }
    if (a === "snk"){
      window.location.href="#snk"
    }
    if (a === "fma"){
      window.location.href="#fma"
    }    
    if (a === "dnk"){
      location.search="#dnk"
    }
    if (a === "food"){
      window.location.href="#foodwars"
    }
    if (a === "foodmerde"){
      window.location.href="#foodwars"
    }
    if (a === "foodpek"){
      window.location.href="#foodwars"
    }
    if (a === "foodwars"){
      window.location.href="#foodwars"
    }
    if (a === "food wars"){
      window.location.href="#foodwars"
    }
    if (a === "thono"){
      window.location.href="thono.html"
    }
    if (a === "dup"){
      window.location.href="Dup.html"
    }
   
  }
  function posto() {
    console.log('jsuis pas un posto');
  }
  posto();
  const toggleMute = () => {
    video.muted = !video.muted;
    if (video.muted) {
      fullVolumeButton.style.display = 'none';
      mutedButton.style.display = '';
    } else {
      fullVolumeButton.style.display = '';
      mutedButton.style.display = 'none';
    }
  };
  audioElement.play();