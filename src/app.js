const soccer = document.querySelector('.soccerdani');
const entry = document.querySelector('.entry');
const closeBtn = document.querySelector('.closebtn');

async function getShit() {
  const shit = localStorage.getItem('scheissdrauf');
  return shit;
}

getShit().then((res) => {
  if (res === 'scheissdrauf') {
    entry.classList.add('invisible');
  }
});

function scaleDani() {
  console.log('soccer');
  soccer.classList.toggle('scale');
}

function toggleEntry() {
  entry.classList.add('invisible');
  localStorage.setItem('scheissdrauf', 'scheissdrauf');
}

soccer.addEventListener('click', scaleDani);
closeBtn.addEventListener('click', toggleEntry);
