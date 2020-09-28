<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/card.css">
</head>
<body class="flex items-center justify-center">
        <div class="card flex  rounded">
            {{--left side--}}
            <div class="card-left flex flex-col justify-between  rounded p-6 items-center text-center text-white">
                <a class="card-skill-button no-underline text-sm rounded-full py-1 px-6  " href="#">PHP</a>

                <img src="https://laracasts.s3.amazonaws.com/series/thumbnails/10-techniques-for-cleaner-code.png?v=8" width="98" height="98">

                <span class="card-difficulty text-xs">Intermediate Difficulty</span>
            </div>
            {{--right-side--}}
            <div class="card-right flex flex-col text-gray-600 p-5">
                <h3 class="card-title text-black font-light text-3xl mb-3"><a href="3">Testing Jargon</a></h3>
                <p class="flex-1">
                    Workshop time. We've been given a card design that needs to be converted to HTML and CSS. Piece by piece, let's construct it from scratch. As you'll find, yet again, flexbox comes to the rescue over and over.
                </p>


                <div class="flex text-sm">
                    <div class="flex items-center mr-4">
                        <img src="https://image.flaticon.com/icons/svg/864/864685.svg"  width="15" height="15" class="mr-2">
                        5 lesson
                    </div>
                    <div class="flex items-center">
                        <img src="https://image.flaticon.com/icons/svg/2088/2088617.svg"  width="15" height="15" class="mr-2">
                        53:10 min
                    </div>

                </div>
            </div>
        </div>
</body>
</html>
