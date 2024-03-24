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

    <!-- プロフィール -->
    <div class="flex justify-center ml-1/4 w-1/2 mt-2">
        <div class="w-3/4">
            <div class="h-16 pt-4 bg-white flex justify-start border rounded-t-3xl shadow-xl">
                <h1 class="text-3xl mb-2 ml-7"><i class="fa-solid fa-pen-to-square"></i> プロフィール編集</h1>
            </div>

            <div class="p-4 border w-full bg-white flex justify-center flex-col rounded-b-3xl  shadow-xl">
                <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white ml-3" src="/file-not-found.jpg" alt="">
                <button type="button" class="text-start ml-3 mb-3 text-gray-500">変更する</button>
                <form action="#" method="post" class="space-y-2 w-full">
                    <div>
                        <div class="flex justify-between">
                            <p class="text-lg pl-2">ユーザー名</p>
                            <p class="text-gray-500 text-lg">0/50</p>
                        </div>
                        <input type="text" name="username" class="w-full text-lg py-2 pl-3 border border-gray-500 rounded-lg">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="text-lg pl-2">年齢</p>
                            <p class="text-gray-500 text-lg">0/10</p>
                        </div>
                        <input type="text" name="age" class="w-full text-lg py-2 pl-3 border border-gray-500 rounded-lg">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="text-lg pl-2">居住地</p>
                            <p class="text-gray-500 text-lg">0/50</p>
                        </div>
                        <input type="text" name="location" class="w-full text-lg py-2 pl-3 border border-gray-500 rounded-lg">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="text-lg pl-2">趣味</p>
                            <p class="text-gray-500 text-lg">0/50</p>
                        </div>
                        <input type="text" name="hobby" class="w-full text-lg py-2 pl-3 border border-gray-500 rounded-lg">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="text-lg pl-2">自己紹介</p>
                            <p class="text-gray-500 text-lg">0/255</p>
                        </div>
                        <textarea class="h-52 w-full border rounded-md border-gray-500" name="self-introduction" minlength="1" maxlength="255"></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="bg-white hover:bg-gray-200 text-sky-400 border border-sky-400 font-bold text-lg mb-3 mr-6 px-4 py-2 rounded-xl">キャンセル</button>
                        <button type="button" class="bg-sky-400 hover:bg-sky-500 text-white font-bold text-lg mb-3 mr-6 px-4 py-2 rounded-xl">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
