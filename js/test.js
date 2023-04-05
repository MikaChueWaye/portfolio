function scroller(event){
    let scrollable = document.getElementById("scrollable");
    switch(event.deltaMode){
        case 0: 		//DOM_DELTA_PIXEL		Chrome
            scrollable.scrollTop+=event.deltaY
            scrollable.scrollLeft+=event.deltaX
            break;
        case 1: 		//DOM_DELTA_LINE		Firefox
            scrollable.scrollTop+=15*event.deltaY
            scrollable.scrollLeft+=15*event.deltaX
            break;
        case 2: 		//DOM_DELTA_PAGE
            scrollable.scrollTop+=0.03*event.deltaY
            scrollable.scrollLeft+=0.03*event.deltaX
            break;
    }
    event.stopPropagation();
    event.preventDefault();
}

document.onwheel = scroller;