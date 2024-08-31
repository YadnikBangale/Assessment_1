<html>

<head>
    <link rel="stylesheet" type="" href="pico.min.css">
</head>

<body>
    <main class="container">

        <form method="POST" action="Greet.php">


            <label for="">Name</label>

            <input type="text" name="name" id="name">

            <label for="">
                <b>Favorite Food</b>
            </label><br>

            <input type="radio" name="choice" id="Pizza" value="Pizza">

            <h5>Pizza</h5><br>

            <input type="radio" name="choice" id="Burger" value="Burger">

            <h5>Burger</h5><br>

            <input type="radio" name="choice" id="Noodles" value="Noodles">

            <h5>Noodles</h5>

            <hr>

            <input type="Submit" href="/Greet.php">

        </form>
    </main>
</body>

</html>