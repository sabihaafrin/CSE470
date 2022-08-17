
<!DOCTYPE html>
<html lang="en">
  <head>
    
  </head>
  <body>
    <div class="container-scroller">
            
      <div class="container-fluid page-body-wrapper"> 
        <h1 align="center" style="padding-top: 50px;">Consult Us!</h1>
        <div align="center" style="padding-top: 50px;">
            <table>
                <tr style="background-color: cornflowerblue;">
                    <th style="padding: 20px">Test Division</th>
                    <th style="padding: 20px">Test Details</th>
                    <th style="padding: 20px">Discount Per Test</th>
                    <th style="padding: 20px">Doctor Name</th>
                    <th style="padding: 20px">Schedule Start Time</th>                    
                    <th style="padding: 20px">Schedule End Time</th>                    
                    <th style="padding: 20px">Emergency Contact</th>                    

                </tr>

                @foreach ($data as $consultlist)
            <tr align="center" style="background-color: cornflowerblue;">  
                        <td style="padding: 20px">{{$consultlist ->test}}</td>
                        <td style="padding: 20px">{{$consultlist ->details}}</td>
                        <td style="padding: 20px">{{$consultlist ->discount}}</td>
                        <td style="padding: 20px">{{$consultlist ->docname}}</td>   
                        <td style="padding: 20px">{{$consultlist ->starttime}}</td>   
                        <td style="padding: 20px">{{$consultlist ->endtime}}</td>   
                        <td style="padding: 20px">{{$consultlist ->emergency}}</td>   
          
            </tr>
              @endforeach

            </table>

        </div>
      </div>

  </body>
</html>