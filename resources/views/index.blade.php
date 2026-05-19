<!-- index.html -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard To Do List</title>

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Poppins', 'sans-serif'],
          }
        }
      }
    }
  </script>
</head>
<body class="bg-[#f4f7fe] m-0 p-0 box-border font-sans text-gray-800">

  <div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-[80px] lg:w-[260px] bg-gray-900 text-white p-[25px] flex flex-col justify-between transition-all duration-300">

      <div class="flex items-center gap-[10px] mb-[40px] justify-center lg:justify-start">
        <i class="fa-solid fa-list-check text-[20px] lg:text-[28px] text-indigo-500"></i>
        <h2 class="hidden lg:block text-xl font-semibold m-0">Todo Admin</h2>
      </div>

      <ul class="list-none p-0 m-0">

        <li class="mb-[15px] group">
          <a href="#" class="flex items-center gap-[12px] p-[14px] rounded-[12px] transition-all duration-300 text-white no-underline bg-indigo-500 translate-x-[5px]">
            <i class="fa-solid fa-house text-[20px] lg:text-base"></i>
            <span class="hidden lg:block">Dashboard</span>
          </a>
        </li>

        <li class="mb-[15px] group">
          <a href="#" class="flex items-center gap-[12px] p-[14px] rounded-[12px] transition-all duration-300 text-white no-underline hover:bg-indigo-500 hover:translate-x-[5px]">
            <i class="fa-solid fa-user text-[20px] lg:text-base"></i>
            <span class="hidden lg:block">User</span>
          </a>
        </li>

        <li class="mb-[15px] group">
          <a href="#" class="flex items-center gap-[12px] p-[14px] rounded-[12px] transition-all duration-300 text-white no-underline hover:bg-indigo-500 hover:translate-x-[5px]">
            <i class="fa-solid fa-list text-[20px] lg:text-base"></i>
            <span class="hidden lg:block">To Do List</span>
          </a>
        </li>

        <li class="mb-[15px] group">
          <a href="#" class="flex items-center gap-[12px] p-[14px] rounded-[12px] transition-all duration-300 text-white no-underline hover:bg-indigo-500 hover:translate-x-[5px]">
            <i class="fa-solid fa-check text-[20px] lg:text-base"></i>
            <span class="hidden lg:block">To Do Selesai</span>
          </a>
        </li>

      </ul>

      <div class="mt-auto">
        <a href="#" class="flex items-center gap-[12px] p-[14px] rounded-[12px] transition-all duration-300 text-white no-underline hover:bg-red-500 justify-center lg:justify-start">
          <i class="fa-solid fa-right-from-bracket text-[20px] lg:text-base"></i>
          <span class="hidden lg:block">Logout</span>
        </a>
      </div>

    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-[25px] overflow-x-hidden">

      <!-- NAVBAR -->
      <nav class="bg-white py-[18px] px-[25px] rounded-[18px] flex flex-col sm:flex-row justify-between sm:items-center gap-[15px] sm:gap-0 shadow-[0_4px_20px_rgba(0,0,0,0.05)]">

        <div class="bg-slate-100 py-[12px] px-[18px] rounded-[12px] w-full sm:w-[200px] lg:w-[400px] flex items-center gap-[10px]">
          <i class="fa-solid fa-magnifying-glass text-gray-500"></i>
          <input type="text" placeholder="Cari sesuatu..." class="border-none outline-none bg-transparent w-full text-gray-700">
        </div>

        <div class="flex items-center gap-[15px] self-end sm:self-auto">

          <div class="w-[50px] h-[50px] bg-slate-100 rounded-full flex items-center justify-center cursor-pointer transition-all duration-300 hover:bg-indigo-500 hover:text-white text-gray-600">
            <i class="fa-regular fa-bell text-xl"></i>
          </div>

          <div class="w-[50px] h-[50px] rounded-full overflow-hidden cursor-pointer">
            <img src="https://i.pravatar.cc/100" alt="Profile" class="w-full h-full object-cover">
          </div>

        </div>

      </nav>

      <!-- HEADER -->
      <div class="my-[25px] mx-0">
        <h1 class="text-[30px] font-bold m-0 text-gray-800">Dashboard To Do List</h1>
        <p class="text-gray-500 mt-2">Selamat datang kembali admin 👋</p>
      </div>

      <!-- CARDS -->
      <section class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-[20px] mb-[25px]">

        <div class="bg-white p-[20px] rounded-[18px] flex items-center gap-[15px] shadow-[0_4px_20px_rgba(0,0,0,0.05)] transition-transform duration-300 hover:-translate-y-[5px]">
          <div class="w-[65px] h-[65px] rounded-[16px] flex items-center justify-center text-white text-[25px] bg-blue-500 shrink-0">
            <i class="fa-solid fa-users"></i>
          </div>
          <div>
            <h3 class="text-2xl font-bold m-0 text-gray-800">1,250</h3>
            <p class="text-gray-500 m-0">Total User</p>
          </div>
        </div>

        <div class="bg-white p-[20px] rounded-[18px] flex items-center gap-[15px] shadow-[0_4px_20px_rgba(0,0,0,0.05)] transition-transform duration-300 hover:-translate-y-[5px]">
          <div class="w-[65px] h-[65px] rounded-[16px] flex items-center justify-center text-white text-[25px] bg-purple-500 shrink-0">
            <i class="fa-solid fa-list-check"></i>
          </div>
          <div>
            <h3 class="text-2xl font-bold m-0 text-gray-800">520</h3>
            <p class="text-gray-500 m-0">Total To Do</p>
          </div>
        </div>

        <div class="bg-white p-[20px] rounded-[18px] flex items-center gap-[15px] shadow-[0_4px_20px_rgba(0,0,0,0.05)] transition-transform duration-300 hover:-translate-y-[5px]">
          <div class="w-[65px] h-[65px] rounded-[16px] flex items-center justify-center text-white text-[25px] bg-emerald-500 shrink-0">
            <i class="fa-solid fa-circle-check"></i>
          </div>
          <div>
            <h3 class="text-2xl font-bold m-0 text-gray-800">320</h3>
            <p class="text-gray-500 m-0">To Do Selesai</p>
          </div>
        </div>

        <div class="bg-white p-[20px] rounded-[18px] flex items-center gap-[15px] shadow-[0_4px_20px_rgba(0,0,0,0.05)] transition-transform duration-300 hover:-translate-y-[5px]">
          <div class="w-[65px] h-[65px] rounded-[16px] flex items-center justify-center text-white text-[25px] bg-red-500 shrink-0">
            <i class="fa-solid fa-clock"></i>
          </div>
          <div>
            <h3 class="text-2xl font-bold m-0 text-gray-800">200</h3>
            <p class="text-gray-500 m-0">Belum Selesai</p>
          </div>
        </div>

      </section>

      <!-- CONTENT -->
      <section class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-[20px]">

        <!-- TABLE -->
        <div class="bg-white p-[20px] rounded-[18px] shadow-[0_4px_20px_rgba(0,0,0,0.05)] overflow-x-auto">

          <div class="mb-[20px]">
            <h2 class="text-xl font-bold text-gray-800">To Do Terbaru</h2>
          </div>

          <table class="w-full border-collapse min-w-[500px]">

            <thead>
              <tr>
                <th class="bg-slate-50 py-[14px] px-[14px] text-left font-semibold text-gray-700">No</th>
                <th class="bg-slate-50 py-[14px] px-[14px] text-left font-semibold text-gray-700">Nama</th>
                <th class="bg-slate-50 py-[14px] px-[14px] text-left font-semibold text-gray-700">Task</th>
                <th class="bg-slate-50 py-[14px] px-[14px] text-left font-semibold text-gray-700">Status</th>
              </tr>
            </thead>

            <tbody>

              <tr class="border-b border-gray-100 last:border-0">
                <td class="py-[14px] px-[14px] text-left text-gray-600">1</td>
                <td class="py-[14px] px-[14px] text-left font-medium text-gray-800">Fhaty</td>
                <td class="py-[14px] px-[14px] text-left text-gray-600">Belajar Laravel API</td>
                <td class="py-[14px] px-[14px] text-left">
                  <span class="bg-green-100 text-green-800 py-[6px] px-[12px] rounded-[20px] text-[13px] font-semibold">Selesai</span>
                </td>
              </tr>

              <tr class="border-b border-gray-100 last:border-0">
                <td class="py-[14px] px-[14px] text-left text-gray-600">2</td>
                <td class="py-[14px] px-[14px] text-left font-medium text-gray-800">Andi</td>
                <td class="py-[14px] px-[14px] text-left text-gray-600">Design UI Mobile</td>
                <td class="py-[14px] px-[14px] text-left">
                  <span class="bg-red-100 text-red-800 py-[6px] px-[12px] rounded-[20px] text-[13px] font-semibold">Pending</span>
                </td>
              </tr>

              <tr class="border-b border-gray-100 last:border-0">
                <td class="py-[14px] px-[14px] text-left text-gray-600">3</td>
                <td class="py-[14px] px-[14px] text-left font-medium text-gray-800">Sinta</td>
                <td class="py-[14px] px-[14px] text-left text-gray-600">Integrasi Database</td>
                <td class="py-[14px] px-[14px] text-left">
                  <span class="bg-green-100 text-green-800 py-[6px] px-[12px] rounded-[20px] text-[13px] font-semibold">Selesai</span>
                </td>
              </tr>

              <tr class="border-b border-gray-100 last:border-0">
                <td class="py-[14px] px-[14px] text-left text-gray-600">4</td>
                <td class="py-[14px] px-[14px] text-left font-medium text-gray-800">Budi</td>
                <td class="py-[14px] px-[14px] text-left text-gray-600">Membuat API</td>
                <td class="py-[14px] px-[14px] text-left">
                  <span class="bg-red-100 text-red-800 py-[6px] px-[12px] rounded-[20px] text-[13px] font-semibold">Pending</span>
                </td>
              </tr>

            </tbody>

          </table>

        </div>

        <!-- ACTIVITY -->
        <div class="bg-white p-[20px] rounded-[18px] shadow-[0_4px_20px_rgba(0,0,0,0.05)]">

          <div class="mb-[20px]">
            <h2 class="text-xl font-bold text-gray-800">Recent Activity</h2>
          </div>

          <div class="flex flex-col gap-[20px]">

            <div class="flex items-center gap-[15px]">
              <i class="fa-solid fa-circle-check w-[50px] h-[50px] bg-indigo-500 text-white rounded-full flex items-center justify-center text-xl shrink-0"></i>
              <div>
                <h4 class="font-semibold text-gray-800 m-0">User menyelesaikan task</h4>
                <p class="text-gray-500 text-[14px] m-0 mt-1">2 menit yang lalu</p>
              </div>
            </div>

            <div class="flex items-center gap-[15px]">
              <i class="fa-solid fa-user-plus w-[50px] h-[50px] bg-indigo-500 text-white rounded-full flex items-center justify-center text-xl shrink-0"></i>
              <div>
                <h4 class="font-semibold text-gray-800 m-0">User baru mendaftar</h4>
                <p class="text-gray-500 text-[14px] m-0 mt-1">10 menit yang lalu</p>
              </div>
            </div>

            <div class="flex items-center gap-[15px]">
              <i class="fa-solid fa-list w-[50px] h-[50px] bg-indigo-500 text-white rounded-full flex items-center justify-center text-xl shrink-0"></i>
              <div>
                <h4 class="font-semibold text-gray-800 m-0">Task baru ditambahkan</h4>
                <p class="text-gray-500 text-[14px] m-0 mt-1">20 menit yang lalu</p>
              </div>
            </div>

          </div>

        </div>

      </section>

    </main>

  </div>

  <script src="script.js"></script>
</body>
</html>
