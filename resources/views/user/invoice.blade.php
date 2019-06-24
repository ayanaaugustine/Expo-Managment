
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - #123</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 40px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
				.button {
  background-color:#60A7A6; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: right;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
	
}
   </style>

</head>
<body>
@foreach ($view as $views) 

<?php 
$t=$views->expotitle;
$tv=DB::select("select * from tbl_addticket where expotitle='$t' ");

foreach($tv as $tb){
$q=$views->count;
$am=$tb->ticketrate;
$total=$q * $am;
}
?>
<div class="information">
    <table width="100%">
        <tr>
			
            <td align="left" style="width: 40%;">
                <h3>{{ Auth::user()->email }}</h3>
                <pre>
<!--Street 15
123456 City
United Kingdom
<br /><br />
Date: 2018-01-01
Identifier: #uniquehash
Status: Paid-->
</pre>


            </td>
            <!--<td align="center">
                <img src="/path/to/logo.png" alt="Logo" width="64" class="logo"/>
            </td>-->
            <td align="right" style="width: 40%;">

                <h3>{{ $views->expotitle}}</h3>
								
                <pre>
                    

                   
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>

<div class=""  id="record">
    <h3>Invoice specification #123</h3>
    <table style="padding-left:15px;width:100%;height:50%;">
	
        <tr style="margin-top:15px;line-height:5;">
            <th style="margin-top:8px;color:red;font-size:16px;">expotitle</th><br>
            <th style="margin-top:8px;color:red;font-size:16px;">count</th><br>
            <th style="margin-top:8px;color:red;font-size:16px;">Amount</th><br>
						<th style="margin-top:8px;color:red;font-size:16px;">Total Amount</th><br>
        </tr>
        
        
        <tr>
				<th style="margin-top:8px;font-size:12px;">{{ $views->expotitle}}</th>
        <th>{{ $views->count}}</th>
				@foreach($tv as $v)
        <th >{{$v->ticketrate}}</th>
				@endforeach
				<th >{{ $total}}</th>
        </tr>
				
				<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
                <td> </td>
		  	
				</tr>
				
       <!--  <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="1"></td>
            <td align="left">Total</td>
            <td align="left" class="gray">€15,-</td>
        </tr> -->
			
        </tbody>
    </table>
		@endforeach
		
</div>
<br>
<br>
<button align="right" type="submit" style="margin-left:80%;" class="button pull-right" onclick="createPDF()">Download</button>
<br>
<br>
<br>
<button align="right" type="submit" style="margin-left:80%;" class="button pull-right"><a href="/userhomee">Back</a></button>
<script>
    function createPDF()
    {
        var sTable = document.getElementById('record').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title>Ticket Details</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close();   // CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.

    }
    </script>

<div class="information" style="position: absolute; bottom: 0;">
    <!--<table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                Company Slogan
            </td>
        </tr>

    </table>-->
</div>

</body>
</html>