<!DOCTYPE html>

<head>
    <title> Dynamic Resume! </title>
</head>

<body>

    <?php
    //part1
    $fname = "Moises Romero";
    $email = "22ur1052@gmail.com";
    $adrs = "Balungao, Pangasinan";
    $pnum = "09924257850";
    $age = 22;
    $brthd = "August 22,2003";
    $prog = "BS Information Technology";

    //dis part 2
    if ($prog == "BS Information Technology") {
        $careerTrack = "Systems Administrator";
    } else if ($prog == "BS Computer Science") {
        $careerTrack = "Software Developer";
    } else {
        $careerTrack = "N/A";
    }

    //part3d
    if ($careerTrack == "Systems Administrator") {
        $coreSkills = "Linux OS, Apache Server Configuration, Hardware Troubleshooting";
    } elseif ($careerTrack == "Software Developer") {
        $coreSkills = "PHP, MySQL, Conditional Logic, Object-Oriented Programming";
    } else {
        $coreSkills = "Basic Computer Skills";
    }
    ?>

    <h1> <?php echo $fname; ?> </h1>
    <p> Age: <?php echo $age; ?> </p>
    <p> Email: <?php echo $email; ?> </p>
    <p> Address: <?php echo $adrs; ?> </p>
    <p> Phone Number: <?php echo $pnum; ?> </p>
    <p> Birthday: <?php echo $brthd; ?> </p>
    <p> Program: <?php echo $prog; ?> </p>


    <h2> Career Objectives </h2>
    <p>
        I strive to become a <?php echo $careerTrack; ?>, as a student to contribute to the growth of the company and
        enchance the skills I have gained over the years.
    </p>

    <h2> Technical Skills </h2>

    <p> Skills attained: <?php echo $coreSkills; ?> </p>


</body>

</html>