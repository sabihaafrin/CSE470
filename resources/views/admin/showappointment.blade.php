
    
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      
      @include('admin.css')
  
    </head>
    <body>
      <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        
  
        @include('admin.sidebar')
        <!-- partial -->
        
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper"> 
            <div align="center" style="padding-top: 100px;">
                <table>
                    <tr style="background-color: cornflowerblue;">
                        <th style="padding: 10px">Customer name</th>
                        <th style="padding: 10px">Email</th>
                        <th style="padding: 10px">Phone</th>
                        <th style="padding: 10px">Doctor Name</th>
                        <th style="padding: 10px">Date</th>
                        <th style="padding: 10px">Comment</th>
                        <th style="padding: 10px">Status</th>
                        <th style="padding: 10px">Approve</th>
                        <th style="padding: 10px">Cancel</th>

                    </tr>
                    @foreach ($data as $appoint)
                        
                    <tr align="center" style="background-color: cornflowerblue">
                        <td>{{$appoint ->name}}</td>
                        <td>{{$appoint ->email}}</td>
                        <td>{{$appoint ->phone}}</td>
                        <td>{{$appoint ->doctor}}</td>
                        <td>{{$appoint ->date}}</td>
                        <td>{{$appoint ->comment}}</td>
                        <td>{{$appoint ->status}}</td>
                        <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approve</a></td>
                        <td><a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancel</a></td>

                    </tr>
                    @endforeach




                </table>

            </div>

        




      <!-- plugins:js -->
      
  
      @include('admin.script')
      <!-- End custom js for this page -->
    </body>
  </html>