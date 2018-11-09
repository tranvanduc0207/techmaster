// Thay đổi font chữ cả 3 đoạn văn bằng giá trị x (px)
function changeFontSize(x) {
var p = document.getElementsByClassName('para');
	for (i = 0; i < p.length; i++) {
		p[i].style.fontSize = x;
	}
};
// Execute
changeFontSize("18px");

// Tăng kích thước font chữ đoạn văn có id là x lên 1px
function increaseFontSize(x) {
	var pa = document.querySelector(x);
	style = window.getComputedStyle(pa, null).getPropertyValue('font-size');
	currSize = parseFloat(style);
	if (currSize < 30) {
		pa.style.fontSize = (currSize + 1) + 'px';
	} else {
		pa.style.fontSize = currSize + 'px';
	}
}
// Execute
increaseFontSize("#p3");

// Giảm kích thước font chữ đoạn văn có id là x xuống 1px
function decreaseFontSize(x) {
	var pa = document.querySelector(x);
	style = window.getComputedStyle(pa, null).getPropertyValue('font-size');
	currSize = parseFloat(style);
	if (currSize > 10) {
		pa.style.fontSize = (currSize - 1) + 'px';
	} else {
		pa.style.fontSize = currSize + 'px';
	};
};
// Execute
decreaseFontSize("#p1");

// Thay đổi màu 3 đoạn văn
function changeColor() {
	var p = document.querySelectorAll('p');
	p[0].style.color = "blue";
	p[1].style.color = "yellow";
	p[2].style.color = "red";
};
// Execute
changeColor();

// Thay đổi màu nền
function changeBgColor(x) {
	document.querySelector('div').style.backgroundColor = x;
};
// Execute
changeBgColor("pink");

// Sao chép nội dung đoạn văn 1,2
function copyContent(x, y) {
	document.getElementById(x).innerHTML = document.getElementById(y).innerHTML;
};
// Execute
copyContent('p1', 'p2');