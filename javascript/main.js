var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active-sem");
    var content = this.nextElementSibling;
    var dropdown = this.children[1];
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
      dropdown.style.transform = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";

      dropdown.style.transform = "rotate(-180deg)";
    }
  });
}


// FOR CAROUSEL
$(document).ready(function () {
  $(".owl-carousel").owlCarousel();
});

var owl = $('.owl-carousel');
owl.owlCarousel({
  items: 4,
  loop: true,
  margin: 10,
  autoplay: true,
  autoplayTimeout: 1000,
  autoplayHoverPause: true
});

owl.owlCarousel({
  loop: true,
  margin: 10,
  responsiveClass: true,
  responsive: false
})


let search = document.getElementById('searchTxt');
search.addEventListener("input", function(){

    let inputVal = search.value.toLowerCase();
    // console.log('Input event fired!', inputVal);
    let noteCards = document.getElementsByClassName('noteCard');
    Array.from(noteCards).forEach(function(element){
        let cardTxt = element.getElementsByTagName("p")[0].innerText;
        if(cardTxt.includes(inputVal)){
            element.style.display = "block";
        }
        else{
            element.style.display = "none";
        }
        // console.log(cardTxt);
    })
})