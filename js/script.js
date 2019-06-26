const content = document.querySelectorAll('.sectionId');
var header = document.querySelector('header');
console.log('content: ', content);
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const idlePeriod = 100;
const animationDuration = 1000;

if (index == 0) {
  header.className = "inactive";
}
//
var stepOne = document.querySelector('.one');
stepOne.addEventListener('click', function () {
  console.log('hey2')
  index = 2;
  content.forEach((section, i) => {
    if (i === index) {
      toogleAnimation(i, 'show');
      steps[0].classList.add('completed');
      for (let i = 0; i < index; i++) {
        steps[i + 1].classList.add('completed');
      }
      section.scrollIntoView({ behavior: "smooth" });
    }
  })
})
//
var stepTwo = document.querySelector('.two');
stepTwo.addEventListener('click', function () {
  index = 4;
  content.forEach((section, i) => {
    if (i === index) {
      toogleAnimation(i, 'show');
      steps[0].classList.add('completed');
      for (let i = 0; i < index; i++) {
        steps[i + 1].classList.add('completed');
      }
      section.scrollIntoView({ behavior: "smooth" });
    }
  })
})
//
var stepThree = document.querySelector('.three')
stepThree.addEventListener('click', function () {
  console.log('hey3')
  index = 6;
  content.forEach((section, i) => {
    if (i === index) {
      toogleAnimation(i, 'show');
      for (let i = 0; i < index; i++) {
        steps[i + 1].classList.add('completed');
      }

      section.scrollIntoView({ behavior: "smooth" });
    }
  })
})
//
var stepFour = document.querySelector('.four')
stepFour.addEventListener('click', function () {
  console.log('hey4')
  index = 8;
  content.forEach((section, i) => {
    if (i === index) {
      toogleAnimation(i, 'show');
      for (let i = 0; i < index; i++) {
        steps[i + 1].classList.add('completed');
      }

      section.scrollIntoView({ behavior: "smooth" });
    }
  })
})
//

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

//toogleAnimation(0, 'show');

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
  if (index > 14) return;
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
    if (index !== 0) {
      header.style.opacity = "1"
    }
    index++;
    content.forEach((section, i) => {
      if (i === index) {
        toogleAnimation(i, 'show');
        stepAdd();
        console.log(section);
        section.scrollIntoView({ behavior: "smooth" });
      }
    })
  } else if (key == 40) {
    if (index !== 0) {
      header.style.opacity = "1"
    }
    index = 0
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
//scroll listener
document.addEventListener('wheel', event => {
  var delta = event.wheelDelta;
  var timeNow = new Date().getTime();
  // Cancel scroll if currently animating or within quiet period
  if (delta < 0) {
    counter += 1
    if (counter % 50 === 0) {
      var event = new Event('click');
      next.dispatchEvent(event);
      console.log(counter)
      stepAdd();
    }
  } else {
    counter += 1
    if (counter % 50 === 0) {
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

/*
TOOLTIPS
*/

let toolTipsContent = document.querySelector('.tooltips__content');
let toolTips1 = document.querySelector('.tooltips--1');
let toolTips2 = document.querySelector('.tooltips--2');
let toolTips3 = document.querySelector('.tooltips--3');
let toolTips4 = document.querySelector('.tooltips--4');
let toolTips5 = document.querySelector('.tooltips--5');
let toolTips6 = document.querySelector('.tooltips--6');
let toolTips7 = document.querySelector('.tooltips--7');
let toolTips8 = document.querySelector('.tooltips--8');
let toolTips9 = document.querySelector('.tooltips--9');
let toolTips10 = document.querySelector('.tooltips--10');
let toolTips11 = document.querySelector('.tooltips--11');
let toolTips12 = document.querySelector('.tooltips--12');

toolTips1.addEventListener('click', function () {
  toolTips1.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});

toolTips2.addEventListener('click', function () {
  toolTips2.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});

toolTips3.addEventListener('click', function () {
  toolTips3.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});

toolTips4.addEventListener('click', function () {
  toolTips4.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});

toolTips5.addEventListener('click', function () {
  toolTips5.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});

toolTips6.addEventListener('click', function () {
  toolTips6.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});

toolTips7.addEventListener('click', function () {
  toolTips7.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});

toolTips8.addEventListener('click', function () {
  toolTips8.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});

toolTips9.addEventListener('click', function () {
  toolTips9.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});

toolTips10.addEventListener('click', function () {
  toolTips10.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});

toolTips11.addEventListener('click', function () {
  toolTips11.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});