<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="config/tailwind.config.js">
    <link rel="stylesheet" href="style_animation.css">
    <script>
        $(document).ready(function() {
            $(".extend").click(function() {
                $(".list_item").toggleClass("hidden");
                $(".icon").toggleClass("fa-rotate-90");
            });
            $(".change_select").click(function() {
                $(".Janitor").toggleClass("hidden");
                $(".Collector").toggleClass("hidden");
            });
            // $(".info-001").click(function() {
            //     $(".info-001").toggleClass("hidden");
            //     $(".Collector").toggleClass("hidden");
            // });
            // $(".info-002").click(function() {
            //     $(".Janitor").toggleClass("hidden");
            //     $(".Collector").toggleClass("hidden");
            // });
            // $(".info-003").click(function() {
            //     $(".Janitor").toggleClass("hidden");
            //     $(".Collector").toggleClass("hidden");
            // });
            // $(".info-004").click(function() {
            //     $(".Janitor").toggleClass("hidden");
            //     $(".Collector").toggleClass("hidden");
            // });
        });

    </script>
    <title>Nhân Viên</title>
</head>

<body>
    <header class="flex fex-row bg-zinc-900 gap-x-4 p-4">
        <div class="flex w-1/5 p-2">LOGO</div>
        <div class="flex w-3/5 p-2">
            <div class="flex flex-row bg-white items-center w-full border-2 border-black rounded-lg">
                <div class="flex p-2"><i class="fa-solid fa-magnifying-glass text-2xl"></i></div>
                <input class="grow h-full rounded-lg outline-none" type="text" placeholder="Tìm Kiếm Nhanh">
            </div>
        </div>
        <div class="flex flex-row w-1/5 items-center justify-center gap-x-4 bg-gray-300 rounded-lg">
            <div class="flex mail p-2"><i class="fa-solid fa-envelope text-2xl"></i></div>
            <div class="flex notify p-2"><i class="fa-solid fa-bell text-2xl"></i></div>
            <div class="flex avatar h-10 w-10 rounded-full">
                <img class="rounded-full" src="image/hehe.jpg" alt="">
            </div>
            <div class="flex flex-col">
                <div>Duc Tai</div>
                <div>admin</div>
            </div>
            <div class="flex p-2"><i class="fa-solid fa-caret-right fa-rotate-90 text-2xl"></i></div>
        </div>
    </header>
    <main class="flex flex-row w-full bg-white text-blck">
        <div class="flex flex-col w-1/5 bg-zinc-300">
            <div class="flex justify-center text-4xl font-bold p-8">UWC 2.0</div>
            <div class="flex items-center border-r-4 border-zinc-300 hover:text-green-900 hover:border-green-900 p-2 h-24">
                <i class="fa-solid fa-house text-2xl p-2"></i>
                <a href="Dashboard.html" onclick="state_button()" class="text-2xl font-bold p-2">Trang Chủ</a>
            </div>
            <div class="flex flex-row items-center p-2 h-24">
                <i class="fa-sharp fa-solid fa-square-poll-vertical text-2xl p-2"></i>
                <a href="controller.html" class="p-2 font-bold text-2xl p-2">Bảng Điều Khiển</a>
            </div>
            <div class="flex flex-row border-r-4 border-zinc-300 hover:text-zinc-500 hover:border-black items-center p-2 h-24">
                <i class="fa-solid fa-square-plus text-2xl p-2"></i>
                <a href="#" class="p-2 font-bold text-2xl p-2">Tổng Quan</a>
            </div>
            <div class="flex flex-col">
                <div onclick="extend()" class="flex flex-row border-r-4 border-zinc-300 hover:text-zinc-500 hover:border-black items-center p-2 h-24 extend">
                    <i class="fa-solid fa-book text-2xl p-2"></i>
                    <a href="#" class="p-2 font-bold text-2xl p-2">Thông Tin</a>
                    <i class="fa-solid fa-caret-right fa-rotate-90 text-2xl p-2 icon"></i>
                </div>
                <div>
                    <ul class="bg-zinc-400 list_item cursor-pointer">
                        <li class="flex flex-row items-center h-24 text-zinc-500 border-black">
                            <i class="fa-solid fa-user text-2xl p-2"></i>
                            <a href="Employee.html">
                                <h1 class="p-2 font-bold text-2xl p-2">Nhân Viên</h1>
                            </a>
                        </li>
                        <li class="flex w-full bg-white h-px"></li>
                        <li class="flex flex-row items-center h-24 hover:text-zinc-500 hover:border-black">
                            <i class="fa-solid fa-gauge text-2xl p-2"></i>
                            <a href="Vehical.html">
                                <h1 class="p-2 font-bold text-2xl p-2">Phương Tiện</h1>
                            </a>               
                        </li>
                        <li class="flex w-full bg-white h-px"></li>
                        <li class="flex flex-row items-center h-24 hover:text-zinc-500 hover:border-black">
                            <i class="fa-solid fa-location-dot text-2xl p-2"></i>
                            <h1 class="p-2 font-bold text-2xl p-2">Điểm Thu Thập</h1>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex items-center border-r-4 border-zinc-300 hover:text-green-900 hover:border-green-900 p-2 h-24">
                <i class="fa-sharp fa-solid fa-gear text-2xl p-2"></i>
                <a href="#" class="text-2xl font-bold p-2">Cài Đặt</a>
            </div>

        </div>
        <div class="flex flex-col w-4/5 gap-y-8 p-2 trang_chu">
            <div class="p-8 text-3xl font-bold">Nhân Viên</div>
            <div class="p-8 text-xl font-bold">Malcolm Lockyer</div>
            <div class="grid grid-cols-3 gap-4 p-4">
                <div class="flex flex-col bg-zinc-300 rounded-lg p-4">
                    <div class="flex justify-center text-2xl font-bold p-2 items-center">Thời Gian Làm</div>
                    <div class="flex flex-row justify-center items-center p-2">
                        <div class="flex flex-row justify-center p-2">
                            <div class="flex text-5xl font-bold justify-center p-1">100</div>
                            <div class="flex text-2xl items-center justify-center p-1">H</div>
                        </div>
                        <!-- <div class="flex flex-col justify-center p-2">
                            <div class="flex text-5xl font-bold justify-center p-1"></div>
                            <div class="flex text-xl justify-center p-1">Ca</div>
                        </div> -->
                    </div>
                </div>
                <div class="flex flex-col bg-zinc-300 rounded-lg p-4">
                    <div class="flex justify-center text-2xl font-bold p-2 items-center">Nghỉ Phép</div>
                    <div class="flex flex-row justify-center items-center p-2">
                        <div class="flex flex-row justify-center p-2">
                            <div class="flex text-5xl font-bold justify-center p-1">17</div>
                            <div class="flex text-2xl items-center justify-center p-1">H</div>
                        </div>
                        <!-- <div class="flex flex-col justify-center p-2">
                            <div class="flex text-5xl font-bold justify-center p-1">5</div>
                            <div class="flex text-xl justify-center p-1">Chưa giao việc</div>
                        </div> -->
                    </div>
                </div>
                <div class="flex flex-col bg-zinc-300 rounded-lg p-4">
                    <div class="flex justify-center text-2xl font-bold p-2 items-center">Trạng Thái</div>
                    <div class="flex flex-row justify-center items-center p-2">
                        <div class="flex flex-row justify-center p-2">
                            <div class="flex text-2xl font-bold justify-center p-1">Đang Làm Việc</div>
                            <div class="flex text-2xl items-center justify-center p-1"><i class="fa-sharp fa-solid fa-circle text-orange-400"></i></div>
                        </div>
                        <div class="flex flex-row justify-center p-2 hidden">
                            <div class="flex text-2xl font-bold justify-center p-1">Rãnh</div>
                            <div class="flex text-2xl items-center justify-center p-1"><i class="fa-sharp fa-solid fa-circle text-green-400"></i></div>
                        </div>
                        <div class="flex flex-row justify-center p-2 hidden">
                            <div class="flex text-2xl font-bold justify-center p-1">Không Đi Làm</div>
                            <div class="flex text-2xl items-center justify-center p-1"><i class="fa-sharp fa-solid fa-circle text-gray-400"></i></div>
                        </div>
                        <!-- <div class="flex flex-col justify-center p-2">
                            <div class="flex text-5xl font-bold justify-center p-1">5</div>
                            <div class="flex text-xl justify-center p-1">Chưa giao việc</div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="flex p-4 h-full">
                <div class="flex flex-col w-full h-full bg-zinc-300 rounded-lg p-4">
                    <div class="flex flex-row p-2 gap-x-4 items-center">
                        <div class="text-4xl font-bold p-2 w-3/6">Danh Sách Nhân Viên</div>
                        <div class="w-2/6 p-2 h-1/3"></div>
                        <div class="flex justify-between items-center w-1/6 h-3/4 bg-gray-500 rounded-lg p-2 overflow-hidden">
                            <div class="fex flex-col">
                                <div class="flex p-2 text-xl Janitor">Janitor</div>
                                <div class="flex p-2 text-xl hidden Collector">Collector</div>
                            </div>
                            <div class="change_select">
                                <i class="fa-solid fa-caret-right fa-rotate-90 text-2xl p-2 cursor-pointer"></i>
                            </div>
                        </div>
                        <div class="flex w-1/6 h-3/4 bg-gray-500 rounded-lg p-2 items-center justify-between">
                            <div class="flex p-2 text-xl">Tạo mới</div>
                            <a href="Add_Task_janitor.html">
                                <i class="fa-solid fa-circle-plus text-xl p-2 cursor-pointer"></i>
                            </a>
                        </div>
                    </div>
                    <div class="w-full h-full p-4 bg-white rounded-3xl">
                        <table class="w-full table-fixed border-black border-2 rounded-lg overflow-hidden">
                            <thead class="border-b-2 border-black text-center rounded-lg p-2">
                              <tr>
                                <th>ID</th>
                                <th>Nhân viên</th>
                                <th>Đã hoàn thành</th>
                                <th>Trạng thái</th>
                                <th>Hoạt Động</th>
                              </tr>
                            </thead>
                            <tbody class="text-center">
                              <tr class="border-b-2 border-black info-001">
                                <td class="p-4">001</td>
                                <td class="p-4">Malcolm Lockyer</td>
                                <td class="p-4"><i class="fa-sharp fa-solid fa-circle"></i></td>
                                <td class="p-4"><i class="fa-sharp fa-solid fa-circle text-green-700"></i></td>
                                <td class="p-4">10 phút trước</td>
                              </tr>
                              <tr class="border-b-2 border-black p-2 info-002">
                                <td class="p-4">002</td>
                                <td class="p-4">Malcolm Lockyer</td>
                                <td class="p-4"><i class="fa-solid fa-circle-three-quarter text-green-700"></i></td>
                                <td class="p-4"><i class="fa-sharp fa-solid fa-circle text-green-700"></i></td>
                                <td class="p-4">10 phút trước</td>
                              </tr>
                              <tr class="border-b-2 border-black p-2 info-003">
                                <td class="p-4">003</td>
                                <td class="p-4">Malcolm Lockyer</td>
                                <td class="p-4"><i class="fa-solid fa-circle-quarter text-green-700"></i></td>
                                <td class="p-4"><i class="fa-sharp fa-solid fa-circle text-green-700"></i></td>
                                <td class="p-4">10 phút trước</td>
                              </tr>
                              <tr class="border-b-2 border-black p-2 info-004">
                                <td class="p-4">004</td>
                                <td class="p-4">Malcolm Lockyer</td>
                                <td class="p-4"><i class="fa-solid fa-circle-haft-quarter text-green-700"></i></td>
                                <td class="p-4"><i class="fa-sharp fa-solid fa-circle text-green-700"></i></td>
                                <td class="p-4">10 phút trước</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>