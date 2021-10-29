<!DOCTYPE html>
<html>
	<head>
        <title>Data Page</title>
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
	</head>
	<body>
			<div id="frm">
                <br>
			<h1 style="text-align: center;">Welcome to the Daily Data Entry Page</h1>
            <h2 style="text-align: center;">Enter you Data in the Below Form </h2> <br>
            <center>
                <br>

                <form name="f2" action="insert.php" onsubmit="return validation()" method="POST">
                    <table>
                        <tr>
                            <td>Date: </td>
                            <td><input type="date" name="date" value="<?= date('Y-m-d', time()); ?>" disabled></td>
                        </tr>
                        
                        <tr>
                            <td> Opening Balance: </td>
                            <td><input type="number" name="openingbalance"></td>
                        </tr>

                        <tr>
                            <th>Details</th>
                            <th>Copies / Nos</th>
                            <th>Amount / Charges</th>
                        </tr>
                    
                        <tr>
                            <td> Xerox: </td>
                            <td> <input type="number" name="xeroxcopies" placeholder="Copies"> </td>
                            <td> <input type="number" name="xeroxamount" placeholder="Amount"> </td>
                        </tr>

                        <tr>
                            <td> Fund Transfer: </td>
                            <td> <input type="number" name="ftamount" placeholder="Actual Amount"> </td>
                            <td> <input type="number" name="ftcharges" placeholder="Charges"> </td>
                        </tr>

                        <tr>
                            <td> Printout: </td>
                            <td> <input type="number" name="printcopies" placeholder="Copies"> </td>
                            <td> <input type="number" name="printamount" placeholder="Amount"> </td>
                        </tr>

                        <tr>
                            <td> Astro: </td>
                            <td> <input type="number" name="astrocopies" placeholder="Nos"> </td>
                            <td> <input type="number" name="astroamount" placeholder="Amount"> </td>
                        </tr>

                        <tr>
                            <td> Eb Bill and Online Payment: </td> 
                            <td> <input type="number" name="billactualamount" placeholder="Actual Amount"> </td>
                            <td> <input type="number" name="billcharges" placeholder="Charges"> </td>
                        </tr>

                        <tr>
                            <td> Scan & Mail: </td>
                            <td> <input type="number" name="scannos" placeholder="Nos"> </td>
                            <td> <input type="number" name="scanamount" placeholder="Amount"> </td>
                        </tr>

                        <tr>
                            <td> Color Print: </td>
                            <td> <input type="number" name="colorprintcopies" placeholder="Copies"> </td>
                            <td> <input type="number" name="colorprintamount" placeholder="Amount"> </td>
                        </tr>

                        <tr>
                            <td> Lamination: </td>
                            <td> <input type="number" name="laminationnos" placeholder="Nos"> </td>
                            <td> <input type="number" name="laminationprice" placeholder="Amount"> </td>
                        </tr>

                        <tr>
                            <td> Spiral: </td>
                            <td> <input type="number" name="spiralnos" placeholder="Nos"> </td>
                            <td> <input type="number" name="spiralamount" placeholder="Amount"> </td>
                        </tr>

                        <tr>
                            <td> Other Incomes 1: </td>
                            <td> <input type="number" name="otheramount1" placeholder="Other"> </td>
                            <td> <input type="text" name="comments1" placeholder="Description"> </td>
                        </tr>

                        <tr>
                            <td> Other Incomes 2: </td>
                            <td> <input type="number" name="otheramount2" placeholder="Other"> </td>
                            <td> <input type="text" name="comments2" placeholder="Comments"> </td>
                        </tr>

                        <tr>
                            <td> Other Incomes 3: </td>
                            <td> <input type="number" name="otheramount3" placeholder="Other"> </td>
                            <td> <input type="text" name="comments3" placeholder="Comments"> </td>
                        </tr>

                        <tr>
                            <td> Other Incomes 4: </td>
                            <td> <input type="number" name="otheramount4" placeholder="Other"> </td>
                            <td> <input type="text" name="comments4" placeholder="Comments"> </td>
                        </tr>
                    </table>
                    <br><br>
                    <input type="submit" style="margin-left: auto; margin-right: auto; display: block;" value="Submit">
                    <br>
                </form>
            </center>
		</div>

		<script>  
            function validation()  
            {  
                var openingbal=document.f2.openingbalance.value;  
                var xeroxcopies=document.f2.xeroxcopies.value;
                var xeroxamount=document.f2.xeroxamount.value;
                var ftamount=document.f2.ftamount.value;
                var ftcharges=document.f2.ftcharges.value;
                var printcopies=document.f2.printcopies.value;
                var printamount=document.f2.printamount.value;
                var astrocopies=document.f2.astrocopies.value;
                var astroamount=document.f2.astroamount.value;
                var billactualamount=document.f2.billactualamount.value;
                var billcharges=document.f2.billcharges.value;
                var scannos=document.f2.scannos.value;
                var scanamount=document.f2.scanamount.value;
                var colorprintcopies=document.f2.colorprintcopies.value;
                var colorprintamount=document.f2.colorprintamount.value;
                var laminationnos=document.f2.laminationnos.value;
                var laminationprice=document.f2.laminationprice.value;
                var spiralnos=document.f2.spiralnos.value;
                var spiralamount=document.f2.spiralamount.value;

                if(openingbal.length=="") {  
                    alert("Opening Balance field is empty");  
                    return false;  
                }  
                else  
                {  
                    if(xeroxcopies.length=="") {  
                        alert("Xerox Copy field is empty");  
                        return false;  
                    }   
                    if (xeroxamount.length=="") {  
                    	alert("Xerox Amount field is empty");  
                    	return false;  
                    }
                    if (ftamount.length=="") {  
                    	alert("Fund Transfer Actual Amount field is empty");  
                    	return false;  
                    } 
                    if (ftcharges.length=="") {  
                    	alert("Fund Transfer Charges field is empty");  
                    	return false;  
                    }
                    if (printcopies.length=="") {  
                    	alert("Print Copies field is empty");  
                    	return false;  
                    } 
                    if (printamount.length=="") {  
                    	alert("Print Amount field is empty");  
                    	return false;  
                    } 
                    if (astrocopies.length=="") {  
                    	alert("Astro Copies field is empty");  
                    	return false;  
                    } 
                    if (astroamount.length=="") {  
                    	alert("Astro Amount field is empty");  
                    	return false;  
                    } 
                    if (billactualamount.length=="") {  
                    	alert("Eb & Online Application Actual Bill Amount field is empty");  
                    	return false;  
                    } 
                    if (billcharges.length=="") {  
                    	alert("Eb & Online Application Charges Amount field is empty");  
                    	return false;  
                    } 
                    if (scannos.length=="") {  
                    	alert("No.of Scan field is empty");  
                    	return false;  
                    } 
                    if (scanamount.length=="") {  
                    	alert("Scan Amount field is empty");  
                    	return false;  
                    } 
                    if (colorprintcopies.length=="") {  
                    	alert("No.of Color Print field is empty");  
                    	return false;  
                    } 
                    if (colorprintamount.length=="") {  
                    	alert("Color Print Amount field is empty");  
                    	return false;  
                    } 
                    if (laminationnos.length=="") {  
                    	alert("No.of Lamination field is empty");  
                    	return false;  
                    } 
                    if (laminationprice.length=="") {  
                    	alert("Lamination Amount field is empty");  
                    	return false;  
                    } 
                    if (spiralnos.length=="") {  
                    	alert("No.of Spiral field is empty");  
                    	return false;  
                    } 
                    if (spiralamount.length=="") {  
                    	alert("Spiral Amount field is empty");  
                    	return false;  
                    } 
                }                                
            }  
        </script>  

	</body>
</html> 