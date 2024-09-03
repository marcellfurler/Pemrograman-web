<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                background-color: silver;
            }
            .warning {
                color: red;
            }
            .warningBox {
                border: 1px red dotted;
            }
        </style>
    </head>

    <body>
        <header>
            <center>
                <img src="https://www.ukdw.ac.id/wp-content/uploads/2023/07/LOGO-UKDW-WARNA-TEXT-W-PNG.png" width="400px" alt="Logo">
                <h1>Form Alumni UKDW</h1>
                <span class="warning" hidden>For Error</span>
            </center>
        </header>
        <main>
            <center>
                <form id="semesterForm" method="POST" action="form_summary.php" onsubmit="validasiData()">
                    <fieldset>
                        <legend>Email Information</legend>
                        <table>
                            <tr>
                                <td>
                                    <label for="email">Email:</label>
                                </td>
                                <td>
                                    <input type="email" name="email" id="email" placeholder="namamu@email.com">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="password">Password:</label>
                                </td>
                                <td>
                                    <input type="password" name="password" id="password">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="confirmPassword">Confirm Password:</label>
                                </td>
                                <td>
                                    <input type="password" name="confirmPassword" id="confirmPassword">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                    <fieldset>
                        <legend>Personal Information</legend>
                        <table>
                            <tr>
                                <td><label for="name">&emsp;Nama:</label></td>
                                <td><input type="text" name="name" id="name" placeholder="namamu disini"></td>
                            </tr>
                            <tr>
                                <td><label for="startYear">&emsp;Tahun Masuk:</label></td>
                                <td><input type="number" id="startYear" name="startYear" min="1990" max="2100"></td>
                            </tr>
                            <tr>
                                <td><label for="endYear">&emsp;Tahun Wisuda:</label></td>
                                <td><input type="number" id="endYear" name="endYear" min="1990" max="2100"></td>
                            </tr>
                            <tr>
                                <td><label for="gradMonth">&emsp;Bulan Wisuda (1-12):</label></td>
                                <td><input type="number" id="gradMonth" name="gradMonth" min="1" max="12"></td>
                            </tr>
                            <tr>
                                <td><label for="job">&emsp;Pekerjaan saat ini:</label></td>
                                <td>
                                    <input type="checkbox" name="job" value="Belum Bekerja" id="BelumBekerja" onchange="jobcheck(this)">
                                    <label for="BelumBekerja">Belum Bekerja</label><br>
                                    <input type="checkbox" name="job" value="Karyawan Swasta" id="KaryawanSwasta" onchange="jobcheck(this)">
                                    <label for="KaryawanSwasta">Karyawan Swasta</label><br>
                                    <input type="checkbox" name="job" value="ASN" id="ASN" onchange="jobcheck(this)">
                                    <label for="ASN">ASN</label><br>
                                    <input type="checkbox" name="job" value="Wiraswasta" id="Wiraswasta" onchange="jobcheck(this)">
                                    <label for="Wiraswasta">Wiraswasta</label><br>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </center>
        </main>
        <br>
        <footer>
            <hr>
            <center>
                <p><i>&copy; copyright UDKW 2024</i></p>
            </center>
        </footer>

        <script>
        function validasiData() {
            const startYear = document.getElementById('startYear').value;
            const endYear = document.getElementById('endYear').value;
            const gradMonth = document.getElementById('gradMonth').value;
            const job = document.querySelector('input[name="job"]:checked');
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const name = document.getElementById('name').value;

            if (!email || !password || !confirmPassword || !name || !startYear || !endYear || !gradMonth || !job) {
                alert('Tolong lengkapi form terlebih dahulu');
                return false;
            }
            const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
            if (!passwordPattern.test(password)) {
                alert('Password harus memiliki 1 huruf besar, 1 huruf kecil dan 1 angka ');
                return false;
            }
            if (password !== confirmPassword) {
                alert('Password tidak sama');
                return false;
            }

            return true;
        }

        function jobcheck(element) {
            const pekerjaan = document.querySelectorAll('input[name="job"]');
            if (element.id === 'BelumBekerja') {
                pekerjaan.forEach(input => {
                    if (input.id !== 'BelumBekerja') {
                        input.checked = false;
                        input.disabled = element.checked;
                    }
                });
            } else {
                document.getElementById('BelumBekerja').checked = false;
                document.getElementById('BelumBekerja').disabled = pekerjaan.some(input => input.checked && input.id !== 'BelumBekerja');
            }
        }
    </script>
    </body>
</html>
