<?php
include "connection.php"; 
$date = $_GET['id']; 
$qry = mysqli_query($con,"select * from dailydata where dates='$date'"); 
$data = mysqli_fetch_array($qry); 

if(isset($_POST['update']))
{
    $openingbalance = intval($_POST["openingbalance"]);
    $xerox = intval($_POST["xeroxcopies"]);
    $xeroxamount = intval($_POST["xeroxamount"]);
    $ftransferamount = intval($_POST["ftamount"]);
    $ftransfercharges = intval($_POST["ftcharges"]);
    $printcopies = intval($_POST["printcopies"]);
    $printamount = intval($_POST["printamount"]);
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

    $edit = mysqli_query($con,"update dailydata SET dates='$date',openingbalance='$openingbalance',xeroxcopies='$xerox',
    xeroxamount='$xeroxamount',ftamount='$ftransferamount',ftcharges='$ftransfercharges',printcopies='$printcopies',
    printamount='$printamount',astrocopies='$astrocopies',astroamount='$astroamount',billactualamount='$ebonlinepayamount',
    billcharges='$ebonlinepaycharges',scannos='$scanmailcopies',scanamount='$scanmailamount',colorprintcopies='$colorprintcopies',
    colorprintamount='$colorprintamount',laminationnos='$laminationnos',laminationprice='$laminationamount',spiralnos='$spiralnos',
    spiralamount='$spiralamount',otheramount1='$others1',comments1='$othercomments1',otheramount2='$others2',
    comments2='$othercomments2',otheramount3='$others3',comments3='$othercomments3', otheramount4='$others4',
    comments4='$othercomments4' WHERE dates = '$date'");
	
    if($edit)
    {
        mysqli_close($con); 
        header("location:index.php"); 
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<style>
            table {
            border-collapse: collapse;
            width: 100%;
            }

            th {
            text-align: center;
            padding: 8px;
            }

            td {
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th {
            background-color: #55b18f;
            color: white;
            }

            input{
                display: inline-block;
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
                padding: 8px 15px;
                border: 2px solid #DEDEDE;
                -webkit-border-radius: 8px;
                border-radius: 8px;
                font: normal 16px/normal "Times New Roman", Times, serif;
                color: #000000;
                -o-text-overflow: clip;
                text-overflow: clip;
                background: rgba(252,252,252,1);
                -webkit-box-shadow: 0 0 0 0 rgba(0,0,0,0.2) inset;
                box-shadow: 0 0 0 0 rgba(0,0,0,0.2) inset;
                text-shadow: 0 0 0 rgba(255,255,255,0.66) ;
            }
</style>
<center>
    <h3>Update Data</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Opening Balance: </td>
                <td><input type="text" name="openingbalance" value="<?php echo $data['openingbalance'] ?>" placeholder="Enter the Opening Balance" Required></td>
            </tr>
            <tr>
                <th>Details</th>
                <th>Copies / Nos</th>
                <th>Amount / Charges</th>
            </tr>
            <tr>
                <td> Xerox: </td>
                <td><input type="text" name="xeroxcopies" value="<?php echo $data['xeroxcopies'] ?>" placeholder="Enter No.of Xerox Copies" Required></td>
                <td><input type="text" name="xeroxamount" value="<?php echo $data['xeroxamount'] ?>" placeholder="Enter No.of Xerox Amount" Required></td>
            </tr>
            <tr>
                <td> Fund Transfer: </td>
                <td><input type="text" name="ftamount" value="<?php echo $data['ftamount'] ?>" placeholder="Actual Amount" Required></td>
                <td><input type="text" name="ftcharges" value="<?php echo $data['ftcharges'] ?>" placeholder="Charges" Required></td>
            </tr>
            <tr>
                <td> Printout: </td>
                <td> <input type="text" name="printcopies" value="<?php echo $data['printcopies'] ?>" placeholder="Copies" Required> </td>
                <td>  <input type="text" name="printamount" value="<?php echo $data['printamount'] ?>" placeholder="Amount" Required> </td>
            </tr>
            <tr>
                <td> Astro: </td>
                <td>  <input type="text" name="astrocopies" value="<?php echo $data['astrocopies'] ?>" placeholder="Copies" Required> </td>
                <td>  <input type="text" name="astroamount" value="<?php echo $data['astroamount'] ?>" placeholder="Amount" Required> </td>
            </tr>
            <tr>
                <td> Eb Bill and Online Payment: </td> 
                <td>  <input type="text" name="billactualamount" value="<?php echo $data['billactualamount'] ?>" placeholder="Actual Amount" Required> </td>
                <td>  <input type="text" name="billcharges" value="<?php echo $data['billcharges'] ?>" placeholder="Charges" Required> </td>
            </tr>
            <tr>
                <td> Scan & Mail: </td>
                <td> <input type="text" name="scannos" value="<?php echo $data['scannos'] ?>" placeholder="Nos" Required> </td>
                <td> <input type="text" name="scanamount" value="<?php echo $data['scanamount'] ?>" placeholder="Amount" Required></td>
            </tr>
            <tr>
                <td> Color Print: </td>
                <td> <input type="text" name="colorprintcopies" value="<?php echo $data['colorprintcopies'] ?>" placeholder="Nos" Required> </td>
                <td> <input type="text" name="colorprintamount" value="<?php echo $data['colorprintamount'] ?>" placeholder="Amount" Required> </td>
            </tr>
            <tr>
                <td> Lamination: </td>
                <td> <input type="text" name="laminationnos" value="<?php echo $data['laminationnos'] ?>" placeholder="Nos" Required> </td>
                <td> <input type="text" name="laminationprice" value="<?php echo $data['laminationprice'] ?>" placeholder="Amount" Required> </td>
            </tr>
            <tr>
                <td> Spiral: </td>
                <td> <input type="text" name="spiralnos" value="<?php echo $data['spiralnos'] ?>" placeholder="Nos" Required> </td>
                <td> <input type="text" name="spiralamount" value="<?php echo $data['spiralamount'] ?>" placeholder="Amount" Required> </td>
            </tr>
            <tr>
                <td> Other Incomes 1: </td>
                <td> <input type="text" name="otheramount1" value="<?php echo $data['otheramount1'] ?>" placeholder="Amount" Required> </td>
                <td> <input type="text" name="comments1" value="<?php echo $data['comments1'] ?>" placeholder="Comments" Required> </td>
            </tr>
            <tr>
                <td> Other Incomes 2: </td>
                <td> <input type="text" name="otheramount2" value="<?php echo $data['otheramount2'] ?>" placeholder="Amount" Required> </td>
                <td> <input type="text" name="comments2" value="<?php echo $data['comments2'] ?>" placeholder="Comments" Required> </td>
            </tr>
            <tr>
                <td> Other Incomes 3: </td>
                <td> <input type="text" name="otheramount3" value="<?php echo $data['otheramount3'] ?>" placeholder="Amount" Required> </td>
                <td> <input type="text" name="comments3" value="<?php echo $data['comments3'] ?>" placeholder="Comments" Required> </td>
            </tr>
            <tr>
                <td> Other Incomes 4: </td>
                <td> <input type="text" name="otheramount4" value="<?php echo $data['otheramount4'] ?>" placeholder="Amount" Required> </td>
                <td> <input type="text" name="comments4" value="<?php echo $data['comments4'] ?>" placeholder="Enter No.of Xerox Copies" Required> </td>
            </tr>
            <tr>
                <td>Grand Total: </td>
                <td> <input type="text" name="totvalue" value="<?php echo $data['totvalue'] ?>" placeholder="Total Amount" disabled> </td>
            </tr>
            </table>
            <br><br>
        <input type="submit" name="update" value="Update">
        </form>
    </center>