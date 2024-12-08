
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia - IRS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Mahasiswa/akademik.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
</head>
<body class="p-4">
    <class="container">
        <header class="header-gradient text-white">
            <h1 class="text-3xl font-bold mb-2">Sinar Akademia</h1>
            <h2 class="text-xl opacity-90" id="pageTitle">Buat IRS - INDEX</h2>
            <div class="mt-4 flex justify-between items-center">
                <div class="breadcrumb text-sm">
                    <a href="http://127.0.0.1:8000/dashboard">Home</a>
                    <span>/</span>
                    <span id="breadcrumbTitle">Buat IRS - INDEX</span>
                </div>
                <div class="text-sm bg-white/10 inline-block px-4 py-2 rounded-full">
                    Mahasiswa
                </div>
            </div>
        </header>

        <div class="nav-buttons">
            <button class="nav-button active" onclick="showView('buatIrs')">Buat IRS</button>
            <button class="nav-button" onclick="showView('irs')">IRS</button>
            <button class="nav-button" onclick="showView('khs')">KHS</button>
            <button class="nav-button" onclick="showView('transkrip')">Transkrip</button>
        </div>

        <!-- Tampilan Buat IRS -->
        <div id="buatIrsView" >
            <section class="mb-8">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">PERKULIAHAN</h3>
                <div class="info-card">
                    <h4 class="text-lg font-semibold mb-4 text-gray-700">Buat IRS</h4>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="stats-badge">Tahun Ajaran: 2024/2025</div>
                        <div class="stats-badge">Semester: 5</div>
                        <div class="stats-badge">IPK: 4.00</div>
                        <div class="stats-badge">IPS: 4.00</div>
                        <div class="stats-badge">Max SKS: 24</div>
                    </div>
                    
                    <div class="mt-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tambah Mata Kuliah:</label>
                        <select class="custom-select">
                            <option value="">-- Pilih Mata Kuliah --</option>
                            <option value="struktur-data">Struktur Data (3 SKS)</option>
                            <option value="proyek-perangkat-lunak">Proyek Perangkat Lunak (3 SKS)</option>
                            <option value="pengembangan-berbasis-platform">Pengembangan Berbasis Platform (4 SKS)</option>
                            <option value="komputasi-tersebar">Komputasi Tersebar dan Paralel (3 SKS)</option>
                        </select>
                    </div>
                </div>
            </section>

            <div class="schedule-table w-full mb-8">  
              <table class="w-full">  
                  <thead>  
                      <tr>  
                          <th>WAKTU</th>  
                          <th>SENIN</th>  
                          <th>SELASA</th>  
                          <th>RABU</th>  
                          <th>KAMIS</th>  
                          <th>JUMAT</th>  
                      </tr>  
                  </thead>  
                  <tbody>  
                      <tr>  
                          <td class="font-medium">07:00</td>  
                            <td>  
                                <div class="class-block class-blue class-2.5h">  
                                  <div class="font-medium">Dasar Pemrograman - A</div>  
                                  <div class="text-sm mt-1">Semester 1/3 SKS</div>  
                                  <div class="text-xs mt-1">07:00 - 09:30</div>  
                                  <div class="text-xs">Ruang A101</div>  
                              </div>  
                              <div class="class-block class-blue class-2.5h mt-2">  
                                  <div class="font-medium">Struktur Data - A</div>  
                                  <div class="text-sm mt-1">Semester 1/4 SKS</div>  
                                  <div class="text-xs mt-1">07:00 - 10:30</div>  
                                  <div class="text-xs">Ruang E101</div>  
                              </div>  
                              <div class="class-block class-blue class-2.5h mt-2">  
                                  <div class="font-medium">Pengembangan Berbasis Platform - A</div>  
                                  <div class="text-sm mt-1">Semester 5/3 SKS</div>  
                                  <div class="text-xs mt-1">07:00 - 10:30</div>  
                                  <div class="text-xs">Ruang E102</div>  
                              </div>  
                          </td>
                          <td>  
                              <div class="class-block class-orange">  
                                  <div class="font-medium">Struktur Data - C</div>  
                                  <div class="text-sm mt-1">Semester 1/4 SKS</div>  
                                  <div class="text-xs mt-1">07:00 - 10:30</div>  
                                  <div class="text-xs">Ruang E103</div>  
                              </div>  
                              <div class="class-block class-orange mt-2">  
                                  <div class="font-medium">Pengembangan Berbasis Platform - B</div>  
                                  <div class="text-sm mt-1">Semester 5/3 SKS</div>  
                                  <div class="text-xs mt-1">07:00 - 10:30</div>  
                                  <div class="text-xs">Ruang E110</div>  
                              </div>  
                          </td>  
                          <td>  
                              <div class="class-block class-green">  
                                  <div class="font-medium">Struktur Diskrit - A</div>  
                                  <div class="text-sm mt-1">Semester 1/4 SKS</div>  
                                  <div class="text-xs mt-1">07:00 - 10:30</div>  
                                  <div class="text-xs">Ruang A105</div>  
                              </div>  
                              <div class="class-block class-green mt-2">  
                                  <div class="font-medium">Pengembangan Berbasis Platform - D</div>  
                                  <div class="text-sm mt-1">Semester 5/3 SKS</div>  
                                  <div class="text-xs mt-1">07:00 - 10:30</div>  
                                  <div class="text-xs">Ruang E104</div>  
                              </div>  
                          </td>  
                          <td>  
                              <div class="class-block class-blue">  
                                  <div class="font-medium">Struktur Diskrit - D</div>  
                                  <div class="text-sm mt-1">Semester 1/4 SKS</div>  
                                  <div class="text-xs mt-1">07:00 - 10:30</div>  
                                  <div class="text-xs">Ruang A106</div>  
                              </div>  
                          </td>  
                          <td>  
                              <div class="class-block class-orange">  
                                  <div class="font-medium">Sistem Operasi - D</div>  
                                  <div class="text-sm mt-1">Semester 3/3 SKS</div>  
                                  <div class="text-xs mt-1">07:00 - 10:30</div>  
                                  <div class="text-xs">Ruang F102</div>  
                              </div>  
                          </td>  
                      </tr>  
                      <tr>  
                          <td class="font-medium">08:00</td>  
                          <td></td>  
                          <td></td>  
                          <td>  
                              <div class="class-block class-green">  
                                  <div class="font-medium">Dasar Pemrograman - C</div>  
                                  <div class="text-sm mt-1">Semester 1/3 SKS</div>  
                                  <div class="text-xs mt-1">08:00 - 10:30</div>  
                                  <div class="text-xs">Ruang A107</div>  
                              </div>  
                          </td>  
                          <td></td>  
                          <td></td>  
                      </tr>  
                      <tr><td class="font-medium">09:00</td><td></td><td></td><td></td><td></td><td></td></tr>  
                      <tr><td class="font-medium">10:00</td><td></td><td></td><td></td><td></td><td></td></tr>  
                      <tr><td class="font-medium">11:00</td><td></td><td></td><td></td><td></td><td></td></tr>  
                      <tr><td class="font-medium">12:00</td><td></td><td></td><td></td><td></td><td></td></tr>  
                      <tr><td class="font-medium">13:00</td><td></td><td></td><td></td><td></td><td></td></tr>  
                      <tr><td class="font-medium">14:00</td><td></td><td></td><td></td><td></td><td></td></tr>  
                      <tr><td class="font-medium">15:00</td><td></td><td></td><td></td><td></td><td></td></tr>  
                      <tr><td class="font-medium">16:00</td><td></td><td></td><td></td><td></td><td></td></tr>  
                      <tr><td class="font-medium">17:00</td><td></td><td></td><td></td><td></td><td></td></tr>  
                      <tr><td class="font-medium">18:00</td><td></td><td></td><td></td><td></td><td></td></tr>  
                  </tbody>  
              </table>  
          </div>
          
            <footer class="text-right">   
                <footer class="fixed bottom-0 left-0 right-0 bg-white shadow-md p-4">  
                    <button   
                    onclick="document.getElementById('courses-popup').classList.remove('hidden');   
                            document.getElementById('courses-popup').classList.add('flex');  
                            irsSelector.showCoursesPopup();"   
                    class="bg-blue-600 text-white px-4 py-2 rounded w-full"  
                >  
                    0 SKS Terpilih  
                </button>  
         </footer>
            </footer>
        </div>  

        <!-- Popup Mata Kuliah -->  
        <div   
        id="courses-popup"   
        class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center"  
        >  
        <div class="bg-white rounded-lg shadow-xl w-[500px] max-h-[80vh] overflow-y-auto p-6 relative">  
            <!-- Header Popup -->  
            <div class="flex justify-between items-center border-b pb-4 mb-4">  
                <h2 class="text-xl font-bold text-gray-800">Mata Kuliah Terpilih</h2>  
                <button   
                    onclick="closeCoursesPopup()"  
                    class="text-gray-600 hover:text-gray-900"  
                >  
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />  
                    </svg>  
                </button>  
            </div>  

            <!-- Daftar Mata Kuliah -->  
            <div id="selected-courses-list" class="space-y-4">  
                <!-- Mata kuliah akan ditambahkan secara dinamis di sini -->  
                    
            </div>  

            <!-- Footer Popup -->  
            <div class="mt-6 flex justify-between items-center border-t pt-4">  
                <div class="font-semibold text-gray-700">  
                    Total SKS: <span id="total-sks-popup">0</span>  
                </div>  
                <button   
                    onclick="confirmCourses()"  
                    class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-colors"  
                >  
                    Konfirmasi Mata Kuliah  
                </button>  
            </div>  
        </div>  
        </div>  

        <!-- Tampilan IRS -->
        <div id="irsView">
            <section class="mb-8">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">PERKULIAHAN</h3>
                
                <div class="semester-card flex justify-between items-center">
                    <div>
                        <h4 class="text-lg font-semibold">Semester - 1</h4>
                        <p class="text-gray-600">Tahun Ajaran 2022/2023 Ganjil</p>
                        <p class="text-sm text-gray-500 mt-1">Jumlah SKS: 24</p>
                    </div>
                    <div class="text-[#40b9b3]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>

                <div class="semester-card flex justify-between items-center">
                    <div>
                        <h4 class="text-lg font-semibold">Semester - 2</h4>
                        <p class="text-gray-600">Tahun Ajaran 2022/2023 Genap</p>
                        <p class="text-sm text-gray-500 mt-1">Jumlah SKS: 24</p>
                    </div>
                    <div class="text-[#40b9b3]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>

                <div class="semester-card flex justify-between items-center">
                    <div>
                        <h4 class="text-lg font-semibold">Semester - 3</h4>
                        <p class="text-gray-600">Tahun Ajaran 2023/2024 Ganjil</p>
                        <p class="text-sm text-gray-500 mt-1">Jumlah SKS: 24</p>
                    </div>
                    <div class="text-[#40b9b3]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>

                <div class="semester-card flex justify-between items-center">
                    <div>
                        <h4 class="text-lg font-semibold">Semester - 4</h4>
                        <p class="text-gray-600">Tahun Ajaran 2023/2024 Genap</p>
                        <p class="text-sm text-gray-500 mt-1">Jumlah SKS: 24</p>
                    </div>
                    <div class="text-[#40b9b3]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>

                <div class="semester-card flex justify-between items-center">
                    <div>
                        <h4 class="text-lg font-semibold">Semester - 5</h4>
                        <p class="text-gray-600">Tahun Ajaran 2024/2025 Ganjil</p>
                        <p class="text-sm text-gray-500 mt
                                                <p class="text-sm text-gray-500 mt-1">Jumlah SKS: 16</p>  
                    </div>  
                    <div class="text-[#40b9b3]">  
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />  
                        </svg>  
                    </div>  
                </div>  
            </section>  
        </div>
        
        <!-- Tampilan KHS -->
        <div id="khsView">
          <section class="mb-8">
              <h3 class="text-xl font-semibold mb-4 text-gray-800">PERKULIAHAN</h3>
              
              <div class="semester-card flex justify-between items-center">
                  <div>
                      <h4 class="text-lg font-semibold">Semester - 1</h4>
                      <p class="text-gray-600">Tahun Ajaran 2022/2023 Ganjil</p>
                      <p class="text-sm text-gray-500 mt-1">Jumlah SKS: 24</p>
                  </div>
                  <div class="text-[#40b9b3]">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                  </div>
              </div>

              <div class="semester-card flex justify-between items-center">
                  <div>
                      <h4 class="text-lg font-semibold">Semester - 2</h4>
                      <p class="text-gray-600">Tahun Ajaran 2022/2023 Genap</p>
                      <p class="text-sm text-gray-500 mt-1">Jumlah SKS: 24</p>
                  </div>
                  <div class="text-[#40b9b3]">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                  </div>
              </div>

              <div class="semester-card flex justify-between items-center">
                  <div>
                      <h4 class="text-lg font-semibold">Semester - 3</h4>
                      <p class="text-gray-600">Tahun Ajaran 2023/2024 Ganjil</p>
                      <p class="text-sm text-gray-500 mt-1">Jumlah SKS: 24</p>
                  </div>
                  <div class="text-[#40b9b3]">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                  </div>
              </div>

              <div class="semester-card flex justify-between items-center">
                  <div>
                      <h4 class="text-lg font-semibold">Semester - 4</h4>
                      <p class="text-gray-600">Tahun Ajaran 2023/2024 Genap</p>
                      <p class="text-sm text-gray-500 mt-1">Jumlah SKS: 24</p>
                  </div>
                  <div class="text-[#40b9b3]">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                  </div>
              </div>

              <div class="semester-card flex justify-between items-center">
                  <div>
                      <h4 class="text-lg font-semibold">Semester - 5</h4>
                      <p class="text-gray-600">Tahun Ajaran 2024/2025 Ganjil</p>
                      <p class="text-sm text-gray-500 mt"
                      <p class="text-sm text-gray-500 mt-1">Jumlah SKS: 16</p>  
                  </div>  
                  <div class="text-[#40b9b3]">  
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />  
                      </svg>  
                  </div>  
              </div>  
          </section>  
      </div>

      <!-- Tampilan Transkrip -->
      <div id="transkripView">  
        <div class="gradient-bg py-8 px-4">  
            <div class="max-w-6xl mx-auto glass-effect rounded-xl shadow-2xl p-8 animate-fade-in">  
                <!-- Header Section -->  
                <div class="text-center mb-10">  
                    <h1 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-blue-600">  
                        TRANSKRIP AKADEMIK  
                    </h1>  
                    <div class="w-32 h-1 bg-gradient-to-r from-purple-600 to-blue-600 mx-auto mt-2 rounded-full"></div>  
                </div>  

                <!-- Tab Navigation -->  
                <div class="flex justify-center mb-8">  
                    <div class="bg-white rounded-lg shadow-md p-1 inline-flex">  
                        <button class="px-6 py-2 rounded-lg bg-gradient-to-r from-purple-600 to-blue-600 text-white font-medium transition-all duration-300">  
                            Lengkap  
                        </button>  
                        <button class="px-6 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-all duration-300">  
                            Terbaik  
                        </button>  
                        <button class="px-6 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-all duration-300">  
                            Inggris  
                        </button>  
                    </div>  
                </div>  

                <!-- Alert Box -->  
                <div class="bg-gradient-to-r from-amber-50 to-yellow-50 border-l-4 border-yellow-400 p-4 mb-8 rounded-r-lg shadow-sm">  
                    <div class="flex items-center">  
                        <div class="flex-shrink-0">  
                            <svg class="h-6 w-6 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>  
                            </svg>  
                        </div>  
                        <div class="ml-3">  
                            <p class="text-sm text-yellow-700 font-medium">  
                                Kalo Transkrip kosong harap hubungi operator prodi.  
                            </p>  
                        </div>  
                    </div>  
                </div>  

                <!-- Action Buttons -->  
                <div class="flex gap-4 mb-8">  
                    <button class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-6 py-2 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 flex items-center">  
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>  
                        </svg>  
                        Print  
                    </button>  
                    <button class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-6 py-2 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 flex items-center">  
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>  
                        </svg>  
                        Download PDF  
                    </button>  
                </div>  

                <!-- Student Info Card -->  
                <div class="bg-white rounded-xl shadow-lg p-6 mb-8">  
                    <div class="grid md:grid-cols-2 gap-6">  
                        <div class="space-y-3">  
                            <div class="flex items-center">  
                                <span class="text-gray-500 w-32">Nama</span>  
                                <span class="font-semibold text-gray-800">: Rudi Tabuti</span>  
                            </div>  
                            <div class="flex items-center">  
                                <span class="text-gray-500 w-32">Prodi</span>  
                                <span class="font-semibold text-gray-800">: Informatika</span>  
                            </div>  
                        </div>  
                        <div class="space-y-3">  
                            <div class="flex items-center">  
                                <span class="text-gray-500 w-32">NIM</span>  
                                <span class="font-semibold text-gray-800">: 24060122140166</span>  
                            </div>  
                            <div class="flex items-center">  
                                <span class="text-gray-500 w-32">Tahun Masuk</span>  
                                <span class="font-semibold text-gray-800">: 2022</span>  
                            </div>  
                        </div>  
                    </div>  
                </div>  

                <!-- Search & Filter -->  
                <div class="flex gap-4 mb-6">  
                    <div class="flex-1">  
                        <input type="text"   
                               placeholder="Cari mata kuliah..."   
                               class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent">  
                    </div>  
                    <select class="px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent">  
                        <option value="">Urutkan berdasarkan</option>  
                        <option value="kode">Kode MK</option>  
                        <option value="nama">Nama MK</option>  
                        <option value="sks">SKS</option>  
                        <option value="nilai">Nilai</option>  
                    </select>  
                </div>  

                <!-- Grades Table -->  
                <div class="overflow-hidden rounded-xl shadow-lg mb-8">  
                    <table class="w-full">  
                        <thead>  
                            <tr class="bg-gradient-to-r from-purple-600 to-blue-600 text-white">  
                                <th class="px-6 py-3 text-left text-sm font-semibold">No.</th>  
                                <th class="px-6 py-3 text-left text-sm font-semibold">Kode</th>  
                                <th class="px-6 py-3 text-left text-sm font-semibold">Mata Kuliah</th>  
                                <th class="px-6 py-3 text-center text-sm font-semibold">SKS</th>  
                                <th class="px-6 py-3 text-center text-sm font-semibold">Nilai</th>  
                            </tr>  
                        </thead>  
                        <tbody class="bg-white divide-y divide-gray-200">  
                            <tr class="hover:bg-gray-50 transition-colors duration-200">  
                                <td class="px-6 py-4 text-sm text-gray-900">1</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">PAIK6101</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">Matematika I</td>  
                                <td class="px-6 py-4 text-sm text-gray-900 text-center">2</td>  
                                <td class="px-6 py-4 text-center">  
                                    <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">  
                                        A  
                                    </span>  
                                </td>  
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-200">  
                                <td class="px-6 py-4 text-sm text-gray-900">2</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">PAIK6201</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">Dasar Pemrograman</td>  
                                <td class="px-6 py-4 text-sm text-gray-900 text-center">4</td>  
                                <td class="px-6 py-4 text-center">  
                                    <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">  
                                        A  
                                    </span>
                                </td>
                            </tr>    
                            <tr class="hover:bg-gray-50 transition-colors duration-200">  
                                <td class="px-6 py-4 text-sm text-gray-900">3</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">PAIK6201</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">Dasar Sistem</td>  
                                <td class="px-6 py-4 text-sm text-gray-900 text-center">3</td>  
                                <td class="px-6 py-4 text-center">  
                                    <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">  
                                        A  
                                    </span>
                                </td>
                            </tr>   
                            <tr class="hover:bg-gray-50 transition-colors duration-200">  
                                <td class="px-6 py-4 text-sm text-gray-900">4</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">PAIK6201</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">Bahasa Inggris</td>  
                                <td class="px-6 py-4 text-sm text-gray-900 text-center">2</td>  
                                <td class="px-6 py-4 text-center">  
                                    <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">  
                                        A  
                                    </span>
                                </td>
                            </tr> 
                            <tr class="hover:bg-gray-50 transition-colors duration-200">  
                                <td class="px-6 py-4 text-sm text-gray-900">5</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">PAIK6201</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">Bahasa Indonesia</td>  
                                <td class="px-6 py-4 text-sm text-gray-900 text-center">2</td>  
                                <td class="px-6 py-4 text-center">  
                                    <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">  
                                        A  
                                    </span>
                                </td>
                            </tr> 
                            <tr class="hover:bg-gray-50 transition-colors duration-200">  
                                <td class="px-6 py-4 text-sm text-gray-900">6</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">PAIK6201</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">Kewirausahaan</td>  
                                <td class="px-6 py-4 text-sm text-gray-900 text-center">2</td>  
                                <td class="px-6 py-4 text-center">  
                                    <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">  
                                        A  
                                    </span>
                                </td>
                            </tr> 
                            <tr class="hover:bg-gray-50 transition-colors duration-200">  
                                <td class="px-6 py-4 text-sm text-gray-900">7</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">PAIK6201</td>  
                                <td class="px-6 py-4 text-sm text-gray-900">Matematika II</td>  
                                <td class="px-6 py-4 text-sm text-gray-900 text-center">2</td>  
                                <td class="px-6 py-4 text-center">  
                                    <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">  
                                        A  
                                    </span>
                                </td>
                            </tr> 
                        </tbody>  
                    </table>  
                </div>  

                <!-- Summary Cards -->  
                <div class="grid grid-cols-2 gap-6 mb-12">  
                    <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl p-6 text-white shadow-lg">  
                        <h3 class="text-lg font-semibold mb-2">SKS Kumulatif</h3>  
                        <p class="text-3xl font-bold">144</p>  
                    </div>  
                    <div class="bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl p-6 text-white shadow-lg">  
                        <h3 class="text-lg font-semibold mb-2">IP Kumulatif</h3>  
                        <p class="text-3xl font-bold">4.0</p>  
                    </div>  
                </div>  

                <!-- Signature Section -->  
                <div class="text-center mt-16">  
                    <p class="text-gray-600 mb-2">Dekan,</p>  
                    <div class="w-64 h-32 mx-auto my-4 relative">  
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-100 to-purple-100 opacity-30 rounded-lg"></div>  
                    </div>  
                    <p class="font-semibold text-gray-800">Prof. Dr. Kusworo Adi, S.Si., M.T.</p>  
                    <p class="text-gray-600">NIP. 197203171998021001</p>  
                </div>  
            </div>  
        </div>  
    </div>

    <script> 
        function showView(view) {  
            const buatIrsView = document.getElementById('buatIrsView');  
            const irsView = document.getElementById('irsView');
            const khsView = document.getElementById('khsView'); 
            const transkripView = document.getElementById('transkripView'); 
            const pageTitle = document.getElementById('pageTitle');  
            const breadcrumbTitle = document.getElementById('breadcrumbTitle');  
            const buttons = document.querySelectorAll('.nav-button');  

            // Reset semua button  
            buttons.forEach(button => button.classList.remove('active'));  

            if (view === 'buatIrs') {  
                buatIrsView.style.display = 'block';  
                irsView.style.display = 'none';  
                pageTitle.textContent = 'Buat IRS - INDEX';  
                breadcrumbTitle.textContent = 'Buat IRS - INDEX';  
                buttons[0].classList.add('active');  
            } else if (view === 'irs') {  
                buatIrsView.style.display = 'none';  
                irsView.style.display = 'block';  
                pageTitle.textContent = 'IRS - INDEX';  
                breadcrumbTitle.textContent = 'IRS - INDEX';  
                buttons[1].classList.add('active');  
            }  else if (view === 'khs') {  
                buatIrsView.style.display = 'none';  
                irsView.style.display = 'block';  
                pageTitle.textContent = 'KHS - INDEX';  
                breadcrumbTitle.textContent = 'KHS - INDEX';  
                buttons[2].classList.add('active');  
            }  else if (view === 'transkrip') {  
                buatIrsView.style.display = 'none';  
                transkripView.style.display = 'block';  
                pageTitle.textContent = 'Transkrip - Nilai';  
                breadcrumbTitle.textContent = 'Transkrip - Nilai';  
                buttons[3].classList.add('active');  
            } 
        }  

        document.addEventListener('DOMContentLoaded', function() {  
        class IRSSelector {  
        constructor() {  
            this.selectedCourses = new Set();  
            this.maxSKS = 24;  
            this.initializeEventListeners();  
        }  

        initializeEventListeners() {  
            // Event listener untuk blok mata kuliah  
            const scheduleTable = document.querySelector('.schedule-table');  
            scheduleTable.addEventListener('click', (e) => {  
                const courseBlock = e.target.closest('.class-block');  
                if (courseBlock) {  
                    this.toggleCourseSelection(courseBlock);  
                }  
            });  

            // Event listener untuk dropdown mata kuliah  
            const courseSelect = document.querySelector('.custom-select');  
            courseSelect.addEventListener('change', (e) => {  
                this.addCourseFromSelect(e);  
            });  
        }  

            initializePopupEventListeners() {  
            // Event listener untuk total SKS footer  
            const totalSKSButton = document.querySelector('footer .bg-blue-600');  
            if (totalSKSButton) {  
                totalSKSButton.addEventListener('click', () => showCoursesPopup());  
            }  

            // Event listener untuk tombol tutup popup  
            const closePopupBtn = document.getElementById('closePopup');  
            if (closePopupBtn) {  
                closePopupBtn.addEventListener('click', () => this.closeCoursesPopup());  
            }  

            // Event listener untuk tombol konfirmasi  
            const confirmCoursesBtn = document.getElementById('confirmCourses');  
            if (confirmCoursesBtn) {  
                confirmCoursesBtn.addEventListener('click', () => this.confirmCourses());  
            }  
        } 

        toggleCourseSelection(courseBlock) {  
            console.log('Toggling course selection for:', courseBlock);  
            if (courseBlock.classList.contains('selected')) {  
                this.removeCourse(courseBlock);  
            } else {  
                this.addCourse(courseBlock);  
            }  
        }  

        addCourse(courseBlock) {  
            // Ekstrak informasi mata kuliah  
            const courseName = courseBlock.querySelector('.font-medium').textContent;  
            const courseInfo = courseBlock.querySelector('.text-sm').textContent;  
            const sks = parseInt(courseInfo.split('/')[1]);  

            // Cek konflik jadwal dan total SKS  
            if (this.checkScheduleConflict(courseBlock)) {  
                Swal.fire({  
                    icon: 'warning',  
                    title: 'Konflik Jadwal',  
                    text: 'Mata kuliah ini bertabrakan dengan mata kuliah yang sudah dipilih.'  
                });  
                return;  
            }  

            // Cek total SKS  
            if (this.calculateTotalSKS() + sks > this.maxSKS) {  
                Swal.fire({  
                    icon: 'warning',  
                    title: 'Batas SKS Terlampaui',  
                    text: `Total SKS tidak boleh melebihi ${this.maxSKS}`  
                });  
                return;  
            }  

            // Tambahkan mata kuliah  
            courseBlock.classList.add('selected'); // Pastikan ini ditambahkan  
            courseBlock.classList.add('border-2');  
            courseBlock.classList.add('border-green-500');  
            this.selectedCourses.add(courseBlock);  

            // Update total SKS  
            this.updateTotalSKS();  
        }  

        removeCourse(courseBlock) {  
            courseBlock.classList.remove('selected');  
            courseBlock.classList.remove('border-2');  
            courseBlock.classList.remove('border-green-500');  
            this.selectedCourses.delete(courseBlock);  

            // Update total SKS  
            this.updateTotalSKS();  
        }  

        checkScheduleConflict(newCourseBlock) {  
    const newCourseInfo = newCourseBlock.querySelector('.text-xs:nth-child(3)').textContent;  
    const [newStartTime, newEndTime] = newCourseInfo.split(' - ');  
    
    // Cari indeks kolom hari untuk mata kuliah baru  
    const newCourseColumn = newCourseBlock.closest('td');  
    const newCourseColumnIndex = Array.from(newCourseColumn.parentNode.children).indexOf(newCourseColumn);  

    // Konversi waktu ke menit  
    const convertToMinutes = (timeString) => {  
        const [hours, minutes] = timeString.split(':').map(Number);  
        return hours * 60 + minutes;  
    };  

    const newStartMinutes = convertToMinutes(newStartTime);  
    const newEndMinutes = convertToMinutes(newEndTime);  

    // Cek konflik dengan mata kuliah yang sudah dipilih  
    for (let selectedCourse of this.selectedCourses) {  
        const existingCourseInfo = selectedCourse.querySelector('.text-xs:nth-child(3)').textContent;  
        const [existingStartTime, existingEndTime] = existingCourseInfo.split(' - ');  
        
        // Cari indeks kolom hari untuk mata kuliah yang sudah dipilih  
        const existingCourseColumn = selectedCourse.closest('td');  
        const existingCourseColumnIndex = Array.from(existingCourseColumn.parentNode.children).indexOf(existingCourseColumn);  

        // Hanya cek konflik jika di hari yang sama  
        if (newCourseColumnIndex === existingCourseColumnIndex) {  
            const existingStartMinutes = convertToMinutes(existingStartTime);  
            const existingEndMinutes = convertToMinutes(existingEndTime);  

            // Cek tumpang tindih waktu  
            if (  
                (newStartMinutes >= existingStartMinutes && newStartMinutes < existingEndMinutes) ||  
                (newEndMinutes > existingStartMinutes && newEndMinutes <= existingEndMinutes) ||  
                (newStartMinutes <= existingStartMinutes && newEndMinutes >= existingEndMinutes)  
            ) {  
                // Tampilkan nama mata kuliah yang konflik  
                const conflictingCourseName = selectedCourse.querySelector('.font-medium').textContent;  
                
                Swal.fire({  
                    icon: 'warning',  
                    title: 'Konflik Jadwal',  
                    html: `Mata kuliah ini bertabrakan dengan mata kuliah:<br><strong>${conflictingCourseName}</strong>`  
                });  
                
                return true; // Ada konflik  
            }  
        }  
    }  

    return false; // Tidak ada konflik  
}

        calculateTotalSKS() {  
            let totalSKS = 0;  
            for (let courseBlock of this.selectedCourses) {  
                const courseInfo = courseBlock.querySelector('.text-sm').textContent;  
                const sks = parseInt(courseInfo.split('/')[1]);  
                totalSKS += sks;  
            }  
            return totalSKS;  
        }  

        updateTotalSKS() {  
            const totalSKS = this.calculateTotalSKS();  
            const totalSKSElement = document.querySelector('footer .bg-blue-600');  
            
            if (totalSKSElement) {  
                totalSKSElement.textContent = `${totalSKS} SKS Terpilih`;  
            }  

            // Update max SKS di info card  
            const maxSKSElement = document.querySelector('.stats-badge:last-child');  
            if (maxSKSElement) {  
                maxSKSElement.textContent = `Max SKS: ${this.maxSKS - totalSKS}`;  
            }  

            // Optional: Tambahkan indikator visual jika mendekati batas SKS  
            if (totalSKS >= this.maxSKS * 0.8) {  
                totalSKSElement.classList.add('bg-red-600');  
            } else {  
                totalSKSElement.classList.remove('bg-red-600');  
            }  
        }  

        addCourseFromSelect(event) {  
            const selectedValue = event.target.value;  
            if (!selectedValue) return;  

            // Cari blok mata kuliah yang sesuai  
            const matchingCourseBlocks = Array.from(document.querySelectorAll('.class-block'))  
                .filter(block => {  
                    const courseName = block.querySelector('.font-medium').textContent;  
                    return courseName.toLowerCase().includes(selectedValue.replace('-', ' ').toLowerCase());  
                });  

            if (matchingCourseBlocks.length > 0) {  
                // Pilih blok pertama yang cocok  
                this.addCourse(matchingCourseBlocks[0]);  
                
                // Reset select  
                event.target.value = '';  
            }  
        }  
    }  

    // Tambahkan SweetAlert untuk notifikasi  
    const script = document.createElement('script');  
    script.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@11';  
    document.head.appendChild(script);  

    // Inisialisasi setelah script SweetAlert dimuat  
    script.onload = () => {  
        new IRSSelector();  
    };  
});  

