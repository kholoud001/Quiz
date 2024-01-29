<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body>

    <form id="quizForm" method="post" class="mb-4 flex flex-col w-full mt-20 items-center justify-center"
        action="{{ url('/') }}">
        @csrf
        <div class="w-fit p-10 rounded-lg border-blue-400 border-2 bg-gray-100">
            <h1 class="text-center text-xl mb-10 font-bold">All questions</h1>
            @foreach ($questions as $question)
            <p class="text-lg">{{ $question->content }}</p>
            <div class="flex items-center mt-2">
                <input type="radio" id="{{ $question->id }}true" name="question[{{ $question->id }}]"
                    class="w-6 h-6 inline-block mr-2 border border-gray-400 rounded-full transition-colors" value=1>
                <label for="{{ $question->id }}true" class="cursor-pointer flex items-center mr-4">
                    True
                </label>

                <input type="radio" id="{{ $question->id }}false" name="question[{{ $question->id }}]"
                    class="w-6 h-6 inline-block mr-2 border border-gray-400 rounded-full transition-colors" value=0>
                <label for="{{ $question->id }}false" class="cursor-pointer flex items-center">
                    False
                </label>
            </div>
            <hr class="w-full z-10 h-10">
            @endforeach
        </div>

        <div class="text-center mt-6">
            <button type="submit" name="checkAnswer" id="checkButton"
                class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300 ease-in-out hover:bg-blue-600">
                Check Answer
            </button>
        </div>
    </form>


</body>

</html>