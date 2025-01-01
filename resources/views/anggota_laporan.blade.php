<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Anggota</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        /* Custom Styles for Report */
        body {
            font-family: Arial, sans-serif;
        }

        .report-title {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .date-section {
            text-align: right;
            font-size: 1.2em;
            margin-right: 20px;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th,
        td {
            padding: 8px 12px;
            text-align: center;
            border: 1px solid #000;
        }

        th {
            background-color: #f5f5f5;
        }

        .footer {
            margin-top: 40px;
            text-align: right;
            font-size: 1.1em;
            margin-right: 20px;
        }

        .btn-print {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
        }

        /* Styling for Print */
        @media print {
            .btn-print {
                display: none;
                /* Hide print button during printing */
            }

            .footer {
                text-align: right;
                margin-top: 50px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 10px;
                text-align: center;
                border: 1px solid #000;
                font-size: 14px;
            }

            th {
                background-color: #eeeeee !important;
            }

            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                /* Ensure there is space around the content */
            }
        }
    </style>

    <script>
        // Function to format the current date as "DD MMMM YYYY"
        function getCurrentDate() {
            const options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            const today = new Date();
            return today.toLocaleDateString('id-ID', options);
        }

        window.onload = function() {
            // Display the current date on page load in the footer section
            document.getElementById('report-date').innerText = getCurrentDate();
            document.getElementById('footer-date').innerText = getCurrentDate(); // Add current date after "Mengetahui"
        }

        // Function to print the page
        function printReport() {
            window.print();
        }
    </script>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <!-- Report Title -->
                <div class="report-title">
                    <h2>Laporan Data Anggota Perpustakaan</h2>
                </div>

                <!-- Date Section -->
                <div class="date-section">
                    <p id="report-date"></p>
                </div>

                <!-- Data Table -->
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Anggota</th>
                            <th>Nama Anggota</th>
                            <th>Email</th>
                            <th>Nomor HP</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through books data -->
                        @foreach ($anggota as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->kode_anggota }}</td>
                                <td>{{ $a->nama_anggota }}</td>
                                <td>{{ $a->email }}</td>
                                <td>{{ $a->nohp }}</td>
                                <td>{{ $a->alamat }}</td>
                                <td>{{ $a->jk }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Print Button at the top-left corner -->
                <div class="btn-print">
                    <button class="btn btn-primary" id="printButton" onclick="printReport()">
                        <i class="fas fa-print"></i> Print Data
                    </button>
                </div>

                <!-- Footer Section -->
                <div class="footer">
                    <p>Mengetahui,</p>
                    <p id="footer-date"></p> <!-- Add current date below "Mengetahui" -->
                    <br><br><br>
                    <p>Admin</p>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
