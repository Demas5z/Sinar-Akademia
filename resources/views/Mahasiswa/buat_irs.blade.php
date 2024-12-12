<<!DOCTYPE html>
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

        <!-- Tampilan Buat IRS -->
        <div id="buatIrsView" >
            <section class="mb-8">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">PERKULIAHAN</h3>
                <div class="info-card">
                    <h4 class="text-lg font-semibold mb-4 text-gray-700">Buat IRS</h4>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="stats-badge">Tahun Ajaran: 2024/2025</div>
                        <div class="stats-badge">Semester: 1</div>
                        <div class="stats-badge">IPK: 0</div>
                        <div class="stats-badge">IPS: 0</div>
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
                    onclick="redirectToIRS();"  
                    class="bg-blue-600 text-white px-4 py-2 rounded w-full"  
                >  
                    Simpan 0 SKS Terpilih  
                </button>
        </footer>
            </footer>
        </div>  
    


</body>

<script>


function redirectToIRS() {
            window.location.href = "{{ route('irs.view') }}";
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

            const totalSKSButton = document.querySelector('footer .bg-blue-600');  
            if (totalSKSButton) {  
                totalSKSButton.addEventListener('click', () => showCoursesPopup());  
            }  


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

            const courseName = courseBlock.querySelector('.font-medium').textContent;  
            const courseInfo = courseBlock.querySelector('.text-sm').textContent;  
            const sks = parseInt(courseInfo.split('/')[1]);  


            if (this.checkScheduleConflict(courseBlock)) {  
                Swal.fire({  
                    icon: 'warning',  
                    title: 'Konflik Jadwal',  
                    text: 'Mata kuliah ini bertabrakan dengan mata kuliah yang sudah dipilih.'  
                });  
                return;  
            }  


            if (this.calculateTotalSKS() + sks > this.maxSKS) {  
                Swal.fire({  
                    icon: 'warning',  
                    title: 'Batas SKS Terlampaui',  
                    text: `Total SKS tidak boleh melebihi ${this.maxSKS}`  
                });  
                return;  
            }  


            courseBlock.classList.add('selected');
            courseBlock.classList.add('border-2');  
            courseBlock.classList.add('border-green-500');  
            this.selectedCourses.add(courseBlock);  


            this.updateTotalSKS();  
        }  

        removeCourse(courseBlock) {  
            courseBlock.classList.remove('selected');  
            courseBlock.classList.remove('border-2');  
            courseBlock.classList.remove('border-green-500');  
            this.selectedCourses.delete(courseBlock);  

 
            this.updateTotalSKS();  
        }  

    checkScheduleConflict(newCourseBlock) {  
    const newCourseInfo = newCourseBlock.querySelector('.text-xs:nth-child(3)').textContent;  
    const [newStartTime, newEndTime] = newCourseInfo.split(' - ');  
    
 
    const newCourseColumn = newCourseBlock.closest('td');  
    const newCourseColumnIndex = Array.from(newCourseColumn.parentNode.children).indexOf(newCourseColumn);  


    const convertToMinutes = (timeString) => {  
        const [hours, minutes] = timeString.split(':').map(Number);  
        return hours * 60 + minutes;  
    };  

    const newStartMinutes = convertToMinutes(newStartTime);  
    const newEndMinutes = convertToMinutes(newEndTime);  


    for (let selectedCourse of this.selectedCourses) {  
        const existingCourseInfo = selectedCourse.querySelector('.text-xs:nth-child(3)').textContent;  
        const [existingStartTime, existingEndTime] = existingCourseInfo.split(' - ');  
        const existingCourseColumn = selectedCourse.closest('td');  
        const existingCourseColumnIndex = Array.from(existingCourseColumn.parentNode.children).indexOf(existingCourseColumn);  


        if (newCourseColumnIndex === existingCourseColumnIndex) {  
            const existingStartMinutes = convertToMinutes(existingStartTime);  
            const existingEndMinutes = convertToMinutes(existingEndTime);  

            if (  
                (newStartMinutes >= existingStartMinutes && newStartMinutes < existingEndMinutes) ||  
                (newEndMinutes > existingStartMinutes && newEndMinutes <= existingEndMinutes) ||  
                (newStartMinutes <= existingStartMinutes && newEndMinutes >= existingEndMinutes)  
            ) {  

                const conflictingCourseName = selectedCourse.querySelector('.font-medium').textContent;  
                
                Swal.fire({  
                    icon: 'warning',  
                    title: 'Konflik Jadwal',  
                    html: `Mata kuliah ini bertabrakan dengan mata kuliah:<br><strong>${conflictingCourseName}</strong>`  
                });  
                
                return true;
            }  
        }  
    }  

    return false; 
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


            const maxSKSElement = document.querySelector('.stats-badge:last-child');  
            if (maxSKSElement) {  
                maxSKSElement.textContent = `Max SKS: ${this.maxSKS - totalSKS}`;  
            }  


            if (totalSKS >= this.maxSKS * 0.8) {  
                totalSKSElement.classList.add('bg-red-600');  
            } else {  
                totalSKSElement.classList.remove('bg-red-600');  
            }  
        }  

        addCourseFromSelect(event) {  
            const selectedValue = event.target.value;  
            if (!selectedValue) return;  


            const matchingCourseBlocks = Array.from(document.querySelectorAll('.class-block'))  
                .filter(block => {  
                    const courseName = block.querySelector('.font-medium').textContent;  
                    return courseName.toLowerCase().includes(selectedValue.replace('-', ' ').toLowerCase());  
                });  

            if (matchingCourseBlocks.length > 0) {  

                this.addCourse(matchingCourseBlocks[0]);  
                

                event.target.value = '';  
            }  
        }  
    } 

    


    const script = document.createElement('script');  
    script.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@11';  
    document.head.appendChild(script);  


    script.onload = () => {  
        new IRSSelector();  
    };  
});  

</script>