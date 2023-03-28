
function validateForm(){
    var chon_khu_vuc=document.getElementById("area");
    var chon_nhan_vien=document.getElementById("employee");
    var date =document.getElementById("date");
    var time =document.getElementById("time");
    var mess = document.getElementById("message");
    if (chon_khu_vuc.value == "test") {
        alert("Hãy Chọn Khu Vực Hợp Lệ");
        window.location.href = "home.html";
        return ;
    }
    
    if(chon_nhan_vien.value == "test1"){
        alert("Hãy Chọn Nhân Viên Hợp Lệ");
        return;
    }
    if(date.value == '')
    {
        alert("Hãy Chọn Ngày");
        window.location.href = "Add_Task.html";
        return;
    }
    if(time.value == ''){
        alert("Hãy Chọn Giờ");
        return;
    }
    alert("Complete!");
    window.location.href = "controller.html";
}
