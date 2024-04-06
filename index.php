<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap JS dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSI 127b</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center">HOLLYWOOD DB</h1><br>
        <h3 style="text-align:center">The Knock-Off IMDB</h3><br>
    </div>


    <div class="container">
      <div class = "row">
        <form id="movieForm" method="post">
            <div class="input-group mb-3">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedMovies" id="button-addon2">View All Movies</button>
                </div>
            </div>
        </form>
        <form id="actorForm" method="post">
            <div class="input-group mb-3">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedActors" id="button-addon2">View All Actors</button>
                </div>
            </div>
        </form>
        <form id="allTablesForm" method="post">
            <div class="input-group mb-3">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedAllTables" id="button-addon2">View All Tables</button>
                </div>
            </div>
        </form>
        <form id="oldestYoungestForm" method="post">
            <div class="input-group mb-3">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedMaxAgeAward" id="button-addon2">Oldest and Youngest to Win an Award</button>
                </div>
            </div>
        </form>
        <form id="bostonThriller" method="post">
            <div class="input-group mb-3">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedBostonThriller" id="button-addon2">2 Top Rated Thrillers Shot in Boston</button>
                </div>
            </div>
        </form>
        <form id="marvelWB" method="post">
            <div class="input-group mb-3">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedMarvelWB" id="button-addon2">Actors in both Marvel and Warner Bros</button>
                </div>
            </div>
        </form>
        <form id="mostRoles" method="post">
            <div class="input-group mb-3">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedMostRoles" id="button-addon2">Top 5 movies by number of people playing role</button>
                </div>
            </div>
        </form>
        <form id="avgComedyForm" method="post">
            <div class="input-group mb-3">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedAvgComedy" id="button-addon2">Comedies Above Average Rating</button>
                </div>
            </div>
        </form>
        <form id="sameBdayForm" method="post">
            <div class="input-group mb-3">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedBirthday" id="button-addon2">People that Share a Birthday!</button>
                </div>
            </div>
        </form>
      </div>

    </div>

   <!--Paramaterized Queries-->
   <div class="container">
   <h2>Search By Parameter</h2>

   <p>Motion Picture By Name</p>
    <form id="MPbyNameForm" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter Motion Picture Name" name="inputMPname" id="inputMPname">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedMPname" id="button-addon2">Query</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">

   <p>Movies Liked By User</p>
    <form id="likeEmailForm" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter email" name="inputEmail" id="inputEmail">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedEmail" id="button-addon2">Query</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">

    <p>Motion Picture By Shooting Location Country</p>
    <form id="likeEmailForm" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter location" name="inputLocation" id="inputLocation">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedLocation" id="button-addon2">Query</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">

    <p>TV Show Directors by ZipCode</p>
    <form id="zipcodeForm" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter zipcode" name="inputZip" id="inputZip">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedZip" id="button-addon2">Query</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">

    <p>People with more than k awards</p>
    <form id="zipcodeForm" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter number of awards (k)" name="inputAwardNum" id="inputAwardNum">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedAwardNum" id="button-addon2">Query</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">

    <p>American producers with box office above X and budget below Y</p>
    <form id="zipcodeForm" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Above Box Office (X)" name="inputBoxOffice" id="inputBoxOffice">
                <input type="text" class="form-control" placeholder="Below Budget (Y)" name="inputBudget" id="inputBudget">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedBoxOfficeBudget" id="button-addon2">Query</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">

    <p>People With Multiple Roles Above Give Rating</p>
    <form id="multipleRatingForm" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter Rating" name="inputRating" id="inputRating">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedRating" id="button-addon2">Query</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
    <p>Number of Likes and Age of Users Who Liked</p>
    <form id="likesAgeForm" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter Number of Likes" name="inputLikesNo" id="inputLikesNo">
                <input type="text" class="form-control" placeholder="Enter Age of User" name="inputLikesAge" id="inputLikesAge">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submittedLikeAge" id="button-addon2">Query</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">

        <?php

        if(isset($_POST["submittedMovies"])){
            $queryAll = "movies";
        } else if (isset($_POST["submittedActors"])){
            $queryAll = 'actors';
        } else if(isset($_POST["submittedAllTables"])){//query 1
            $queryAll = 'allTables';
        }
        else if(isset($_POST["submittedMaxAgeAward"])){ //query 7
            $queryAll = 'maxAgeAward';
        }
        else if(isset($_POST["submittedBostonThriller"])){ //query 10
            $queryAll = 'bostonThriller';
        }
        else if(isset($_POST["submittedMarvelWB"])){ //query 12
            $queryAll = 'marvelWB';
        }
        else if(isset($_POST["submittedAvgComedy"])){ //query 13
            $queryAll = 'avgComedy';
        }
        else if(isset($_POST["submittedMostRoles"])){ //query 14
            $queryAll = 'mostRoles';
        }
        else if(isset($_POST["submittedBirthday"])){ //query 15
            $queryAll = 'sameBirthday';
        }


      //FORM PARAMS

      else if(isset($_POST['submittedMPname']))//query 2
        {

          $byMPname = $_POST["inputMPname"];
          $queryAll = 'submittedMPname';
        }
       else if(isset($_POST['submittedEmail']))//query 3
        {

          $byEmail = $_POST["inputEmail"];
          $queryAll = 'submittedEmail';
        }
        else if(isset($_POST['submittedLocation']))//query 4
        {

          $byLocation = $_POST["inputLocation"];
          $queryAll = 'submittedLocation';
        }
        else if(isset($_POST['submittedZip'])) //query 5
        {

          $byZip = $_POST["inputZip"];
          $queryAll = 'submittedZip';
        }
        else if(isset($_POST['submittedAwardNum'])) //query 6
        {

          $byAwardNum = $_POST["inputAwardNum"];
          $queryAll = 'submittedAwardNum';
        }
        else if(isset($_POST['submittedBoxOfficeBudget'])) //query 8
        {

          $byBoxOffice = $_POST["inputBoxOffice"];
          $byBudget = $_POST["inputBudget"];
          $queryAll = 'submittedBoxOfficeBudget';
        }

        else if(isset($_POST['submittedRating']))//query 9
        {

          $byRating = $_POST["inputRating"];
          $queryAll = 'submittedRating';
        }
        else if(isset($_POST['submittedLikeAge'])){ //query 11
            $byLikesNo = $_POST["inputLikesNo"];
            $byLikeAge = $_POST["inputLikesAge"];
            $queryAll = 'submittedLikeAge';

        }
        else{
            $byZip = "";
            $byEmail ="";
            $byRating = "";
            $byLikesNo = "";
            $byLikeAge = "";
        }


        // we will now create a table from PHP side
        echo "<table class='table table-md table-bordered'>";
        echo "<thead class='thead-dark' style='text-align: center'>";

        // initialize table headers
        // YOU WILL NEED TO CHANGE THIS DEPENDING ON TABLE YOU QUERY OR THE COLUMNS YOU RETURN
        if ($queryAll == "actors"){
            echo "<tr><th class='col-md-2'>Name</th></tr></thead>";
        }
        else if ($queryAll == "movies"){
            echo "<tr><th class='col-md-2'>Title</th></tr></thead>";
        }
        else if($queryAll == "allTables"){ //query 1
            echo "<tr><th class='col-md-2'>Tables In This Database</th></tr></thead>";
        }
        else if($queryAll == "submittedMPname"){ //query 2
            echo "<tr><th class='col-md-2'>Name</th>
            <th class='col-md-2'>Rating</th>
            <th class='col-md-2'>Production</th>
            <th class='col-md-2'>Budget</th>
            </tr></thead>";
        }
        else if($queryAll == "submittedEmail"){ //3
            echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Rating</th>
            <th class='col-md-2'>Production</th>
            <th class='col-md-2'>Budget</th>
            </tr></thead>";
        }
        else if($queryAll == "submittedLocation"){ //query 4
            echo "<tr><th class='col-md-2'>Name</th>
            </tr></thead>";
        }
        else if($queryAll == "submittedZip"){ //query 5
            echo "<tr><th class='col-md-2'>Director</th><th class='col-md-2'>Series Name</th></tr></thead>";

        }
        else if($queryAll == "submittedAwardNum"){ //query 6
            echo "<tr><th class='col-md-2'>Person Name</th>
            <th class='col-md-2'>Movie Name</th>
            <th class='col-md-2'>Award Year</th>
            <th class='col-md-2'>Award Count</th>
            </tr></thead>";
        }
        else if($queryAll == "maxAgeAward"){ //query 7
            echo "<tr><th class='col-md-2'>Person Name</th><th class='col-md-2'>Age Recieved</th></tr></thead>";

        }
        else if($queryAll == "submittedBoxOfficeBudget"){ //query 8
            echo "<tr><th class='col-md-2'>Producer Name</th>
            <th class='col-md-2'>Movie Name</th>
            <th class='col-md-2'>Box Office Collection</th>
            <th class='col-md-2'>Budget</th>
            </tr></thead>";
        }
        else if($queryAll == "submittedRating"){ //query 9
            echo "<tr><th class='col-md-2'>Person Name</th><th class='col-md-2'>Motion Picture Name</th><th class='col-md-2'>Role Count</th></tr></thead>";

        }

        else if($queryAll == "bostonThriller"){ //query 10
            echo "<tr>
            <th class='col-md-2'>Motion Picture Name</th>
            <th class='col-md-2'>Rating</th>
            </tr></thead>";

        }
        else if($queryAll == "submittedLikeAge"){ //query 11
            echo "<tr><th class='col-md-2'>Motion Picture Name</th><th class='col-md-2'>Number of Likes by Users under Age</th></tr></thead>";

        }

        else if($queryAll == "marvelWB"){ //query 12
            echo "<tr>
            <th class='col-md-2'>Actor Name</th>
            <th class='col-md-2'>Marvel movie</th>
            <th class='col-md-2'>Warner Bros Movie</th>
            </tr></thead>";

        }
        else if($queryAll == "avgComedy"){ //query 13
            echo "<tr><th class='col-md-2'>Motion Picture Name</th><th class='col-md-2'>Rating</th></tr></thead>";

        }
        else if($queryAll == "mostRoles"){ //query 14
            echo "<tr>
            <th class='col-md-2'>Movie Name</th>
            <th class='col-md-2'>People Count</th>
            <th class='col-md-2'>Role Count</th>
            </tr></thead>";

        }
        else if($queryAll == "sameBirthday"){ //query 15
            echo "<tr><th class='col-md-2'>Person 1</th><th class='col-md-2'>Person 2</th><th class='col-md-2'>Shared Birthday</th></tr></thead>";

        }



        // generic table builder. It will automatically build table data rows irrespective of result
        class TableRows extends RecursiveIteratorIterator {
            function __construct($it) {
                parent::__construct($it, self::LEAVES_ONLY);
            }

            function current() {

                return "<td style='text-align:center'>" . parent::current(). "</td>";
            }

            function beginChildren() {
                echo "<tr>";
            }

            function endChildren() {
                echo "</tr>" . "\n";
            }
        }
        class TableRows2 extends RecursiveIteratorIterator {
            function __construct($it) {
                parent::__construct($it, self::LEAVES_ONLY);

            }

            function current() {


                return "<td style='text-align:center'>" . parent::current(). "</td>";
            }

            function beginChildren() {
                echo "<tr>";
            }

            function endChildren() {
                echo "</tr>" . "\n";
            }
        }


        // SQL CONNECTIONS
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "HOLLYWOOD";

        try {
            // We will use PDO to connect to MySQL DB. This part need not be
            // replicated if we are having multiple queries.
            // initialize connection and set attributes for errors/exceptions
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            //prepare statement for executions. This part needs to change for every query


            if ($queryAll == "actors"){
                $stmt = $conn->prepare("SELECT name FROM people");


            }
            else if($queryAll == "allTables"){ //query1
                $stmt = $conn->prepare("SHOW TABLES");


            }else if($queryAll == "submittedMPname"){ //query2
                $stmt = $conn->prepare("SELECT name, rating, production, budget FROM MotionPicture WHERE name = '$byMPname'");


            }
            else if($queryAll == "movies"){
                $stmt = $conn->prepare("SELECT name FROM MotionPicture JOIN Movie ON MotionPicture.mid = Movie.mpid");
            }
            else if($queryAll == "submittedEmail"){ //query 3
                $stmt = $conn->prepare("SELECT m.name, m.rating,m.production,m.budget
                FROM MotionPicture m
                JOIN Likes l on m.mid = l.mpid
                WHERE l.uemail = '$byEmail'"
                );
            }
            else if($queryAll == "submittedLocation"){ //query 4
                $stmt = $conn->prepare("SELECT DISTINCT name
                FROM MotionPicture MP
                JOIN Location L ON MP.mid = L.mpid
                WHERE L.country = '$byLocation'"
                );

            }
            else if($queryAll == "submittedZip"){ //query 5
                $stmt = $conn->prepare("SELECT DISTINCT p.name as director , m.name as series
                FROM People p
                JOIN ROLE r ON r.pid = p.pid
                JOIN MotionPicture m ON m.mid = r.mpid
                JOIN Location l ON l.mpid = r.mpid
                JOIN Series s ON s.mpid = m.mid
                WHERE r.role_name = 'Director' AND l.zip = $byZip"

                );

            }
            else if($queryAll == "submittedAwardNum"){ //query 6
                $stmt = $conn->prepare("SELECT P.name AS personname, MP.name, A.award_year, Count(*) AS Award_Count
                FROM Award A
                JOIN People P ON A.pid = P.pid
                JOIN MotionPicture MP ON A.mpid = MP.mid
                GROUP BY A.mpid, A.pid, A.award_year
                HAVING COUNT(*)>$byAwardNum"
                );

            }
            else if($queryAll == "maxAgeAward"){//query 7
                $stmt = $conn->prepare("SELECT p.name, (a.award_year - YEAR(p.dob)) AS age
                FROM People p JOIN Award a on p.pid = a.pid
                WHERE (a.award_year - YEAR(p.dob)) >= ALL(SELECT (a.award_year - YEAR(p.dob)) FROM People p JOIN Award a on p.pid = a.pid)
                UNION ALL
                SELECT p.name, (a.award_year - YEAR(p.dob)) AS age
                FROM People p JOIN Award a on p.pid = a.pid
                WHERE (a.award_year - YEAR(p.dob)) <= ALL(SELECT (a.award_year - YEAR(p.dob)) FROM People p JOIN Award a on p.pid = a.pid)
                "

                );

            }
            else if($queryAll == "submittedBoxOfficeBudget"){//query 8
                $stmt = $conn->prepare("SELECT P.name AS Producer_Name, MP.name AS Movie_Name, M.boxoffice_collection, MP.budget
                FROM People P
                JOIN Role R ON P.pid = R.pid
                JOIN MotionPicture MP ON R.mpid = MP.mid
                JOIN Movie M ON MP.mid = M.mpid
                WHERE R.role_name = 'Producer'
                AND M.boxoffice_collection > $byBoxOffice
                AND MP.budget < $byBudget
                "

                );

            }
            else if($queryAll == "submittedRating"){ // query 9
                $stmt = $conn->prepare("SELECT p.name AS person_name, mp.name AS motion_picture_name, COUNT(r.role_name) AS role_count
                FROM People p
                JOIN Role r ON p.pid = r.pid
                JOIN MotionPicture mp ON r.mpid = mp.mid
                WHERE mp.rating > $byRating
                GROUP BY p.pid, mp.mid
                HAVING COUNT(r.role_name) > 1"

                );

            }
            else if($queryAll == "bostonThriller"){ // query 10
                $stmt = $conn->prepare("SELECT DISTINCT MP.name, MP.rating
                FROM MotionPicture MP
                JOIN Location L ON MP.mid = L.mpid
                JOIN Genre G ON MP.mid = G.mpid
                WHERE G.genre_name = 'Thriller'
                AND L.mpid NOT IN (Select mpid FROM Location WHERE city <> 'Boston')
                ORDER BY MP.rating DESC
                LIMIT 2
                "

                );

            }
            else if($queryAll == "submittedLikeAge"){ // query 11
                $stmt = $conn->prepare("SELECT m.name, COUNT(l.mpid) AS num_likes
                FROM Likes l
                JOIN USER u ON u.email = l.uemail
                JOIN MotionPicture m ON l.mpid = m.mid
                WHERE u.age < $byLikeAge
                GROUP BY l.mpid
                HAVING COUNT(l.mpid) > $byLikesNo"

                );

            }

            else if($queryAll == "marvelWB"){ // query 12
                $stmt = $conn->prepare("SELECT P.name AS Actor_name, MP.name AS Movie_Name1, MP2.name AS Movie_Name2
                FROM People P
                JOIN Role R ON P.pid = R.pid , MotionPicture MP, MotionPicture MP2
                WHERE R.role_name = 'Actor'
                AND MP.production = 'Marvel'
                AND MP2.production = 'Warner Bros'
                "

                );

            }

            else if($queryAll == "avgComedy"){ // query 13
                $stmt = $conn->prepare("SELECT name AS movie_name, rating
                FROM MotionPicture
                WHERE mid IN (
                    SELECT m.mid
                    FROM MotionPicture m
                    JOIN Genre g ON m.mid = g.mpid
                    WHERE g.genre_name = 'comedy'
                )
                AND rating > (
                    SELECT AVG(rating)
                    FROM MotionPicture m
                    WHERE m.mid IN (
                        SELECT m.mid
                        FROM MotionPicture m
                        JOIN Genre g ON m.mid = g.mpid
                        WHERE g.genre_name = 'comedy'
                    )
                )
                ORDER BY rating DESC;

                "

                );

            }

            else if($queryAll == "mostRoles"){ // query 14
                $stmt = $conn->prepare("SELECT MP.name, COUNT(DISTINCT R.pid) AS people_count, COUNT(DISTINCT R.role_name) AS role_count
                FROM MotionPicture MP
                JOIN Role R ON MP.mid = R.mpid
                GROUP BY MP.mid
                ORDER BY people_count DESC
                LIMIT 5
                "

                );

            }
            else if($queryAll == "sameBirthday"){ // query 15
                $stmt = $conn->prepare("SELECT p.name AS actor1, b.name AS actor2, DATE_FORMAT(p.dob, '%m-%d') AS common_bday
                FROM People p
                JOIN People b ON MONTH(p.dob) = MONTH(b.dob) AND DAY(p.dob) = DAY(b.dob)
                WHERE p.pid < b.pid AND p.pid != b.pid

                "

                );

            }




            if ($queryAll == "movies"){
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


                foreach(new TableRows2(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                   echo $v;



                }


            }
            else{
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                    echo $v;
                }

            }

            // execute statement


            // for each row that we fetched, use the iterator to build a table row on front-end

        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        echo "</table>";
        // destroy our connection
        $conn = null;

    ?>

    </div>
</body>
</html>
