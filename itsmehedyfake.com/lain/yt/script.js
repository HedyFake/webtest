
function masuk(){
var id = document.getElementById('basic-url').value;
$.get("https://youtube.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=" + id +"&key=AIzaSyBAer1fK1IHxojU0vYq1ZwzchSPmgoLBmM",
            function(klo){
            const ck = JSON.stringify(klo)
            const pd = JSON.parse(ck)
            
            var output = `    Hasil Pencarian<br>         
                   Name: ${pd.items[0].snippet.title}<br><br>
                   Deskripsi: ${pd.items[0].snippet.description}<br><br>
                   Dibuat: ${pd.items[0].snippet.publishedAt}<br><br>
                   Img Profile: ${pd.items[0].snippet.thumbnails.high.url}<br><br>
                   Location: ${pd.items[0].snippet.country}<br><br>
                   Video: ${pd.items[0].snippet.videoCount}<br><br>
                   Subscribe: ${pd.items[0].snippet.subscriberCount}`
             $(".output").html(output);
            });
}

