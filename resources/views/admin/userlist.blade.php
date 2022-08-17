    
<!DOCTYPE html>
<html lang="en">
  <head>    
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">      

      @include('admin.sidebar')
      
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper"> 
        <div align="center" style="padding-top: 200px;">
            <table>
                <tr style="background-color: cornflowerblue;">
                    <th style="padding: 10px">User Name</th>
                    <th style="padding: 10px">Email</th>
                    <th style="padding: 10px">Phone</th>
                    <th style="padding: 10px">Address</th>
                    <th style="padding: 10px">Action</th>

                </tr>

                @foreach ($data as $userlist)
            <tr align="center" style="background-color: cornflowerblue;">  
                        <td>{{$userlist ->name}}</td>
                        <td>{{$userlist ->email}}</td>
                        <td>{{$userlist ->phone}}</td>
                        <td>{{$userlist ->address}}</td> 

                        @if($userlist->user_type=="0")
                        <td><a class="btn btn-danger" href="{{url('deleteuser',$userlist->id)}}">Delete</a></td>
                        @else 
                        <td>Can Not Delete</td>
                        @endif

           
           
            </tr>
            @endforeach

            </table>

        </div>
      </div>

    

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>