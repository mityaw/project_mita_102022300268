<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Daftar Superhero</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-100 min-h-screen p-8 font-sans">
   <!-- Tombol Logout -->
   <div class="flex justify-end mb-6">
    <form action="/logout" method="POST">
      @csrf
      <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-full hover:bg-pink-600 transition font-semibold shadow-md">
        🚪 Logout
      </button>
    </form>
  </div> 

  <div class="max-w-6xl mx-auto">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-10">
      <h1 class="text-4xl font-extrabold text-purple-700">🦸‍♂️ Daftar Superhero</h1>
      <p class="text-base text-pink-500 mt-2">List pahlawan super dari Marvel ✨</p>
    </div>

    <div class="overflow-x-auto bg-white shadow-xl rounded-2xl border border-pink-300">
      <table class="min-w-full divide-y divide-pink-200">
        <thead class="bg-pink-400 text-white uppercase text-sm">
          <tr>
            <th class="px-6 py-4 text-left rounded-tl-2xl">No</th>
            <th class="px-6 py-4 text-left">Nama Hero</th>
            <th class="px-6 py-4 text-left">Kekuatan</th>
            <th class="px-6 py-4 text-left rounded-tr-2xl">Asal</th>
          </tr>
        </thead>
        <tbody class="text-gray-700 divide-y divide-pink-100 text-sm">
          <tr class="hover:bg-purple-50 transition">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4 font-semibold text-purple-700">Spiderman</td>
            <td class="px-6 py-4">Memiliki jaring seperti laba-laba</td>
            <td class="px-6 py-4">Marvel</td>
          </tr>
          <tr class="hover:bg-purple-50 transition">
            <td class="px-6 py-4">2</td>
            <td class="px-6 py-4 font-semibold text-purple-700">Iron Man</td>
            <td class="px-6 py-4">Armor teknologi tinggi dan jenius</td>
            <td class="px-6 py-4">Marvel</td>
          </tr>
          <tr class="hover:bg-purple-50 transition">
            <td class="px-6 py-4">3</td>
            <td class="px-6 py-4 font-semibold text-purple-700">Hulk</td>
            <td class="px-6 py-4">Kekuatan besar dan berubah saat marah</td>
            <td class="px-6 py-4">Marvel</td>
          </tr>
          <tr class="hover:bg-purple-50 transition">
            <td class="px-6 py-4">4</td>
            <td class="px-6 py-4 font-semibold text-purple-700">Captain America</td>
            <td class="px-6 py-4">Super soldier dengan perisai ikonik</td>
            <td class="px-6 py-4">Marvel</td>
          </tr>
          <tr class="hover:bg-purple-50 transition">
            <td class="px-6 py-4">5</td>
            <td class="px-6 py-4 font-semibold text-purple-700">Black Panther</td>
            <td class="px-6 py-4">Kekuatan wakanda dan teknologi canggih</td>
            <td class="px-6 py-4">Marvel</td>
          </tr>
          <tr class="hover:bg-purple-50 transition">
            <td class="px-6 py-4">6</td>
            <td class="px-6 py-4 font-semibold text-purple-700">Doctor Strange</td>
            <td class="px-6 py-4">Sihir dan manipulasi waktu/ruang</td>
            <td class="px-6 py-4">Marvel</td>
          </tr>
          <tr class="hover:bg-purple-50 transition">
            <td class="px-6 py-4">7</td>
            <td class="px-6 py-4 font-semibold text-purple-700">Scarlet Witch</td>
            <td class="px-6 py-4">Mengontrol realitas dengan sihir</td>
            <td class="px-6 py-4">Marvel</td>
          </tr>
          <tr class="hover:bg-purple-50 transition">
            <td class="px-6 py-4">8</td>
            <td class="px-6 py-4 font-semibold text-purple-700">Ant-Man</td>
            <td class="px-6 py-4">Menyusut dan membesar dengan teknologi</td>
            <td class="px-6 py-4">Marvel</td>
          </tr>
          <tr class="hover:bg-purple-50 transition">
            <td class="px-6 py-4">9</td>
            <td class="px-6 py-4 font-semibold text-purple-700">Thor</td>
            <td class="px-6 py-4">Dewa petir dengan palu Mjolnir</td>
            <td class="px-6 py-4">Marvel</td>
          </tr>
          <tr class="hover:bg-purple-50 transition">
            <td class="px-6 py-4">10</td>
            <td class="px-6 py-4 font-semibold text-purple-700">Hawkeye</td>
            <td class="px-6 py-4">Ahli panah dengan akurasi luar biasa</td>
            <td class="px-6 py-4">Marvel</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
