<!DOCTYPE html>

<html>
    <head>
        <title>Search for your accommodation</title>
    </head>
    <body> <h1>Search for your accommodation</h1>

    <form action="search_Process.php" method="post">

                <label for="Ac_name">Accommodation Name:</label>
                <input type="text" name="Ac_name" placeholder = "Give us a name"><br>
                

                <label for="Address">Accommodation Address:</label>
                <input type="text" name="Address" placeholder = "What is the address?"><br>
                

                <label for="Ac_type">Accommodation Type:</label>
                <select name="Ac_type" id="type">
                <option value= "All" >All</option>
                <option value="Pool Villa">Pool Villa</option>
                <option value="Hotel">Hotel</option>
                <option value="Apartment">Apartment</option>
                <option value="House">House</option>
                </select><br>
                
                <button type = "submit">Search</button><br>
                
    </body>
</html>
