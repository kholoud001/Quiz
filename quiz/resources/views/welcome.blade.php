<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True or False Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes pulse {
            0% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
            }

            100% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            }
        }

        /* Custom styles for selected radio buttons */
        input[type="radio"]:checked + label::before {
            background-color: #2563EB;
            border-color: #2563EB;
        }
    </style>
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">
    <div class="bg-white rounded-lg p-8 max-w-md w-full shadow-md">
        <h1 class="text-3xl font-bold text-center mb-6">True or False Quiz</h1>
        
        <form id="quizForm" method="post" class="mb-4">
            <p class="text-lg">The Earth is flat.</p>
            <div class="flex items-center mt-2">
                <input type="radio" id="true1" name="question1" class="w-6 h-6 inline-block mr-2 border border-gray-400 rounded-full transition-colors" value="true">
                <label for="true1" class="cursor-pointer flex items-center mr-4">
                    True
                </label>

                <input type="radio" id="false1" name="question1" class="w-6 h-6 inline-block mr-2 border border-gray-400 rounded-full transition-colors" value="false">
                <label for="false1" class="cursor-pointer flex items-center">
                    False
                </label>
            </div>

            <div class="text-center mt-6">
                <button type="submit" name="checkAnswer" id="checkButton" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300 ease-in-out hover:bg-blue-600">
                    Check Answer
                </button>
            </div>
        </form>
        
        <div id="result" class="text-center mt-4 hidden"></div>
    </div>

</body>
</html>
