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
                <table>
                    <tr>
                        <td>Date: </td>
                        <td><input type="date" name="date" ></td>
                    </tr>
                    <tr>
                        <td> Opening Balance: </td>
                        <td><input type="number" name="openingbalance"></td>
                        </tr>
                </table><br><br>

                <form name="f2" action="insert.php" onsubmit="return validation()" method="POST">
                <table>
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
                        <td> <input type="number" name="astroprice" placeholder="Amount"> </td>
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
                        <td> Other Income: </td>
                        <td> <input type="number" name="otheramount" placeholder="Other"> </td>
                        <td> <input type="text" name="comments" placeholder="Comments"> </td>
                    </tr>
                </table>
                    <br><br>
                    <input type="submit" style="margin-left: auto; margin-right: auto; display: block;">
                    <br>
                </form>
            </center>
		</div>

		<script>  
            function validation()  
            {  
                var nam=document.f2.name.value;  
                var ps=document.f2.password.value;  
				var em=document.f2.email.value;
				var ph=document.f2.phone.value;

                if(nam.length=="") {  
                    alert("User Name field is empty");  
                    return false;  
                }  
                else  
                {  
                    if(ps.length=="") {  
                        alert("Password field is empty");  
                        return false;  
                    }   
                    if (em.length=="") {  
                    	alert("Email field is empty");  
                    	return false;  
                    } 
					if (ph.length=="" || ph.length!=10 || ph!=Number) {  
                    	alert("Phone Number field is empty or Check it once.");  
                    	return false;  
                    }   
                }                             
            }  
        </script>  

	</body>
</html> 