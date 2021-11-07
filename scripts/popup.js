function popUpOn(elementId){
    var el = document.getElementById(elementId);
    el.style.visibility = 'visible';
	el.style.opacity = '1';
	el.style.transition = 'all 0.7s ease-out 0s';
}

function popUpOff(elementId){
    var el = document.getElementById(elementId);
    el.style.visibility = 'hidden';
	el.style.opacity = '0';
}