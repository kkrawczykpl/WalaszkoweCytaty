window.onload = function()
{
	MicroModal.init();
    const _showed = localStorage.getItem('modal_showed');
    const fontBtn = document.querySelectorAll('.change-font');
    // Modal
    if (_showed === null) {
        localStorage.setItem('modal_showed', 1);
    	MicroModal.show('modal-1');
    }else{
    	//debug
    }

    // Change font
    fontBtn.forEach(btn => btn.addEventListener('click', function(){
        let quotes = document.querySelectorAll('.quote');
        for (let i of quotes) {
            if (i.style.fontFamily == "Roboto") {
                i.style.fontFamily = "Parisienne";
                i.style.fontSize = "32px";
                btn.style.color = "#777";
            }else{
                i.style.fontFamily = "Roboto";
                i.style.fontSize = "24px";
                btn.style.color = "#fe628e";
            }
            
        }
    }));
}