document.head.appendChild(style); 
        
// Fungsi untuk menampilkan popup mata kuliah  
function showCoursesPopup() {  
    const selectedCourses = document.querySelectorAll('.course-block.selected');  
    console.log('Selected Courses:', selectedCourses); // Debugging  

    if (selectedCourses.length === 0) {  
        Swal.fire({  
            icon: 'info',  
            title: 'Tidak Ada Mata Kuliah',  
            text: 'Anda belum memilih mata kuliah apapun.'  
        });  
        return;  
    } else {  
        const popup = document.getElementById('courses-popup');  
        const coursesList = document.getElementById('selected-courses-list');  
        const totalSKSPopup = document.getElementById('total-sks-popup');  

        coursesList.innerHTML = '';  
        let totalSKS = 0;  

        selectedCourses.forEach(courseBlock => {  
            const courseName = courseBlock.querySelector('.font-medium').textContent;  
            const courseInfo = courseBlock.querySelector('.text-sm').textContent;  
            const courseTime = courseBlock.querySelector('.text-xs:nth-child(3)').textContent;  
            const courseRoom = courseBlock.querySelector('.text-xs:nth-child(4)').textContent;  

            const sksMatch = courseInfo.match(/(\d+)\s*SKS/);  
            const courseSKS = sksMatch ? parseInt(sksMatch[1]) : 0;  
            totalSKS += courseSKS;  

            const courseItem = document.createElement('div');  
            courseItem.className = 'bg-gray-100 p-4 rounded-lg flex justify-between items-center';  
            courseItem.innerHTML = `  
                <div>  
                    <h3 class="font-semibold text-gray-800">${courseName}</h3>  
                    <p class="text-sm text-gray-600">${courseInfo}</p>  
                    <p class="text-xs text-gray-500">${courseTime} | ${courseRoom}</p>  
                </div>  
                <button   
                    onclick="removeCourseFromPopup('${courseName}')"   
                    class="text-red-500 hover:text-red-700"  
                >  
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />  
                    </svg>  
                </button>  
            `;  

            coursesList.appendChild(courseItem);  
        });  

        totalSKSPopup.textContent = `${totalSKS} SKS`;  
        document.getElementById('sks-button-text').textContent = `${totalSKS} SKS Terpilih`;  

        popup.classList.remove('hidden');  
        popup.classList.add('flex');  
    }  
}  

