<html>
    <body>
        <?php      
            $dates = $_POST["date"];
            $openingbalance = intval($_POST["openingbalance"]);
            $xerox = intval($_POST["xeroxcopies"]);
            $xeroxamount = intval($_POST["xeroxamount"]);
            $ftransferamount = intval($_POST["ftamount"]);
            $ftransfercharges = intval($_POST["ftcharges"]);
            $printoutcopies = intval($_POST["printcopies"]);
            $printoutamount = intval($_POST["printamount"]);
            $astrocopies = intval($_POST["astrocopies"]);
            $astroamount = intval($_POST["astroamount"]);
            $ebonlinepayamount = intval($_POST["billactualamount"]);
            $ebonlinepaycharges = intval($_POST["billcharges"]);
            $scanmailcopies = intval($_POST["scannos"]);
            $scanmailamount = intval($_POST["scanamount"]);
            $colorprintcopies = intval($_POST["colorprintcopies"]);
            $colorprintamount = intval($_POST["colorprintamount"]);
            $laminationnos = intval($_POST["laminationnos"]);
            $laminationamount = intval($_POST["laminationprice"]);
            $spiralnos = intval($_POST["spiralnos"]);
            $spiralamount = intval($_POST["spiralamount"]);
            $others1 = intval($_POST["otheramount1"]);
            $othercomments1 = $_POST["comments1"];
            $others2 = intval($_POST["otheramount2"]);
            $othercomments2 = $_POST["comments2"];
            $others3 = intval($_POST["otheramount3"]);
            $othercomments3 = $_POST["comments3"];
            $others4 = intval($_POST["otheramount4"]);
            $othercomments4 = $_POST["comments4"];

            
            $total_value=$xeroxamount+$ftransferamount+$ftransfercharges+$printoutamount+$astroamount+$ebonlinepayamount+$ebonlinepaycharges+
            $scanmailamount+$colorprintamount+$laminationamount+$spiralamount+$others1+$others2+$others3+$others4;

            $host = "localhost";  
            $user = "root";  
            $password = '';  
            $db_name = "ProjetDb";  
            
            $con = mysqli_connect($host, $user, $password, $db_name); 

            if(mysqli_connect_errno()) {  
                die("Failed to connect with MySQL: ". mysqli_connect_error());  
            }  
            $stmt = $con->prepare("INSERT INTO dailydata (dates, openingbalance, xeroxcopies, xeroxamount, ftamount, ftcharges, 
            printcopies, printamount, astrocopies, astroamount, billactualamount, billcharges, scannos, scanamount, colorprintcopies, 
            colorprintamount, laminationnos, laminationprice, spiralnos, spiralamount, otheramount1, comments1, otheramount2, comments2,
            otheramount3, comments3, otheramount4, comments4,totvalue) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
            ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("siiiiiiiiiiiiiiiiiiiisisisisi",$dates, $openingbalance, $xerox, $xeroxamount, $ftransferamount, $ftransfercharges,
            $printoutcopies, $printoutamount, $astrocopies, $astroamount, $ebonlinepayamount, $ebonlinepaycharges, $scanmailcopies, 
            $scanmailamount, $colorprintcopies, $colorprintamount, $laminationnos, $laminationamount, $spiralnos, $spiralamount, $others1,
            $othercomments1, $others2, $othercomments2, $others3, $othercomments3, $others4, $othercomments4, $total_value);
            $stmt->execute();
            
            $stmt->close();
            $con->close();
           
        ?>  
        <center>
            <h1>The Data was Submitted successfully</h1>
            <h3>Closing Balance : <?php echo $total_value; ?><h3>
            <h4>If the Closing Balance was Wrong, click here to edit it!!</h4>
            <a href="daily_data_entry.php">Back</a>
        </center>
    </body>
</html>