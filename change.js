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
// item.forEach(li => {
//     li.addEventListener('click',function(e){
//         document.getElementById('action').style.top= e.target.offsetTop + 'px';
//         item.forEach(item_remove_active2 =>{
//             item_remove_active2.classList.remove('active2');
//             this.classList.add('active2')
//         });
//     })
// })
