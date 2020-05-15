<div class="content">
    <div class="container-fluid">
        <h1 class="text-center">Hai Admin</h1>
        <h2 class="text-center" id="tgl"></h2>
        <script>
            let date = new Date()
            var day = date.getDate().toString()
            var month = date.getMonth() + 1
            var year = date.getFullYear()
            var full = day.concat(" - ", month, " - ", year)
            document.getElementById("tgl").innerHTML = full
        </script>
    </div>
</div>