<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobil.css">
    
    <title>Page 4</title>
</head>
<body>
<header>
        <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRchksNSh4fZ_QZl78rgH2tORDJkpDlxYJ9p1ggxPBZNw&s" id='iconToyota'>
         <a id='textToyota' href="http://localhost/GroupProjectToyota/index.php">   Toyota</a>
        </div>
    
        <!-- <div id='siteButton'> -->
            <div id="divSpaseAround"><a id="siteLink" href="http://localhost/GroupProjectToyota/index5.php"> Vehicles</a></div>
            <div id="divSpaseAround"> <a id="siteLink" href="http://localhost/GroupProjectToyota/index3.php">TradeIn</a></div>
            <div id="divSpaseAround"> <a id="siteLink" href="http://localhost/GroupProjectToyota/index2.php">Electro</a></div>
            <div id="divSpaseAround"> <a id="siteLink" href="http://localhost/GroupProjectToyota/index4.php"><img src="https://www.pngkit.com/png/full/808-8088160_loginsignupwishlist-transparent-login-icon.png" id='iconLogin'></a></div>
        <!-- </div>/ -->

    </header>

    <div style="margin-left: 40%;" class="container">
<div >
            <h1>Registration Form</h1>
            <form action="connect.php" method="post">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" /><br><br>
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" /><br><br>
                    <label for="gender">Gender</label>
                        <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male" />Male</label>
                        <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="female" />Female</label>
                        <label for="others" class="radio-inline"><input type="radio" name="gender" value="o" id="others" />Others</label>
                        <br><br>
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" /><br><br>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" /><br><br>
                    <label for="number">Phone Number</label>
                    <input type="number" class="form-control" id="number" name="number" /><br><br>
                <input type="submit" class="btn btn-primary" />
            </form>
</div></div>

</body>

</html>

</body>
</html>
<!DOCTYPE html>
<html>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>

<div id="myPlot" style="width:100%;max-width:700px"></div>

<script>
var xArray = [50,60,70,80,90,100,110,120,130,140,150];
var yArray = [7,8,8,9,9,9,10,11,14,14,15];

// Define Data
var data = [{
  x:xArray,
  y:yArray,
  mode:"markers"
}];

// Define Layout
var layout = {
  xaxis: {range: [40, 160], title: "Square Meters"},
  yaxis: {range: [5, 16], title: "Price in Millions"},  
  title: "House Prices vs. Size"
};

// Display using Plotly
Plotly.newPlot("myPlot", data, layout);
</script>

</body>
</html>