<?php include "inc/header.php";?>
<div class="groomingmain">
    <article>
        <h1>Grooming&nbsp&nbsp&nbsp&nbsp<span>Appointment</span></h1>
        <p><img src="public/img/grooming.jpg"> All requests are confirmed by phone or email by a Reservation Specialist. You may request online reservations but remember that reservations are not confirmed until a specialist notifies you that space is available and a reservation has been entered for your pet(s).
            <br>
            <br> It is our goal to offer your pet a unique salon experience. We use premium shampoos and conditioners that are all natural and make your pet feel amazing. We take pride in individually hand blow drying each pet and taking the time to brush out each pet completely. We DO NOT use cage dryers!
            <br>
            <br> Since grooming session can last about 3-4 hours, we include a break for our pets to hang out in our gated indoor area-only one pet at a time or pets from the same family. Dogs are not caged for long periods of time and are taken out for a potty break.
            <br>
            <br> Expedited service is offered at no extra cost for dogs with extreme anxiety, senior dogs or pets with medical conditions in order for them to get home sooner. Pick up is requested within 30 minutes once groom is complete.</p>
    </article>
    <video id="video1" width="425" height="283" controls poster="public/img/pic6.jpg">
        <source src="video/groomingcat2.mp4" type="video/mp4"> Your browser does not support HTML5 video.
    </video>
    <form action="control.php" autocomplete="on" id="formGrooming" method="post" class="grooMing">
        <label>First name:
            <br>
            <input type="text" name="fname" autocomplete="on" required placeholder="first name">
        </label>
        <br>
        <label>Last name:
            <br>
            <input type="text" name="lname" autocomplete="on" required placeholder="last name">
        </label>
        <label>
            <br>
            <label>Adress:
                <br>
                <input type="text" name="address" autocomplete="on" required placeholder="address">
            </label>
            <br>
            <label>City:
                <br>
                <input type="text" name="city" autocomplete="on" required placeholder="city">
            </label>
            <br>
            <label>State:
                <br>
                <input type="text" name="state" autocomplete="on" required placeholder="state">
            </label>
            <br>
            <label>Zip code:
                <br>
                <input type="text" name="zip" autocomplete="on" required placeholder="zip">
            </label>
            <br>
            <label>Phone Number:
                <br>
                <input type="number" name="phone_number" autocomplete="on" placeholder="phone nubmer" required>
            </label>
            <br>
            <label>Email Address:
                <br>
                <input type="email" name="emailaddress" autocomplete="on" required placeholder="email address">
            </label>
            <br>
            <input type="radio" name="pettype" value="dog" checked> Dog
            <br>
            <select name="breed">
                <option value="AFGHAN HOUND">AFGHAN HOUND</option>
                <option value="GERMAN PINSCHER">GERMAN PINSCHER</option>
                <option value="XOLOITZCUINTLI">XOLOITZCUINTLI</option>
                <option value="LABRADOR RETRIEVER">LABRADOR RETRIEVER</option>
            </select>
            <br>
            <input type="radio" name="pettype" value="cat"> Cat
            <br>
            <br>
            <label>Pet 's Name:
                <br>
                <input type="text" name="pname" autocomplete="on" required placeholder="pet name"> </label>
            <br>
            <label>Pet 's Age:
                <br>
                <input type="number" name="age" autocomplete="on" required placeholder="age"> </label>
            <br>
            <input type="submit" id="submit" value="submit">
    </form>
</div>
<?php include "inc/footer.php";?>
