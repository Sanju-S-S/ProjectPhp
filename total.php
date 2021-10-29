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

                echo $total_value;
        ?>
</body>
</html>