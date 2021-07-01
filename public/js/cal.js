var rangeSlider = document.getElementById("rs-range-line");
var rangeBullet = document.getElementById("rs-bullet");
rangeSlider.addEventListener("input", showSliderValue, false);
var sum2 = document.getElementById('sum2');
var sum3 = document.getElementById('sum3');
var sum4 = document.getElementById('sum4');
var packages = document.getElementById('packages')
var beginningOfWork = document.getElementById('beginningOfWork')
var sumToWithdraw = document.getElementById('sumToWithdraw')
var minimumSum = document.getElementById('minimumSum')
var maximumSum = document.getElementById('maximumSum')
var beginningOfWorkTwo = document.getElementById('beginningOfWorkTwo')
function showSliderValue() {
    console.log('asd');

    rangeBullet.innerHTML = rangeSlider.value;
    sum2.innerHTML = rangeSlider.value/100;
    var  sum = (rangeSlider.value/100);
    sum4.innerHTML = Math.round(sum * 365);

    document.getElementById('rs-bullet').value = rangeSlider.value;
}
$("input[name='money']").change(function() {
    if ($("input[value='Global Start']").prop("checked")) {
        packages.innerHTML = 'Global Start';
        beginningOfWork.innerHTML= '18';
        sumToWithdraw.innerHTML = '70%';
        minimumSum.innerHTML = '$100';
        maximumSum.innerHTML = '$999';
    }
    if($("input[value='Global Business']").prop("checked")) {
        packages.innerHTML = 'Global Business';
        beginningOfWork.innerHTML= '12';
        sumToWithdraw.innerHTML = '80%';
        minimumSum.innerHTML = '$1000';
        maximumSum.innerHTML = '$4999';
    }
    if($("input[value='Global Vip']").prop("checked")) {
        packages.innerHTML = 'Global Vip';
        beginningOfWork.innerHTML= '8';
        sumToWithdraw.innerHTML = '90%';
        minimumSum.innerHTML = '$5000';
        maximumSum.innerHTML = 'unlimited';
    }
});
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
