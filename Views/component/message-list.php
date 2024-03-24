<div class="flex min-h-screen">
    <!-- サイドメニュー -->
    <div class="fixed inset-y-0 left-0 w-1/4 pl-16 min-h-screen pr-3">

        <div class="flex justify-start bg-teal-300 rounded-t-3xl mt-2 shadow-xl">
            <h1 class="rounded-lg py-3 text-4xl text-white pl-20">Post Sphere</h1>
        </div>
        <!-- サイドメニューのコンテンツ -->
        <div class="flex flex-col bg-white rounded-b-3xl shadow-xl">
            <div class="flex pl-20 my-1">
                <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                <p class="text-2xl font-bold ml-3 py-5">UserA</p>
            </div>

            <a href="" class="text-2xl font-bold pl-20 py-5 hover:bg-gray-200 rounded-full bg-gray-100"><i class="fa-solid fa-house"></i> ホーム</a>
            <a href="" class="text-2xl font-bold pl-20 py-5 hover:bg-gray-200 rounded-full"><i class="fa-solid fa-bell"></i> 通知</a>
            <a href="" class="text-2xl font-bold pl-20 py-5 hover:bg-gray-200 rounded-full"><i class="fa-solid fa-comments"></i> メッセージ</a>
            <a href="" class="text-2xl font-bold pl-20 py-5 hover:bg-gray-200 rounded-full"><i class="fa-solid fa-user"></i> プロフィール</a>
            <a href="" class="text-2xl font-bold pl-20 py-5 hover:bg-gray-200 rounded-full"><i class="fa-solid fa-paper-plane"></i> ポスト</a>
            <a href="" class="text-2xl font-bold pl-20 py-5 hover:bg-gray-200 rounded-full"><i class="fa-solid fa-door-open"></i> ログアウト</a>
        </div>
        <footer class="text-center p-3 text-gray-500">
            <p>©:PostSphere</p>
        </footer>
    </div>

    <!-- メッセージリスト -->
    <div class="flex ml-1/4 w-1/2 bg-white">
        <div class="w-full">
            <div class="fixed h-16 pt-4 bg-white border-b z-10 w-1/2 flex justify-between">
                <h1 class="text-3xl mb-2 ml-7"><i class="fa-solid fa-comments"></i> メッセージ</h1>
                <button type="button" class="bg-sky-400 hover:bg-sky-500 text-white font-bold text-lg mb-3 mr-6 px-4  rounded-xl"><i class="fa-solid fa-user-plus"></i>新しいメッセージ</button>
            </div>

            <button class="hover:bg-gray-200 pt-20 px-4 border w-full">
                <div class="flex pb-3">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                    <p class="ml-4 py-4">UserB</p>
                    <p class="text-gray-500 ml-4 py-4">2024-03-04 12:55:43</p>
                </div>
            </button>
            <button class="hover:bg-gray-200 p-4 border w-full">
            <div class="flex pb-3">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                    <p class="ml-4 py-4">UserC</p>
                    <p class="text-gray-500 ml-4 py-4">2024-03-04 12:52:32</p>
                </div>
            </button>
            <button class="hover:bg-gray-200 p-4 border w-full">
                <div class="flex pb-3">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                    <p class="ml-4 py-4">UserD</p>
                    <p class="text-gray-500 ml-4 py-4">2024-03-04 12:50:54</p>
                </div>
            </button>
            <button class="hover:bg-gray-200 p-4 border w-full">
                <div class="flex pb-3">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                    <p class="ml-4 py-4">UserE</p>
                    <p class="text-gray-500 ml-4 py-4">2024-03-04 10:21:33</p>
                </div>
            </button>
        </div>
    </div>
</div>
