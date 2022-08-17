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

          <div class="container">
            <h5>Search By Catagory</h5>
                      <form action="{{url('searchdoc')}}" method="get">
                        @csrf
                        <input type="text" name="searchname" style="color: cornflowerblue">
                        <input type="submit" value="search" class="btn btn-success">
                      </form>
            <table>
                <tr style="background-color: cornflowerblue;">
                    <th style="padding: 10px">Doctor name</th>
                    <th style="padding: 10px">Phone</th>
                    <th style="padding: 10px">Speciality</th>
                    <th style="padding: 10px">Room No</th>
                    <th style="padding: 10px">Iamge</th>
                    <th style="padding: 10px">Delete</th>
                    <th style="padding: 10px">Update</th>


                </tr>


                @foreach ($data as $doctor)
            <tr align="center" style="background-color: cornflowerblue;">  
                        <td>{{$doctor ->name}}</td>
                        <td>{{$doctor ->phone}}</td>
                        <td>{{$doctor ->speciality}}</td>
                        <td>{{$doctor ->room}}</td>   
                        <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td> 
                 
                <td><a class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>

           
           
            </tr>
            @endforeach

            </table>

        </div>
      </div>
      </div>

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>