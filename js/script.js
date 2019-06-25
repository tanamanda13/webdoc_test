const content = document.querySelectorAll('.sectionId');
var header = document.querySelector('header');
console.log('content: ', content);
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const idlePeriod = 100;
const animationDuration = 10 - 000;

var counter = 0;
let lastAnimation = 0;
var index = 0;

if (index === 0) {
  header.classList.add('inactive')
}

const toogleAnimation = (index, state) => {
  if (state === 'show') {
    setTimeout(() => {
      content[index].querySelector('.box__content').classList.add('show');
    }, 1500);

  } else {
    content[index].querySelector('.box__content').classList.remove('show');
  }
}

toogleAnimation(0, 'show');

prev.addEventListener('click', () => {
  if (index === 0) {
    header.style.opacity = "0";
  }
  if (index < 1) return;
  toogleAnimation(index, 'hide');
  index--;
  content.forEach((section, i) => {
    if (i === index) {
      toogleAnimation(i, 'show');
      stepRemove();
      section.scrollIntoView({ behavior: "smooth" });
    }
  });
})

next.addEventListener('click', () => {
  if (index !== 0) {
    header.style.opacity = "1"
  }
  if (index > 11) return;
  toogleAnimation(index, 'hide');
  index++;
  content.forEach((section, i) => {
    if (i === index) {
      toogleAnimation(i, 'show');
      stepAdd();
      console.log(section);
      section.scrollIntoView({ behavior: "smooth" });
    }
  })
})

window.onkeyup = function (e) {
  var key = e.keyCode ? e.keyCode : e.which;

  if (key == 37) {
    index--;
    content.forEach((section, i) => {
      if (i === index) {
        toogleAnimation(i, 'show');
        stepRemove();
        section.scrollIntoView({ behavior: "smooth" });
      }
    });
  } else if (key == 39) {
    index++;
    content.forEach((section, i) => {
      if (i === index) {
        toogleAnimation(i, 'show');
        stepAdd();
        console.log(section);
        section.scrollIntoView({ behavior: "smooth" });
      }
    })
  }
}

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

var steps = document.querySelectorAll('.step-indicator')
console.log('steps: ', steps);

function stepAdd() {
  if (index == 1) {
    steps[0].classList.add('completed')
  }
  steps[index].classList.add('completed')
}
function stepRemove() {
  steps[index + 1].classList.remove('completed')
}

/*
// VIDEO
*/

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

// function stopHeroTimeline() {

// }

/*
TOOLTIPS
*/
// let toolTips = document.querySelectorAll('.tooltips');
// let toolTipsContent = document.querySelectorAll('.tooltips__content');

// // A FINIR
// for (let indexToolTip = 0; indexToolTip < toolTips.length; indexToolTip++) {
//   let toolTip = toolTips[indexToolTip];
//   let toolTipContent = toolTips[indexToolTip];
//   toolTip.addEventListener('click', function () {
//     console.log(toolTips.length);
//     console.log(toolTip);
//     toolTip.classList.toggle('is-open');
//     toolTipContent.classList.toggle('is-open');
//   });
// }

// let toolTips = document.querySelector('.tooltips');
// let toolTipsContent = document.querySelector('.tooltips__content');

// toolTips.addEventListener('click', function () {
//   toolTips.classList.toggle('is-open');
//   toolTipsContent.classList.toggle('is-open');
// });

let toolTips = document.querySelector('.tooltips');
let toolTipsContent = document.querySelector('.tooltips__content');
let indexToolTip = 0;

toolTips.addEventListener('click', () => {
  content.forEach((section, i) => {
    indexToolTip++;
    if (i === indexToolTip) {
      console.log(section);
      toolTips.classList.toggle('is-open');
      toolTipsContent.classList.toggle('is-open');
    }
  })
})