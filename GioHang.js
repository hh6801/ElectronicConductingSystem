function check1(e) {
    console.log(e.className)
    if (e.className == 'htvc1') {
        e.parentElement.style.backgroundColor = '#e5fdfd';
        e.parentElement.style.border = '1px solid #1660CF';
        document.querySelector('.trans2').style.backgroundColor = 'white';
        document.querySelector('.trans2').style.border = "white";
        var price = 20000;
    }
    if (e.className == 'htvc2') {
        e.parentElement.style.backgroundColor = '#e5fdfd';
        e.parentElement.style.border = '1px solid #1660CF';
        console.log(e.className)
        document.querySelector('.trans1').style.backgroundColor = 'white';
        document.querySelector('.trans1').style.border = "white"
        var price = 29000;
    }
    document.getElementById("phiship").innerHTML = price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
}
function check2(e) {
    console.log(e.className)
    if (e.className == 'htvc3') {
        e.parentElement.style.backgroundColor = '#e5fdfd';
        e.parentElement.style.border = '1px solid #1660CF';
        console.log(document.querySelector('.htvc4'))
        document.querySelector('.trans4').style.backgroundColor = 'white';
        document.querySelector('.trans4').style.border = "white"
    }
    if (e.className == 'htvc4') {
        e.parentElement.style.backgroundColor = '#e5fdfd';
        e.parentElement.style.border = '1px solid #1660CF';
        console.log(e.className)
        document.querySelector('.trans3').style.backgroundColor = 'white';
        document.querySelector('.trans3').style.border = "white"
    }
}

function tru() {
    var amout = Number(document.querySelector('.amount').textContent);
    console.log(amout);
    amout --;
    document.querySelector('.amount').innerHTML = amout;
    price = Number(document.querySelector('.giasp').textContent);
    price*=amout;
    document.querySelector('.gianhieusp').innerHTML = price;
}

function cong() {
    var amout = Number(document.querySelector('.amount').textContent);
    console.log(amout);
    amout ++;
    document.querySelector('.amount').innerHTML = amout;
    price = Number(document.querySelector('.giasp').textContent);
    price*=amout;
    document.querySelector('.gianhieusp').innerHTML = price;
}


