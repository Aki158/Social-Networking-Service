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
            <a href="" class="text-2xl font-bold pl-20 py-5 hover:bg-gray-200 rounded-full bg-gray-200"><i class="fa-solid fa-house"></i> ホーム</a>
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

    <div class="flex ml-1/4 w-1/2 items-start justify-center pt-10">
        <div class="w-3/4">
            <h1 class="text-3xl text-center mb-2"><i class="fa-solid fa-paper-plane"></i> ポスト</h1>
            <form action="#" method="post" class="bg-white shadow-xl p-4 border border-gray-200 rounded-xl space-y-2">
                <textarea class="w-full h-52 border rounded-md border-gray-500" name="message" minlength="1" maxlength="255" placeholder="今の気持ちをポストしよう"></textarea>
                <div class="flex justify-between">
                    <div class="flex justify-start flex-row space-x-5">
                        <button type="button" class="text-2xl text-sky-400 hover:bg-gray-200 px-2 rounded-lg"><i class="fa-solid fa-image"></i></button>
                        <button type="button" class="text-2xl text-sky-400 hover:bg-gray-200 px-2 rounded-lg"><i class="fa-solid fa-video"></i></button>
                        <button type="button" class="text-2xl text-sky-400 hover:bg-gray-200 px-2 rounded-lg"><i class="fa-solid fa-calendar-days"></i></button>
                    </div>
                    <div class="flex justify-start flex-row space-x-5">
                        <p class="text-gray-500 pt-4">0/255</p>
                        <button type="submit" class="bg-sky-400 hover:bg-sky-500 text-white font-bold px-8 py-3 rounded-full">ポスト</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
