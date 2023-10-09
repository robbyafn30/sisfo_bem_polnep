<footer class="footer">
    <div class="container-fluid">
        <div class="copyright ml-auto">
            <p>© Website BEM POLNEP <span id="year"></span></p>
        </div>				
    </div>
</footer>

<script>
    // Mendapatkan elemen span dengan ID 'year'
    var yearSpan = document.getElementById("year");
    
    // Mendapatkan tahun saat ini
    var currentYear = new Date().getFullYear();
    
    // Menetapkan tahun saat ini ke dalam elemen span
    yearSpan.textContent = currentYear;
</script>