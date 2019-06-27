//déclaration de toutes les varaiables nécessaires
const content = document.querySelectorAll('.sectionId');
var steps = document.querySelectorAll('.step-indicator')
var header = document.querySelector('header');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const skip = document.querySelector('.skip');
const muteBtn = document.querySelector('.muteBtn');
var pauseBtn = document.querySelector('.pauseBtn');
var currentVideo = content[0].querySelector('video');
const idlePeriod = 100;
const animationDuration = 1000;
var counter = 0;
let lastAnimation = 0;
var index = 0;

/*
  TIMELINE
*/

// sessionStorage.setItem("index", index1)
// var index2 = sessionStorage.getItem(index1);
// console.log('index: ', index2);

//content[0].scrollIntoView({ behavior: "smooth" });



//fonction qui permet d'ajouter des classes à l'élément html souhaité lors de son apparition dans le viewport
const toogleAnimation = (index, state) => {
  if (state === 'show') {
    content[index].querySelector('.box__content').classList.add('show');
    content[index].querySelector('.box__content').classList.remove('hide');
  } else if (state === 'hide') {
    content[index].querySelector('.box__content').classList.add('hide');
    content[index].querySelector('.box__content').classList.remove('show');
  }
}
// fonction pour faire apparaitre la prochaine section 
function scrollRight() {
  if (index < 9) {
    console.log('sa croll')
    index++;
    content.forEach((section, i) => {
      if (i === index) {
        if (section.querySelector('.box__content > video') != null) {
          var video = section.querySelector('.box__content > video')
          currentVideo = video
          video.currentTime = 0;
          console.log('video: ', video);
        }
        //toogleAnimation(i, 'show');
        stepAdd();
        section.scrollIntoView({ behavior: "smooth" });
      }
    })
  }
}
//console.log('currentVideo: ', currentVideo);
// fonction pour faire apparaitre la section précédente
function scrollLeft() {
  if (index > 0) {
    console.log('sa décroll')
    index--;
    localStorage.setItem('index', index);
    content.forEach((section, i) => {
      if (i === index) {
        if (section.querySelector('.box__content > video') != null) {
          var video = section.querySelector('.box__content > video')
          currentVideo = video

          video.currentTime = 0;
          console.log('video: ', video);
        }
        setTimeout(() => {
          //toogleAnimation(i + 1, 'hide');
        }, 2000);
        stepRemove();
        section.scrollIntoView({ behavior: "smooth" });
      }
    });
  }
}
console.log('currentVideo: ', currentVideo);
//navigation with arrows keys
window.onkeyup = function (e) {
  var key = e.keyCode ? e.keyCode : e.which;
  if (key == 37) {
    scrollLeft()
  } else if (key == 39) {
    scrollRight()
  } else if (key == 40) {
    index = 0
    content.forEach((section, i) => {
      if (i === index) {
        toogleAnimation(i, 'show');
        stepAdd();
        //console.log(section);
        section.scrollIntoView({ behavior: "smooth" });
      }
    })
  } else if (key == 38) {
    console.log(currentVideo);
  }
}

//Écoute du scroll par la "wheel"
document.addEventListener('wheel', event => {
  var delta = event.wheelDelta;
  var timeNow = new Date().getTime();
  // annule le scroll 
  if (delta < 0) {
    counter += 1
    if (counter % 50 === 0) {
      scrollRight()
    }
  } else {
    counter += 1
    if (counter % 50 === 0) {
      scrollLeft()
    }
  }
  lastAnimation = timeNow;
})

/*
clique sur la timeline
*/
skip.addEventListener('click', function () {
  scrollRight();
})
var stepOne = document.querySelector('.one');
stepOne.addEventListener('click', function () {
  console.log('hey2')
  index = 2;
  content.forEach((section, i) => {
    if (i === index) {
      toogleAnimation(i, 'show');
      let haveSteps = document.querySelectorAll('.completed');
      for (let i = 0; i < haveSteps.length; i++) {
        haveSteps[i].classList.remove('completed')
      }
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
      let haveSteps = document.querySelectorAll('.completed');
      for (let i = 0; i < haveSteps.length; i++) {
        haveSteps[i].classList.remove('completed')
      }
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
      let haveSteps = document.querySelectorAll('.completed');
      for (let i = 0; i < haveSteps.length; i++) {
        haveSteps[i].classList.remove('completed')
      }
      for (let i = 0; i < index; i++) {
        steps[i + 1].classList.add('completed');
      }
      steps[0].classList.add('completed');
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
      let haveSteps = document.querySelectorAll('.completed');
      for (let i = 0; i < haveSteps.length; i++) {
        haveSteps[i].classList.remove('completed')
      }
      for (let i = 0; i < index; i++) {
        steps[i + 1].classList.add('completed');
      }
      steps[0].classList.add('completed');
      section.scrollIntoView({ behavior: "smooth" });
    }
  })
})

//fonction qui ajoute la classe completed dans le bon step dans la timeline
function stepAdd() {
  if (index == 1) {
    steps[0].classList.remove('none')
    steps[0].classList.add('completed')
  }
  steps[index].classList.add('completed')
}
//fonction qui enlève la classe completed dans le bon step dans la timeline
function stepRemove() {
  steps[index + 1].classList.remove('completed')
}

/*
// VIDEO
// */

if (window.matchMedia('(prefers-reduced-motion)').matches) {
  currentVideo.removeAttribute("autoplay");
  currentVideo.pause();
}
//ajoute un effet lors de la pause de la vidéo
function vidFade() {
  currentVideo.classList.add("stopfade");
}

//fonction pour mettre pause  sur l'élément  qui à l'attreibut ended
currentVideo.addEventListener('ended', function () {
  // only functional if "loop" is removed 
  currentVideo.pause();
  // to capture IE10
  vidFade();
})

//function permettant de  mettre puase
pauseBtn.addEventListener("click", function () {
  console.log('current video' + currentVideo)
  currentVideo.classList.toggle("pauseState");
  if (currentVideo.paused) {
    currentVideo.play();
  } else {
    currentVideo.classList.toggle('pauseState')
    currentVideo.pause();
  }
})

muteBtn.addEventListener('click', function () {
  document.querySelectorAll("video").forEach(elem => muteMe(elem));
})

// function goTo() {
//   window.scrollTo(0, 0);
// }
// goTo()

/*
TOOLTIPS
*/

let toolTipsContent = document.querySelector('.tooltips__content');
let toolTips7 = document.querySelector('.tooltips--7');
let toolTips8 = document.querySelector('.tooltips--8');
let toolTips9 = document.querySelector('.tooltips--9');
let toolTips10 = document.querySelector('.tooltips--10');


toolTips7.addEventListener('click', function () {
  console.log(toolTips7);
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

/*
SON par FRAME
*/