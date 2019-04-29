<!DOCTYPE html>
<html>
<head>
<title> Pixabay API Demo </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
body {
text-align: center;
}
img {
    border-radius: 20px;
    padding:15px;
    width: 5em;
    display:none;
}

img:hover {
    width: 10em;
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

                
                $("#images").empty();
                let categories = new Set();
                
                for (let i of data) {
                    
                    $("#images").append(
                        $("<img></img>").attr("src", i.imageURL).attr("value", i.keyword)
                    )
                    categories.add(i.keyword);

                }//for
                
                // console.log(categories)
                
                categories.forEach(function (i){
                    $("#categories").append($("<a></a>").addClass("category mx-3").text(i))
                    
                }
                    )
                
                $(".category").click(
                    function(){
                        $("img").css("display", "none");
                        $(`img[value='${$(this).text()}']`).css("display", "inline"); 
                    }
                    )
                
              
               
            }
        }); //ajax 
        
        $("#images").on("click", ".favorite", function(){ 
            
            //alert($(this).next().attr("src"));
            
            if ( $(this).attr("src") == "img/favorite.png") {
            
                $(this).attr("src","img/favorite_on.png");
                //add image url to database
                updateFavorites("add",$(this).next().attr("src"));
            } else {
                
                $(this).attr("src","img/favorite.png");
                //remove image url from database
                updateFavorites("delete",$(this).next().attr("src"));
            }
        });
    });

</script>
</head>
<body>

<h1> Pixabay Saved Image </h1>
<a href="index.html"style="color:blue;">Back To search</a><br />
<div id="categories"></div>
<div id="images"></div>

</body>
</html>
