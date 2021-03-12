$(document).ready(function () @{
    $("#container").flipBook({
        pages:[
            {src:"assets/images/book2/page1.jpg", thumb:"images/book2/thumb1.jpg", title:"Cover"},
            {src:"assets/images/book2/page2.jpg", thumb:"images/book2/thumb2.jpg", title:"Page two"},
            {src:"assets/images/book2/page3.jpg", thumb:"images/book2/thumb3.jpg", title:"Page three"},
            {src:"assets/images/book2/page4.jpg", thumb:"images/book2/thumb4.jpg", title:""},
            {src:"assets/images/book2/page5.jpg", thumb:"images/book2/thumb5.jpg", title:"Page five"},
            {src:"assets/images/book2/page6.jpg", thumb:"images/book2/thumb6.jpg", title:"Page six"},
            {src:"assets/images/book2/page7.jpg", thumb:"images/book2/thumb7.jpg", title:"Page seven"},
            {src:"assets/images/book2/page8.jpg", thumb:"images/book2/thumb8.jpg", title:"Last"}
        ],zoomLevels:[0.9,3], deeplinking:{enabled:true, prefix:"",autoplayOnStart:true, autoplayInterval:3000}
    });

})
