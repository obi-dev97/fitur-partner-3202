<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profil Sederhana</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-xl max-w-sm w-full text-center border border-gray-100">
        
        <div class="relative w-32 h-32 mx-auto mb-4">
            <img class="rounded-full object-cover border-4 border-indigo-500 p-1" 
                 src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" 
                 alt="Foto Profil">
            <div class="absolute bottom-2 right-2 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></div>
        </div>

        <h1 class="text-2xl font-bold text-gray-800">Bahenaol</h1>
        <p class="text-indigo-600 font-medium mb-2">Bahlil Etanol</p>
        <p class="text-gray-500 text-sm leading-relaxed mb-6">
            Suka ngopi, nulis kode, dan belajar teknologi baru. Saat ini sedang fokus mendalami ekosistem AI.
        </p>

        <div class="flex justify-around border-t border-b border-gray-100 py-4 mb-6">
            <div>
                <p class="text-lg font-bold text-gray-800">24</p>
                <p class="text-xs text-gray-400 uppercase tracking-wider">Proyek</p>
            </div>
            <div>
                <p class="text-lg font-bold text-gray-800">1.2k</p>
                <p class="text-xs text-gray-400 uppercase tracking-wider">Followers</p>
            </div>
            <div>
                <p class="text-lg font-bold text-gray-800">450</p>
                <p class="text-xs text-gray-400 uppercase tracking-wider">Following</p>
            </div>
        </div>

        <div class="flex gap-3">
            <button class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                Follow
            </button>
            <a href="/bantuan" class="inline-block bg-indigo-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-indigo-700 hover:shadow-md transition duration-300">Get Contact
            </a>
        </div>

        <div class="mt-6 flex justify-center space-x-4 text-gray-400">
            <a href="#" class="hover:text-indigo-500 transition-colors">Github</a>
            <a href="#" class="hover:text-indigo-500 transition-colors">LinkedIn</a>
            <a href="#" class="hover:text-indigo-500 transition-colors">Twitter</a>
        </div>
    </div>

</body>
</html>