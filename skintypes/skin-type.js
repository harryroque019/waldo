// sliding pages
function goToSecondPage() {
    document.getElementById('firstpage').style.transform = 'translateX(-100%)'; // Move first page to the left
    document.getElementById('secondpage').style.transform = 'translateX(0)'; // Slide second page into view
}
function goToFirstPage() {
    document.getElementById('age-and-gender-section').style.transform = 'translateX(-100%)'; // Move age and gender section to the left
    document.getElementById('firstpage').style.transform = 'translateX(0)'; // Slide first page into view
}

// endd

function changeheadingstext1() {
    document.getElementById('paragraph').innerHTML = 'Early Aging';
}
function changeheadingstext2() {
    document.getElementById('paragraph').innerHTML = 'Dullness';
}
function changeheadingstext3() {
    document.getElementById('paragraph').innerHTML = 'Congestion';
}
function changeheadingstext4() {
    document.getElementById('paragraph').innerHTML = 'Sensitivity';
}
function changeheadingstext5() {
    document.getElementById('paragraph').innerHTML = 'Dark Circles';
}
function changeheadingstext6() {
    document.getElementById('paragraph').innerHTML = 'Uneven Skintone';
}
function changeheadingstext7() {
    document.getElementById('paragraph').innerHTML = 'Dehydration';
}
function changeheadingstext8() {
    document.getElementById('paragraph').innerHTML = 'Texture';
}
function changeheadingstext9() {
    document.getElementById('paragraph1').innerHTML = 'Normal Skin selected.';
}
function changeheadingstext10() {
    document.getElementById('paragraph1').innerHTML = 'Dry Skin selected.';
}
function changeheadingstext11() {
    document.getElementById('paragraph1').innerHTML = 'Oily Skin selected.';
}
function changeheadingstext12() {
    document.getElementById('paragraph1').innerHTML = 'Sensitive ';
}
function changeheadingstext13() {
    document.getElementById('paragraph1').innerHTML = 'Combination Skin selected.';
}