<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Public/css/output.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0444843589.js" crossorigin="anonymous"></script>

    <title>PostSphere</title>
</head>
<body class="bg-gray-100">

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

    <!-- 通知 -->
    <div class="flex ml-1/4 w-1/2 bg-white">
        <div class="w-full">
            <div class="fixed h-16 pt-4 bg-white border-b z-10 w-1/2">
                <h1 class="text-3xl mb-2 ml-7"><i class="fa-solid fa-bell"></i> 通知</h1>
            </div>

            <button class="hover:bg-gray-200 pt-20 px-4 border w-full">
                <div class="flex">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                    <p class="text-gray-500 ml-4 py-4">2024-03-04 12:55:43</p>
                </div>
                <div class="flex">
                    <p class="mx-3 text-xl text-pink-500"><i class="fa-solid fa-heart"></i></p>
                    <p class="py-0.5">UserBさんがあなたのポストにいいねしました</p>
                </div>
            </button>
            <button class="hover:bg-gray-200 p-4 border w-full">
                <div class="flex">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                    <p class="text-gray-500 ml-4 py-4">2024-03-04 12:52:32</p>
                </div>
                <div class="flex">
                    <p class="mx-3 text-xl text-sky-400"><i class="fa-solid fa-user"></i></p>
                    <p class="py-0.5">UserCさんからフォローされました</p>
                </div>
            </button>
            <button class="hover:bg-gray-200 p-4 border w-full">
                <div class="flex">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                    <p class="text-gray-500 ml-4 py-4">2024-03-04 12:50:54</p>
                </div>
                <div class="flex">
                    <p class="mx-3 text-xl text-emerald-400"><i class="fa-solid fa-comment"></i></p>
                    <p class="py-0.5">UserDさんから新しいメッセージがあります</p>
                </div>
            </button>
            <button class="hover:bg-gray-200 p-4 border w-full">
                <div class="flex">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                    <p class="text-gray-500 ml-4 py-4">2024-03-04 10:21:33</p>
                </div>
                <div class="flex">
                    <p class="mx-3 text-xl text-lime-400"><i class="fa-solid fa-retweet"></i></p>
                    <p class="py-0.5">UserEさんがあなたのポストをリポストしました</p>
                </div>
            </button>
            <button class="hover:bg-gray-200 p-4 border w-full">
                <div class="flex">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                    <p class="text-gray-500 ml-4 py-4">2024-03-04 10:21:33</p>
                </div>
                <div class="flex">
                    <p class="mx-3 text-xl text-yellow-400"><i class="fa-solid fa-reply"></i></p>
                    <p class="py-0.5">UserFさんがあなたのポストに返信しました</p>
                </div>
            </button>
        </div>
    </div>
</div>

</body>
</html>