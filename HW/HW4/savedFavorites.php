<!DOCTYPE html>
<html>
<head>
<title> Pixabay API Demo </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {
text-align: center;
}
img {
    border-radius: 20px;
    padding:15px;
}
.favorite{
    cursor: pointer;
}
</style>
<script>
    
    $(document).ready(function(){
        
        $.ajax({
            method: "GET",
            url: "api/getFavorites.php",
            dataType: "json",
            success: function(data, status) {
               
                let htmlString = "";
                let i = 0;
                for (let rows=0; rows < data.length; rows++) {
                    htmlString += "<div class='row'>";
                    
                    for (let cols=0; cols < 1; cols++) {
                      htmlString +=  "<a class='favorite glyphicon glyphicon-heart'></a>";
                      htmlString +=  "<img src='"+ data[rows]['imageURL']+"' width='300' height='280'>";
                        
                    }//for
                    
                    htmlString += "</div>";
                    
                }//for
               
              $("#images").append(htmlString);
               
            }
        }); //ajax 
        
        $("#images").on("click", ".favorite", function(){ 
            
           if(this.classList.contains('glyphicon-heart-empty') == true){
                // $(this).toggleClass('glyphicon-heart-empty').toggleClass('glyphicon-heart');
                //add image url to database
                // callFavoriteAPI("add", $(this).next().attr("src"), $("#keyword").val());
           }
           else {
                $(this).toggleClass('glyphicon-heart').toggleClass('glyphicon-heart-empty');
                //remove image url from database
                callFavoriteAPI("delete",$(this).next().attr("src"),$("#keyword").val());
            }
        });
    
        
        function callFavoriteAPI(action, url, keyword) {
            
            $.ajax({
             method: "GET",
                url: "api/favoritesAPI.php",
            dataType: "json",
                data: { "action": action,
                        "url": url,
                        "keyword": keyword, },
             success: function(data, status) {
               alert("hello");
            }
            }); //ajax 
        
        }
    
        
    });//documentReady

</script>
</head>
<body>

<h1> Flickr Saved Favorites </h1>
<a class="savedFavorites" href="index.html">Back to Search</a>
<br /><br />

<div id="images"></div>

</body>
</html>