
    
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
                        <th style="padding: 10px">Name</th>
                        <th style="padding: 10px">Email</th>
                        <th style="padding: 10px">Phone</th>
                        <th style="padding: 10px">Date</th>
                        <th style="padding: 10px">Comment</th>
                        <th style="padding: 10px">Status</th>
                        <th style="padding: 10px">Approved</th>
                        <th style="padding: 10px">Cancelled</th>

                    </tr>
                    @foreach ($data as $ambul)
                        
                    <tr align="center" style="background-color: cornflowerblue">
                        <td>{{$ambul ->name}}</td>
                        <td>{{$ambul ->email}}</td>
                        <td>{{$ambul ->phone}}</td>
                        <td>{{$ambul ->date}}</td>
                        <td>{{$ambul ->comment}}</td>
                        <td>{{$ambul ->status}}</td>
                        <td><a class="btn btn-success" href="{{url('approveBook',$ambul->id)}}">Approve</a></td>
                        <td><a class="btn btn-danger" href="{{url('cancelBook',$ambul->id)}}">Cancel</a></td>

                    </tr>
                    @endforeach




                </table>

            </div>


      <!-- plugins:js -->
      
  
      @include('admin.script')
      <!-- End custom js for this page -->
    </body>
  </html>