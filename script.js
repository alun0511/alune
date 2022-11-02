const audio = document.querySelector('audio');
console.log(audio);
// var x = document.getElementById("myAudio");

audio.addEventListener('click', () => {
  console.log('clicked audio');
});

const play = audio.addEventListener('play');

console.log(play);
