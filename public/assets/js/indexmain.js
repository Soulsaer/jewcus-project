var swiper = new Swiper(".slider-single", {
    spaceBetween: 0,
centeredSlides: true,
autoplay: {
delay: 2500,
disableOnInteraction: false,
},
});


const header = document.querySelector(".sticky-header");
const toggleClass = "is-sticky";

window.addEventListener("scroll", () => {
const currentScroll = window.pageYOffset;
if (currentScroll > 100) {
    header.classList.add(toggleClass);
} else {
    header.classList.remove(toggleClass);
}
});


$(document).ready(function(){
    $('.tab-list-inner li').click(function(){
        $('li').removeClass("active");
        $(this).addClass("active");
    });
});


var swiper = new Swiper(".seemore1", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 2000,
    disableOnInteraction: true,
},
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView:3,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  }
  
});

var swiper = new Swiper(".seemore2", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 0,
navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
},
autoplay: {
  delay: 2000,
  disableOnInteraction: true,
},
breakpoints: {
  640: {
    slidesPerView: 2,
    spaceBetween: 20,
  },
  768: {
    slidesPerView:3,
    spaceBetween: 40,
  },
  1024: {
    slidesPerView: 4,
    spaceBetween: 50,
  },
}

});

var swiper = new Swiper(".jewelry", {
    slidesPerView: 1,
    spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});
var swiper = new Swiper(".popupslider", {
  slidesPerView: 1,
  spaceBetween: 10,
navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
},
breakpoints: {
  640: {
    slidesPerView: 2,
    spaceBetween: 10,
  },
  768: {
    slidesPerView: 4,
    spaceBetween: 10,
  },
  1024: {
    slidesPerView: 5,
    spaceBetween: 20,
  },
  1200: {
    slidesPerView: 6,
    spaceBetween: 20,
  },
},
});
var swiper = new Swiper(".reviews", {
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay: {
    delay: 2500,
    disableOnInteraction: false,
},
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 1.5,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 50,
    },
  },

});

var swiper = new Swiper(".blog", {
    slidesPerView: 1,
    spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});

var swiper = new Swiper(".feature-in", {
    slidesPerView: 7,
    spaceBetween: 60,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

$(document).ready(function(){
    $("#search-icon").click(function(){
        $(".search-input-wrap").show();
    });
});

var swiper = new Swiper(".product-top", {
  slidesPerView: 2,
      spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 6,
      spaceBetween: 10,
    },
    1440: {
      slidesPerView: 6.2,
      spaceBetween: 10,
    },
  },
});

function ButtonToggle() {
  document.getElementById("myDropdown").classList.toggle("show");
}
$('.toggle-wrap button').on('click', function () {
  $(this).toggleClass('show-add-icon')
});
function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
var swiper = new Swiper(".catslider", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".customer-fav", {
  slidesPerView: 1,
navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
},
breakpoints: {
  640: {
    slidesPerView: 2,
    spaceBetween: 20,
  },
  768: {
    slidesPerView: 3,
    spaceBetween: 40,
  },
  1024: {
    slidesPerView: 4,
    spaceBetween: 50,
  },
  1440: {
    slidesPerView: 5,
    spaceBetween: 70,
  },
}
});





$('.active-btn').click(function() {
  $('.details-cat-box-prdt').toggleClass("show");
});




 $( document ).ready(function() {
  var maxChars = 255;
  var textLength = 0;
  var comment = "";
  var outOfChars = 'You have reached the limit of ' + maxChars + ' characters';

  /* initalize for when no data is in localStorage */
  var count = maxChars;
  $('#characterLeft').text(count + ' characters left');

  /* fix val so it counts carriage returns */
  $.valHooks.textarea = {
    get: function(e) {
      return e.value.replace(/\r?\n/g, "\r\n");
    }
  };

  function checkCount() {
    textLength = $('#comment').val().length;
    if (textLength >= maxChars) {
      $('#characterLeft').text(outOfChars);
    }
    else {
      count = maxChars - textLength;
      $('#characterLeft').text(count + ' characters left');
    }
  }

  /* on keyUp: update #characterLeft as well as count & comment in localStorage */
  $('#comment').keyup(function() {
    checkCount();
    comment = $(this).val();
    localStorage.setItem("comment", comment);
  });

  /* on pageload: get check for comment text in localStorage, if found update comment & count */
  if (localStorage.getItem("comment") != null) {
    $('#comment').text(localStorage.getItem("comment"));
    checkCount();
  }
});

const indexes = document.querySelectorAll('.indexes li');
const tabs = document.querySelectorAll('.tab');
const contents = document.querySelectorAll('.tab-content');

function reset() {
  for (let i = 0; i < tabs.length; i++) {
    indexes[i].style.backgroundColor  = 'rgba(255,255,255,1)';
    tabs[i].style.zIndex = 0;
    tabs[i].classList.remove('active');
    contents[i].classList.remove('active');
    indexes[i].style.fontWeight = '400';
    indexes[i].style.textDecoration  = 'none';
  }
}

function showTab(i) {
  indexes[i].style.backgroundColor  = 'rgb(245, 245, 246)';
  tabs[i].style.opacity = 1;
  tabs[i].style.zIndex = 5;
  tabs[i].classList.add('active');
  contents[i].classList.add('active');
  indexes[i].style.fontWeight = '600';
   indexes[i].style.textDecoration  = 'none';
}

function activate(e) {
  if (!e.target.matches('.indexes li')) return;
  reset();
  showTab(e.target.dataset.index);
}

const init = () => showTab(0);

window.addEventListener('load',init,false);
window.addEventListener('click',activate,false);




var swiper = new Swiper(".editblog", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  mousewheel: true,
  keyboard: true,
});

$(document).ready(function(){
	
  $('ul.tabs li').click(function(){
      var tab_id = $(this).attr('data-tab');

      $('ul.tabs li').removeClass('current');
      $('.tab-content').removeClass('current');

      $(this).addClass('current');
      $("#"+tab_id).addClass('current');
  })

})


var swiper = new Swiper(".shopmore", {
  slidesPerView: 4,
  spaceBetween: 70,
navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
},
});
var swiper = new Swiper(".submenu-slider", {
  slidesPerView: 1,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
},
});

$(document).ready(
  $('.remove-item').click(function() {
    $(wishlist-grid-box).addClass('remove-item-none');
  })
);

var mySwiper = new Swiper ('.swiper-container', {
  slidesPerView: 4,
  direction: 'horizontal',
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  
  on: {
    transitionStart: function(){
      
      var videos = document.querySelectorAll('video');

      Array.prototype.forEach.call(videos, function(video){
        video.pause();
      });
    },
    
    transitionEnd: function(){
      
      var activeIndex = this.activeIndex;
      var activeSlide = document.getElementsByClassName('swiper-slide')[activeIndex];
      var activeSlideVideo = activeSlide.getElementsByTagName('video')[0];
      activeSlideVideo.play();
    
    },
  
  }
})

$("#mobile_code").intlTelInput({
    initialCountry: "in",
    separateDialCode: true,
    
});
var mySwiper = new Swiper ('.sample-slider', {
  slidesPerView: 2,
  loop: false,
  autoplay: {
      delay: 1,
      disableOnInteraction: true,    
  },
  speed: 2000,
 
  breakpoints: {
    640: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },
})

var mySwiper = new Swiper(".video-slider", {
  slidesPerView: 4,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },
});
function openCat() {
  document.getElementById("MoreCat").style.width = "300px";
}
function closeCat() {
  document.getElementById("MoreCat").style.width = "0";
}
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}





