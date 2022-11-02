//No 1
let gantiText = document.querySelector('#ubah');
gantiText.innerText = 'Textnya berubah(no1)';

//No 2
let elementbaru = document.createElement('button');
elementbaru.innerHTML = 'Klik Saya';
console.log(elementbaru);
let newClass = document.querySelector('#event');
newClass.appendChild(elementbaru);

//No 3
let eventListener = document.createElement('h3');
eventListener.innerHTML = 'Anda menekan button sebanyak <span id="hitung">0</span> kali(no 3)';
document.body.appendChild(eventListener);
let biji = document.getElementById('event');
const color = ['#FF0000', '#cc00ff', '#2A00FF', '#01FF54', '#FFD800', '#FF8400'];
let i = 0;
biji.addEventListener('click', function (event) {
  document.querySelector('#hitung').innerText++;
  i++;
  if (i >= color.length) {
    i = 0;
  }
  document.querySelector('#hitung').style.color = color[i];
});
