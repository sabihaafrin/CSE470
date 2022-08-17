{{-- <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
    <h1> hdasd </h1>
</body>
</html> --}}

    
<!DOCTYPE html>
<html lang="en">
  <head>
    
  </head>
  <body>
    <div class="container-scroller">
            
      <div class="container-fluid page-body-wrapper"> 
        <h1 align="center" style="padding-top: 50px;">Available Diagnostic Test Schedule</h1>
        <div align="center" style="padding-top: 50px;">
            <table>
                <tr style="background-color: cornflowerblue;">
                    <th style="padding: 20px">Test Division</th>
                    <th style="padding: 20px">Cost</th>
                    <th style="padding: 20px">Room</th>
                    <th style="padding: 20px">Delivery No</th>
                    <th style="padding: 20px">Available Slot</th>                    

                </tr>

                @foreach ($data as $testlist)
            <tr align="center" style="background-color: cornflowerblue;">  
                        <td style="padding: 20px">{{$testlist ->test}}</td>
                        <td style="padding: 20px">{{$testlist ->cost}}</td>
                        <td style="padding: 20px">{{$testlist ->room}}</td>
                        <td style="padding: 20px">{{$testlist ->date}}</td>   
                        <td style="padding: 20px">{{$testlist ->slot}}</td>   

          
            </tr>
              @endforeach

            </table>

        </div>
      </div>

  </body>
</html>