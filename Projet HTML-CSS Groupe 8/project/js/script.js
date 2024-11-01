


var swiper = new Swiper(".home-slider", {
    loop:true,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
    autoplay: {
        delay: 3000, // set the delay between transitions in milliseconds
        disableOnInteraction: false, // allows the autoplay to continue even when the user interacts with the slider
      },
  });
  var swiper = new Swiper(".reviews-slider", {
    slidesPerView: "auto",
    spaceBetween: 30,
    grabCursor:true,
    loop:true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  let loadMoreBtn = document.querySelector('.packages .load-more .btn');
  let currentItem = 3;
  let soon = document.querySelector('.packages .soon')
  let boxes = [...document.querySelectorAll('.packages .box-container .box')];
  console.log(boxes.length);
  
  loadMoreBtn.onclick = () => {
    boxes = [...document.querySelectorAll('.packages .box-container .box')];
    if (currentItem < boxes.length) {
      for (let i = currentItem; i < currentItem + 3; i++) {
        if (boxes[i]) {
          boxes[i].style.display = 'inline-block';
        }
      }
      currentItem += 3;
    }
    if (currentItem >= boxes.length) {
      loadMoreBtn.style.display = 'none';
      soon.style.display='block'
    }
  };
 









