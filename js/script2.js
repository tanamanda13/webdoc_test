//déclaration de toutes les vvaraiables nécessaires
const content = document.querySelectorAll('.sectionId');
var steps = document.querySelectorAll('.step-indicator')
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
var counter = 0;
var counterAdd = 1;
var modulo = 60;
let lastAnimation = 0;
var index = 0;

/*
  TIMELINE
*/

// sessionStorage.setItem("index", index1)
// var index2 = sessionStorage.getItem(index1);
// console.log('index: ', index2);

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

function checkMedia(section) {
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
}
//
// fonction pour faire apparaitre la prochaine section 
function scrollRight() {
  if (index < 3) {
    for (let i = 0; i < audios.length; i++) {
      audios[i].pause();
    }
    for (let i = 0; i < videos.length; i++) {
      videos[i].pause();
    }
    console.log(currentAudio)
    index++;
    content.forEach((section, i) => {
      if (i === index) {
        checkMedia(section)
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
  for (let i = 0; i < videos.length; i++) {
    videos[i].pause();
  }
  if (index > 0) {
    console.log('sa décroll')
    index--;
    console.log(currentVideo)
    localStorage.setItem('index', index);
    content.forEach((section, i) => {
      if (i === index) {
        checkMedia(section);
        setTimeout(() => {
          //toogleAnimation(i + 1, 'hide');
        }, 2000);
        stepRemove();
        section.scrollIntoView({ behavior: "smooth" });
      }
    });
  }
}
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
  } else if (key == 32) {
    if (currentAudio.paused) {
      currentAudio.play()
      pauseBtn.className = "pauseBtn pause"
    } else {
      currentAudio.pause()
      pauseBtn.className = "pauseBtn play"
    }
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
document.querySelector('.six').addEventListener('click', function () {
  pauseMedia()
  console.log('hey3')
  index = 3;
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
      checkMedia(section);
      section.scrollIntoView({ behavior: "smooth" });
    }
  })
})
//
document.querySelector('.five').addEventListener('click', function () {
  pauseMedia()
  console.log('hey3')
  index = 0;
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
      checkMedia(section);
      section.scrollIntoView({ behavior: "smooth" });
    }
  })
})
//
function pauseMedia() {
  if (currentVideo != null) {
    currentVideo.pause()
  } else {
    currentAudio.pause()
  }
}
//
function playMedia() {
  if (currentVideo != null) {
    currentVideo.play()
  } else {
    currentAudio.play()
  }
}
//fonction qui ajoute la classe completed dans le bon step dans la timeline
steps[0].classList.add('completed')
function stepAdd() {
  steps[index].classList.add('completed')
}
//fonction qui enlève la classe completed dans le bon step dans la timeline
function stepRemove() {
  steps[index + 1].classList.remove('completed')
}

/*
// VIDEO
// */

//init toutes les vidéos en pause
for (let i = 0; i < videos.length; i++) {
  videos[i].pause()
}
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
    muteBtn.className = "muteBtn muteOn"
    for (let i = 0; i < videos.length; i++) {
      videos[i].muted = false;
    }
    for (let i = 0; i < audios.length; i++) {
      audios[i].muted = false
    }
  } else {
    muteBtn.className = "muteBtn muteOff"
    for (let i = 0; i < videos.length; i++) {
      videos[i].muted = true;
    }
    for (let i = 0; i < audios.length; i++) {
      audios[i].muted = true;
    }
  }
})
//
skipBtn.addEventListener('click', function () {
  scrollRight();
})

/*
TOOLTIPS
*/

let toolTipsContent = document.querySelector('.tooltips__content');
let toolTips7 = document.querySelector('.tooltips--7');
let toolTips8 = document.querySelector('.tooltips--8');
let toolTips9 = document.querySelector('.tooltips--9');
let toolTips10 = document.querySelector('.tooltips--10');
//
toolTips7.addEventListener('click', function () {
  toolTips7.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});
//
toolTips8.addEventListener('click', function () {
  toolTips8.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});
//
toolTips9.addEventListener('click', function () {
  toolTips9.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});
//
toolTips10.addEventListener('click', function () {
  toolTips10.classList.toggle('is-open');
  toolTipsContent.classList.toggle('is-open');
});