x = 0;

function backspace(calc) {
    var size = calc.display.value.length;
    calc.display.value = calc.display.value.substring(0, size - 1);
}

function clean(calc) {
    calc.display.value = "";
    x = 0;
}

function pct() {
    calc.display.value = eval(calc.display.value)/100;
}

function sqr() {
    calc.display.value = Math.pow(calc.display.value, 2);
}

function sqrt() {
    calc.display.value = Math.sqrt(calc.display.value);
}
function abs() {
    calc.display.value = Math.abs(calc.display.value);
}
function log() {
    calc.display.value = Math.log(calc.display.value);
}
function fact(x) {
    function factorial(x) {
        if (x < 0) {
            return -1;
        } else if (x == 0) {
            return 1;
        } else {
            return (x * factorial(x-1));
        };
    };
    calc.display.value = factorial(calc.display.value);
}
function evaluation(calc) {  
    calc.display.value = eval(calc.display.value);
}