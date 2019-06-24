const content = document.querySelectorAll('.sectionId');
console.log('content: ', content);
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
var counter = 0;
const idlePeriod = 100;
const animationDuration = 10 - 000;

let lastAnimation = 0;
let index = 0;


const toggleText = (index, state) => {
  if (state === 'show') {
    content[index].querySelector('.box__content').classList.add('show');
  } else {
    content[index].querySelector('.box__content').classList.remove('show');
  }
}

function scrollLeft() {
  if (index < 12) {
    toggleText(index, 'hide');
    index--;
    content.forEach((section, i) => {
      if (i === index) {
        toggleText(i, 'show');
        stepRemove();
        section.scrollIntoView({ behavior: "smooth" });
      }
    });
  } else {
    console.log('finish to scroll sir')
  }
}

function scrollRight() {
  toggleText(index, 'hide');
  index++
  content.forEach((section, i) => {
    if (i === index) {
      toggleText(i, 'show');
      stepAdd();
      section.scrollIntoView({ behavior: "smooth" });
    }
  });
}

toggleText(0, 'show');

prev.addEventListener('click', () => {
  if (index < 1) return;
  scrollLeft()
})

next.addEventListener('click', () => {
  if (index > 10) return;
  scrollRight()
})

var steps = document.querySelectorAll('.step-indicator')
console.log('steps: ', steps);

function stepAdd() {
  steps[index].classList.add('completed')
}
function stepRemove() {
  let indexPosition = index;
  if (index = 0) {
    indexPosition = -1;
  }
  if (indexPosition != -1) {
    steps[index + 1].classList.remove('completed')
    console.log('index: ', index);
  } else {
    console.log('hey: ', 'hey');
  }
}


// /*
// // VIDEO
// */

// var vid = document.getElementById("bgvid");
// var pauseButton = document.querySelector(".pauseBtn");

// if (window.matchMedia('(prefers-reduced-motion)').matches) {
//   vid.removeAttribute("autoplay");
//   vid.pause();
// }
// //make fade effect on pause
// function vidFade() {
//   vid.classList.add("stopfade");
// }

// //function to end if there's not loop attribute
// vid.addEventListener('ended', function () {
//   // only functional if "loop" is removed 
//   vid.pause();
//   // to capture IE10
//   vidFade();
// });

// //pause module
// pauseButton.addEventListener("click", function () {
//   vid.classList.toggle("stopfade");
//   if (vid.paused) {
//     vid.play();
//     pauseButton.classList.toggle('play')
//   } else {
//     vid.pause();
//     pauseButton.classList.add('pause')
//     pauseButton.classList.remove('play')
//   }
// })

/* 
SCROLL FORCÉ
*/


document.addEventListener('wheel', event => {
  var delta = event.wheelDelta;
  var timeNow = new Date().getTime();
  // Cancel scroll if currently animating or within quiet period
  if (timeNow - lastAnimation < idlePeriod + animationDuration) {
    event.preventDefault();
    return;
  }
  if (delta < 0) {
    counter += 1
    if (counter % 10 === 0) {
      var event = new Event('click');
      next.dispatchEvent(event); console.log(counter)
      stepAdd();
    }



  } else {
    counter += 1
    if (counter % 10 === 0) {
      var event = new Event('click');
      prev.dispatchEvent(event); console.log(counter)
      stepRemove();
    }
  }
  lastAnimation = timeNow;
})

/*
TOOLTIPS
*/

// let toolTips = document.querySelectorAll('.tooltips');
// let toolTipsContent = document.querySelector('.tooltips__content');

// toolTips.addEventListener('click', function () {
//   toolTips.classList.toggle('is-open');
//   toolTipsContent.classList.toggle('is-open');
// });