// Fungsi untuk menutup popup  
function closeCoursesPopup() {  
    const popup = document.getElementById('courses-popup');  
    popup.classList.remove('flex');  
    popup.classList.add('hidden');  
}  

// Fungsi untuk menghapus mata kuliah dari popup  
function removeCourseFromPopup(courseName) {  
    const courseBlocks = document.querySelectorAll('.course-block.selected');  

    courseBlocks.forEach(courseBlock => {  
        const currentCourseName = courseBlock.querySelector('.font-medium').textContent;  

        if (currentCourseName === courseName) {  
            courseBlock.classList.remove('selected');  
            showCoursesPopup(); // Refresh popup  
        }  
    });  
}  

// Fungsi untuk konfirmasi mata kuliah  
function confirmCourses() {  
    Swal.fire({  
        title: 'Konfirmasi Mata Kuliah',  
        text: 'Apakah Anda yakin dengan mata kuliah yang dipilih?',  
        icon: 'question',  
        showCancelButton: true,  
        confirmButtonText: 'Ya, Saya Yakin',  
        cancelButtonText: 'Batalkan'  
    }).then((result) => {  
        if (result.isConfirmed) {  
            closeCoursesPopup();  
            Swal.fire({  
                title: 'Proses Pengajuan',  
                text: 'Mata kuliah Anda sedang dalam proses persetujuan Dosen Pembimbing',  
                icon: 'info',  
                confirmButtonText: 'Oke'  
            });  
        }  
    });  
}  

// Inisialisasi SweetAlert  
document.addEventListener('DOMContentLoaded', function() {  
    const script = document.createElement('script');  
    script.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@11';  
    document.head.appendChild(script);  
});

    </script>  
</body>  
</html>
