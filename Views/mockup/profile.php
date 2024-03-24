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

    <!-- プロフィール -->
    <div class="flex ml-1/4 w-1/2 bg-white">
        <div class="w-full">
            <div class="fixed h-16 pt-4 bg-white border-b z-10 w-1/2 flex justify-between">
                <h1 class="text-3xl mb-2 ml-7"><i class="fa-solid fa-user"></i> プロフィール</h1>
            </div>

            <div class="pt-16 p-4 border w-full">
                <div class="flex justify-between">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                    <button type="button" class="bg-sky-400 hover:bg-sky-500 text-white font-bold text-lg mb-3 mr-6 px-4  rounded-xl"><i class="fa-solid fa-user-plus"></i>プロフィールを編集</button>
                </div>
                <div class="space-y-2">
                    <div>
                        <p class="text-lg pl-2">ユーザー名</p>
                        <p class="text-lg w-3/4 py-2 pl-3 border border-gray-500 rounded-lg">UserA</p>
                    </div>
                    <div>
                        <p class="text-lg pl-2">年齢</p>
                        <p class="text-lg w-3/4 py-2 pl-3 border border-gray-500 rounded-lg">23</p>
                    </div>
                    <div>
                        <p class="text-lg pl-2">居住地</p>
                        <p class="text-lg w-3/4 py-2 pl-3 border border-gray-500 rounded-lg">xx市</p>
                    </div>
                    <div>
                        <p class="text-lg pl-2">趣味</p>
                        <p class="text-lg w-3/4 py-2 pl-3 border border-gray-500 rounded-lg">XX観戦</p>
                    </div>
                    <div>
                        <p class="text-lg pl-2">自己紹介</p>
                        <p class="text-lg w-3/4 py-2 pl-3 border border-gray-500 rounded-lg">
                            XX大好き!<br>
                            同じ趣味の人とつながりたい
                        </p>
                    </div>
                </div>
                <div class="space-x-3 py-3">
                    <a href="" class="text-lg underline">32フォロー</a>
                    <a href="" class="text-lg underline">64フォロワー</a>
                </div>
            </div>

            <!-- ナビゲーションバー -->
            <nav class="left-1/4 w-full flex h-16 border-b z-10">
                <button class="text-blue-500 flex-grow py-4 px-10 hover:bg-gray-200 focus:outline-none border-b-2 font-bold border-blue-500">ポスト</button>
                <button class="text-gray-600 flex-grow py-4 px-10 hover:bg-gray-200 focus:outline-none">いいね</button>
            </nav>

            <div class="w-full">
                <div>
                    <button class="hover:bg-gray-200 p-4 border w-full">
                        <div class="flex">
                            <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                            <p class="text-xl ml-1 py-3">UserA</p>
                            <p class="text-gray-500 ml-2 py-4">1時間</p>
                        </div>
                        <p class="ml-3 text-start mt-1">
                            注意点<br>
                            Tailwind CSSの設定ファイルをカスタマイズする際は、プロジェクトのビルドプロセスを通じてtailwind.config.jsが適切に読み込まれていることを確認してください。<br>
                            この方法で追加されたカスタムクラスは、tailwind.config.jsに定義された後にのみ使用可能となります。<br>
                            マージンの割合は、レイアウトの要件に応じて自由に調整できます。'1/4': '25%'以外にも、必要に応じて異なる割合を定義することが可能です。<br>
                            Tailwind CSSの強力なカスタマイズ機能を活用することで、プロジェクト特有のデザインニーズに柔軟に対応することができます。
                        </p>
                    </button>
                    <div class="flex justify-around border">
                        <button class="hover:bg-gray-200 py-3 px-4 rounded-full"><i class="fa-solid fa-reply"></i></button>
                        <button class="hover:bg-gray-200 py-3 px-4 rounded-full"><i class="fa-solid fa-retweet"></i></button>
                        <button class="hover:bg-gray-200 py-3 px-4 rounded-full"><i class="fa-solid fa-heart"></i></button>
                        <button class="hover:bg-gray-200 py-3 px-4 rounded-full"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </div>
                <div>
                    <button class="hover:bg-gray-200 p-4 border w-full">
                        <div class="flex">
                            <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                            <p class="text-xl ml-1 py-3">UserB</p>
                            <p class="text-gray-500 ml-2 py-4">5時間</p>
                        </div>
                        <p class="ml-3 text-start mt-1">
                            注意点<br>
                            Tailwind CSSの設定ファイルをカスタマイズする際は、プロジェクトのビルドプロセスを通じてtailwind.config.jsが適切に読み込まれていることを確認してください。<br>
                            この方法で追加されたカスタムクラスは、tailwind.config.jsに定義された後にのみ使用可能となります。<br>
                            マージンの割合は、レイアウトの要件に応じて自由に調整できます。'1/4': '25%'以外にも、必要に応じて異なる割合を定義することが可能です。<br>
                            Tailwind CSSの強力なカスタマイズ機能を活用することで、プロジェクト特有のデザインニーズに柔軟に対応することができます。
                        </p>
                    </button>
                    <div class="flex justify-around border">
                        <button class="hover:bg-gray-200 py-3 px-4 rounded-full"><i class="fa-solid fa-reply"></i></button>
                        <button class="hover:bg-gray-200 py-3 px-4 rounded-full"><i class="fa-solid fa-retweet"></i></button>
                        <button class="hover:bg-gray-200 py-3 px-4 rounded-full"><i class="fa-solid fa-heart"></i></button>
                        <button class="hover:bg-gray-200 py-3 px-4 rounded-full"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </div>
                <div>
                    <button class="hover:bg-gray-200 p-4 border w-full">
                        <div class="flex">
                            <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white" src="/file-not-found.jpg" alt="">
                            <p class="text-xl ml-1 py-3">UserC</p>
                            <p class="text-gray-500 ml-2 py-4">1日</p>
                        </div>
                        <p class="ml-3 text-start mt-1">
                            注意点<br>
                            Tailwind CSSの設定ファイルをカスタマイズする際は、プロジェクトのビルドプロセスを通じてtailwind.config.jsが適切に読み込まれていることを確認してください。<br>
                            この方法で追加されたカスタムクラスは、tailwind.config.jsに定義された後にのみ使用可能となります。<br>
                            マージンの割合は、レイアウトの要件に応じて自由に調整できます。'1/4': '25%'以外にも、必要に応じて異なる割合を定義することが可能です。<br>
                            Tailwind CSSの強力なカスタマイズ機能を活用することで、プロジェクト特有のデザインニーズに柔軟に対応することができます。
                        </p>
                    </button>
                    <div class="flex justify-around border">
                        <button class="hover:bg-gray-200 py-3 px-4 rounded-full"><i class="fa-solid fa-reply"></i></button>
                        <button class="hover:bg-gray-200 py-3 px-4 rounded-full"><i class="fa-solid fa-retweet"></i></button>
                        <button class="hover:bg-gray-200 py-3 px-4 rounded-full"><i class="fa-solid fa-heart"></i></button>
                        <button class="hover:bg-gray-200 py-3 px-4 rounded-full"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>