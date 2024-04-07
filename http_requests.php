<!DOCTYPE html>

<body>

<main>
    <h2>Calculator</h2>
    <form action="calculator.php" method="get">
        <label for="a">a</label>
        <input id="a" type="number" name="a" placeholder="1">

        <label for="b">b</label>
        <input id="b" type="number" name="b" placeholder="1">

        <button type="submit">Add</button>
    </form>

    <h2>What's your favourite pet?</h2>
    <form action="fav_pet.php" method="post">
        <select id="fav_pet" name="fav_pet">
            <option value="none">I don't love</option>
            <option value="cats">Cats</option>
            <option value="dogs">Dogs</option>
            <option value="birds">Birds</option>
            <option value="other">Other</option>
        </select>

        <button type="submit">Submit</button>
    </form>

    <h2>What's your name?</h2>
    <form action="req_ar.php" method="post">
        <label for="name">Name:</label>
        <input id="name" type="text" name="name" placeholder="Quandale">
        <label for="surname">Surname:</label>
        <input id="surname" type="text" name="surname" placeholder="Dingle">

        <button type="submit">Submit</button>
    </form>

    <?php
    setcookie("CookieTest", "Never gonna give you up", time() + (600 * 600));

    if (isset($_COOKIE['CookieTest'])) {
        echo "Your cookie is " . $_COOKIE['CookieTest'];
    } else {
        echo "Your cookie is Nothing.";
    };
    ?>
</main>

</body>

</html>

