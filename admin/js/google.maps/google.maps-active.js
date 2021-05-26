// function initMap() {
//   var ketapang = new google.maps.LatLng(-1.8590755, 109.9631455);

//   var map = new google.maps.Map(document.getElementById('map'),{
//     mapId: "3a3b33f0edd6ed2a",
//     center: ketapang,
//     zoom: 14

//   });

// }
<script type="text/javascript">   
    var marker;
    function initialize(){
        // Variabel untuk menyimpan informasi lokasi
        var infoWindow = new google.maps.InfoWindow;
        //  Variabel berisi properti tipe peta
        var mapOptions = {
          mapId: "3a3b33f0edd6ed2a",
           zoom: 15, 
            mapTypeId: google.maps.MapTypeId.ROADMAP
        } ;
        // Pembuatan peta
        var peta = new google.maps.Map(document.getElementById('map'), mapOptions);      
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();
        // Pengambilan data dari database MySQL
        <?php
        // Sesuaikan dengan konfigurasi koneksi Anda
            $host     = "localhost";
            $username = "root";
            $password = "";
            $Dbname   = "gis_atm";
            $db       = new mysqli($host,$username,$password,$Dbname);
            
            $query = $db->query("SELECT * FROM lokasi ORDER BY nama  ASC");
            while ($row = $query->fetch_assoc()) {
                $name = $row["nama"];
                $lat  = $row["latitude"];
                $long = $row["longitude"];
                echo "addMarker($lat, $long, '$name');\n";
            }
        ?> 
        // Proses membuat marker 
        function addMarker(lat, lng, info){
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: peta,
                position: lokasi
            });       
            peta.fitBounds(bounds);
            bindInfoWindow(marker, peta, infoWindow, info);
         }
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, peta, infoWindow, html){
            google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(peta, marker);
          });
        } 
    }
</script>
  




