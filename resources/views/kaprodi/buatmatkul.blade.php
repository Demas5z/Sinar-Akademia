<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Mata Kuliah</title>
    <link rel="stylesheet" href="{{ asset('css/Kaprodi/buatjadwalKaprodi.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="header-bar">  
        <a href="{{ route('kaprodi.dashboard') }}" class="back-button">↤ Back</a>  
    </div>  

        <div id="main-content" class="content">
            <div class="content-wrapper">
                <div class="card">
                    <div class="card-header">
                        <input id="searchMk" type="text" placeholder="Cari Mata Kuliah" class="search-input">
                        <button id="selectAll" class="btn btn-primary" >
                            Buat Mata Kuliah + 
                        </button> 
                    </div>
                    
                    <table id="Matakuliah" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode MK</th>
                                <th>Nama</th>
                                <th>Semester</th>
                                <th>SKS</th>
                                <th>Sifat</th>
                                <th>Jumlah Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Models\MataKuliah::all() as $key => $mk)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $mk->kode_mk }}</td>
                                <td>{{ $mk->nama_mk }}</td>
                                <td>{{ $mk->plot_semester }}</td>
                                <td>{{ $mk->sks }}</td>
                                <td>{{ $mk->sifat }}</td>
                                <td>{{ $mk->jumlah_kelas }}</td>
                                <td>
                                <button type="button" class="btn btn-edit" onclick="openEditModal('{{ $mk->id }}', '{{ $mk->kode_mk }}', '{{ $mk->nama_mk }}', '{{ $mk->plot_semester }}', '{{ $mk->sks }}', '{{ $mk->sifat }}', '{{ $mk->jumlah_kelas }}')"> Edit </button>
                                    <form action="{{ route('mata-kuliah.destroy', $mk->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Create Modal -->
                <div id="crud-modal" class="modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Buat Mata Kuliah</h3>
                            <button class="close-btn">&times;</button>
                        </div>
                        <form class="create-form" action="{{ route('store-mata-kuliah') }}" method="POST">
                            @csrf
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="kodemk">Kode MK</label>
                                    <input type="text" name="kode_mk" id="kodemk" placeholder="Kode MK" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama MK</label>
                                    <input type="text" name="nama_mk" id="nama" placeholder="Nama MK" required>
                                </div>
                                <div class="form-group">
                                    <label for="plotsemester">Plot Semester</label>
                                    <select id="plotsemester" name="plot_semester">
                                        <option selected>Plot Semester</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sks">SKS</label>
                                    <input type="number" name="sks" id="sks" placeholder="example : 3" required>
                                </div>
                                <div class="form-group">
                                    <label for="sifat">Sifat</label>
                                    <select id="sifat" name="sifat">
                                        <option selected>Sifat</option>
                                        <option value="W">Wajib</option>
                                        <option value="P">Pilihan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_kelas">Jumlah Kelas</label>
                                    <input type="number" name="jumlah_kelas" id="jumlah_kelas" placeholder="example : 3" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-submit">
                                <svg class="icon" viewBox="0 0 20 20">
                                    <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                                </svg>
                                Tambah Mata Kuliah
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="edit-modal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Edit Mata Kuliah</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form class="edit-form" id="editForm" method="POST">
            @csrf
            @method('PUT')
            <div class="form-grid">
                <div class="form-group">
                    <label for="edit_kodemk">Kode MK</label>
                    <input type="text" name="kode_mk" id="edit_kodemk" required>
                </div>
                <div class="form-group">
                    <label for="edit_nama">Nama MK</label>
                    <input type="text" name="nama_mk" id="edit_nama" required>
                </div>
                <div class="form-group">
                    <label for="edit_plotsemester">Plot Semester</label>
                    <select id="edit_plotsemester" name="plot_semester">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="edit_sks">SKS</label>
                    <input type="number" name="sks" id="edit_sks" required>
                </div>
                <div class="form-group">
                    <label for="edit_sifat">Sifat</label>
                    <select id="edit_sifat" name="sifat">
                        <option value="W">Wajib</option>
                        <option value="P">Pilihan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="edit_jumlah_kelas">Jumlah Kelas</label>
                    <input type="number" name="jumlah_kelas" id="edit_jumlah_kelas" required>
                </div>
            </div>
            <button type="submit" class="btn btn-submit">
                Update Mata Kuliah
            </button>
        </form>
    </div>
</div>

    <script>

    $(document).ready(function() {
        // Initialize DataTable
        var tableMk = $('#Matakuliah').DataTable({
            pageLength: -1,
            layout: {
                topStart: null,
                topEnd: null,
                bottomStart: 'pageLength',
                bottomEnd: 'paging'
            },
            columnDefs: [
                {className: "dt-head-center", targets: [0,1,2,3,4,5,6,7]},
                {className: "dt-body-center", targets: [0,1,2,3,4,5,6,7]}
            ]
        });

        // Set default page length after slight delay
        setTimeout(() => {
            tableMk.page.len(10).draw();
        }, 10);

        // Search functionality
        $('#searchMk').keyup(function() {
            tableMk.search($(this).val()).draw();
        });

        // Modal functionality
        const modal = document.getElementById('crud-modal');
        const openModalBtn = document.getElementById('selectAll');
        const closeModalBtns = document.getElementsByClassName('close-btn');

        openModalBtn.onclick = function() {
            modal.style.display = "block";
        }

        Array.from(closeModalBtns).forEach(btn => {
            btn.onclick = function() {
                modal.style.display = "none";
            }
        });

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });

    function openEditModal(id, kodeMk, namaMk, plotSemester, sks, sifat, jumlahKelas) {
        const modal = document.getElementById('edit-modal');
        const form = document.getElementById('editForm');
        const closeModalBtns = document.getElementsByClassName('close-btn');
        
        
        // Set form action URL
        form.action = `/mata-kuliah/${id}`;
        
        // Fill form fields
        document.getElementById('edit_kodemk').value = kodeMk;
        document.getElementById('edit_nama').value = namaMk;
        document.getElementById('edit_plotsemester').value = plotSemester;
        document.getElementById('edit_sks').value = sks;
        document.getElementById('edit_sifat').value = sifat;
        document.getElementById('edit_jumlah_kelas').value = jumlahKelas;

        Array.from(closeModalBtns).forEach(btn => {
            btn.onclick = function() {
                modal.style.display = "none";
            }
        });
        
        modal.style.display = "block";
    }

    function closeEditModal() {
        const modal = document.getElementById('edit-modal');
        modal.style.display = "none";
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        const modal = document.getElementById('edit-modal');
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>

</body>
</html>

