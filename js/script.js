//déclaration de toutes les vvaraiables nécessaires
const content = document.querySelectorAll('.sectionId');
var steps = document.querySelectorAll('.step-indicator')
var header = document.querySelector('header');
var footer = document.querySelector('.footer');
const prev = document.querySelector('.prev');
const skipBtn = document.querySelector('.skip');
const muteBtn = document.querySelector('.muteBtn');
var pauseBtn = document.querySelector('.pauseBtn');
var currentVideo = content[0].querySelector('video');
var currentAudio;
var videos = document.querySelectorAll('video');
var audios = document.querySelectorAll('audio');
var closeAdd = document.querySelector('.disable__adblock');
const idlePeriod = 100;
const animationDuration = 1000;
var counter = 0;
var counterAdd = 1;
var modulo = 60;
let lastAnimation = 0;
var index = -1;

/*
  TIMELINE
*/

// sessionStorage.setItem("index", index1)
// var index2 = sessionStorage.getItem(index1);
// console.log('index: ', index2);

//content[0].scrollIntoView({ behavior: "smooth" });

// if (index == -1 || index ==0 ) {
//   header.style.opacity="0"
// }

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
    for (let i = 0; i < audios.length; i++) {
      audios[i].pause();
    }
    console.log(currentAudio)
    index++;
    content.forEach((section, i) => {
      if (i === index) {
        if (section.querySelector('.box__content > video') != null) {
          var video = section.querySelector('.box__content > video')
          currentVideo = video
          currentVideo.play();
          video.currentTime = 0;
          console.log('currentVideo: ', currentVideo);
        }
        if (section.querySelector('.box__content > audio') != null) {
          var audio = section.querySelector('.box__content > audio')
          currentAudio = audio
          currentAudio.play()
          audio.currentTime = 0;
          console.log('currentAudio: ', currentAudio);
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
  for (let i = 0; i < audios.length; i++) {
    audios[i].pause();
  }
  if (index > 0) {
    console.log('sa décroll')
    index--;
    console.log(currentVideo)
    localStorage.setItem('index', index);
    content.forEach((section, i) => {
      if (i === index) {
        if (section.querySelector('.box__content > video') != null) {
          var video = section.querySelector('.box__content > video')
          currentVideo = video
          currentVideo.play()
          video.currentTime = 0;
        }
        if (section.querySelector('.box__content > audio') != null) {
          var audio = section.querySelector('.box__content > audio')
          currentAudio = audio
          currentAudio.play()
          audio.currentTime = 0;
          console.log('current audio: ', currentAudio);
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
    console.log(currentAudio);
  }
}

//Écoute du scroll par la "wheel"
document.addEventListener('wheel', event => {
  var delta = event.wheelDelta;
  var timeNow = new Date().getTime();
  // annule le scroll 
  if (delta < 0) {
    counter += counterAdd
    if (counter % modulo === 0) {
      scrollRight()
    }
  } else {
    counter += counterAdd
    if (counter % modulo === 0) {
      scrollLeft()
    }
  }
  lastAnimation = timeNow;
})

/*
clique sur la timeline
*/

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

for (let i = 0; i < videos.length; i++) {
  videos[i].pause();
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

//function permettant de  mettre pause
pauseBtn.addEventListener("click", function () {
  if (currentVideo.paused) {
    currentVideo.play();
    pauseBtn.className = "pauseBtn pause"
  } else {
    //currentVideo.classList.add('pauseState')
    currentVideo.pause();
    pauseBtn.className = "pauseBtn play"
  }
})

muteBtn.addEventListener('click', function () {
  if (videos[0].muted || audios[0].muted) {
    muteBtn.className = "pauseBtn muteOff"
    for (let i = 0; i < videos.length; i++) {
      videos[i].muted = false;
    }
    for (let i = 0; i < audios.length; i++) {
      audios[i].muted = false
    }
  } else {
    muteBtn.className = "pauseBtn muteOn"
    for (let i = 0; i < videos.length; i++) {
      videos[i].muted = true;
    }
    for (let i = 0; i < audios.length; i++) {
      audios[i].muted = true;
    }
  }
})

skipBtn.addEventListener('click', function () {
  scrollRight();
})
closeAdd.addEventListener('click', function () {
  document.querySelector('.adblock').remove();
  index = 0;
  videos[0].play();
})

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
let toolTipsBlob = document.querySelector('.tooltips--Blob');


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

toolTipsBlob.addEventListener('click', function () {
  toolTipsBlob.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});


/*
SON par FRAME
*/