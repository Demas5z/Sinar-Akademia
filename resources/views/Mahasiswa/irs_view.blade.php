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
            <h2 class="text-xl opacity-90" id="pageTitle">IRS - INDEX</h2>
            <div class="mt-4 flex justify-between items-center">
                <div class="breadcrumb text-sm">
                    <a href="http://127.0.0.1:8000/dashboard">Home</a>
                    <span>/</span>
                    <span id="breadcrumbTitle">IRS - INDEX</span>
                </div>
                <div class="text-sm bg-white/10 inline-block px-4 py-2 rounded-full">
                    Mahasiswa
                </div>
            </div>
        </header>

        <!-- Tampilan IRS -->
        <div id="irsView">  
            <section class="mb-8">  
                <h3 class="text-xl font-semibold mb-4 text-gray-800">PERKULIAHAN</h3>  
        
                <div class="semester-card flex justify-between items-center" onclick="toggleCourses('selectedCourses')">  
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
                <div id="courses1" class="course-list hidden">  
                    <ul class="list-disc pl-5">  
                        <li>Mata Kuliah 1</li>  
                        <li>Mata Kuliah 2</li>  
                        <li>Mata Kuliah 3</li>  
                    </ul>  
                </div>  
        
                <!-- Ulangi untuk semester lainnya -->  
                <div class="semester-card flex justify-between items-center" onclick="toggleCourses('courses2')">  
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
                <div id="courses2" class="course-list hidden">  
                    <ul class="list-disc pl-5">  
                        <li>Mata Kuliah 4</li>  
                        <li>Mata Kuliah 5</li>  
                        <li>Mata Kuliah 6</li>  
                    </ul>  
                </div>   
            </section>  
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
                <div class="container">
                    <h2>Mata Kuliah Terpilih</h2>
                    <div class="card-container grid grid-cols-1 gap-4 p-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    </div>                    
                </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Retrieve the selected courses from localStorage
        const selectedCourses = JSON.parse(localStorage.getItem('selectedCoursesForIRS') || '[]');
        
        // Get the container element to display the courses
        const courseListContainer = document.querySelector('.selected-courses-list');

        // Check if there are any selected courses
        if (selectedCourses.length > 0) {
            // Loop through the selected courses and display them
            selectedCourses.forEach(course => {
                // Create a new div for each selected course
                const courseItem = document.createElement('div');
                courseItem.classList.add('course-item');
                
                // Populate the content of the course item
                courseItem.innerHTML = `
                    <span class="course-name">${course.name}</span> - 
                    <span class="course-sks">${course.sks} SKS</span>
                `;
                
                // Append the new course item to the list
                courseListContainer.appendChild(courseItem);
            });
        } else {
            // If no courses are selected, display a message
            const noCoursesMessage = document.createElement('div');
            noCoursesMessage.textContent = "Anda belum memilih mata kuliah.";
            courseListContainer.appendChild(noCoursesMessage);
        }
        
        function toggleCourses(selectedCourses) {  
                    const courseList = document.getElementById(selectedCourses);  
                    if (courseList.classList.contains('hidden')) {  
                        courseList.classList.remove('hidden');  
                    } else {  
                        courseList.classList.add('hidden');  
                    }  
                }  
    });


    </script>
</body>
</html>