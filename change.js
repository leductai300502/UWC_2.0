var count_group = 3;
var active =0;
var pre = 0;

function Load(){
    $("#item_"+ active).toggleClass("hidden");
    $("#item_"+ pre).toggleClass("hidden");
}
Load();
document.getElementById('next').onclick = function(){
    pre = active;
    active= active + 1 >= count_group ? 0 : active + 1;
    Load();
}
document.getElementById('previous').onclick = function(){
    pre = active;
    active= active - 1 <= -1 ? 0 : active - 1;
    Load();
}
document.getElementsByClassName('extend').onclick = function(){
    // $('.turn').toggleClass("fixed");
    $('.turn').toggleClass("hidden");

}
