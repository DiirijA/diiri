const display1El = document.querySelector('.display-1');
const display2El = document.querySelector('.display-2');
const tempResultEl = document.querySelector('.temp-result');
const numbersEl = document.querySelector('.number');
const operationEl = document.querySelector('.operation');
const equalEl = document.querySelector('.equal');
const clearEl = document.querySelector('.all-clear');
const clearLastEl = document.querySelector('.last-entity-clear');

let dis1Num = '';
let dis2Num = '';
let result = null;
let lastOperation ='';
let haveDot = false;



numbersEl.forEach((number) => {
    number.addEventListener("click", (e) => {
      if (e.target.innerText === "." && !haveDot) {
        haveDot = true;
      } else if (e.target.innerText === "." && haveDot) {
        return;
      }
      dis2Num += e.target.innerText;
      display2El.innerText = dis2Num;
      // console.log();
    });
  });
/*numbersEl.forEach((number) => {
    number.addEventListener("click", (e)=> {
        if(e.target.innerText === "." && !haveDot){
            haveDot = ture;
        } else if(e.target.innerText === "." && haveDot){
            return;
        }
        dis2Num += e.target.innerText;
        display2El.innerText = dis2Num;
})
});
