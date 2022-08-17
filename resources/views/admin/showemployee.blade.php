
    
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
  
        {{-- <div class="container-fluid page-body-wrapper"> 
            <div align="center" style="padding-top: 100px;">
              <div>
                <li class="nav-item dropdown" style="list-style: none; float: left; padding-left: 40px"> <!--list-syle=none cz to remove the dot which appears before the menu name -->
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{"all"}}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/admin/showemployee') }}">
                            {{ ('nurse') }}
                        </a>
                        <a class="dropdown-item" href="{{ url('/admin/showemployee') }}">
                          {{ ('guard') }}
                      </a>
                      <a class="dropdown-item" href="{{ url('/admin/showemployee') }}">
                        {{ ('wardboy') }}
                    </a>
                    <a class="dropdown-item" href="{{ url('/admin/showemployee') }}">
                      {{ ('driver') }}
                  </a>
                  <a class="dropdown-item" href="{{ url('/admin/showemployee') }}">
                    {{ ('receptionist') }}
                   </a>
                        <a class="dropdown-item" href="{{ url('/admin/showemployee')}}">
                            {{ ('Add') }}
                        </a>
                    </div>
                </li>
            </div> --}}
         
<div class="container">
  <h5>Search By Catagory</h5>
            <form action="{{url('search')}}" method="get">
              @csrf
              <input type="text" name="search" style="color: cornflowerblue">
              <input type="submit" value="Search" class="btn btn-success">
            </form>


                <table>
                    <tr style="background-color: cornflowerblue;">
                        <th style="padding: 10px">Employee name</th>
                        <th style="padding: 10px">Phone</th>
                        <th style="padding: 10px">Position</th>
                        <th style="padding: 10px">Floor</th>
                        <th style="padding: 10px">Shift</th>
                        <th style="padding: 10px">Image</th>
                        <th style="padding: 10px">Delete</th>
                        <th style="padding: 10px">Update</th>

                    </tr>
                    
                    @foreach($data as $employee)
                    <tr style="background-color: cornflowerblue;">
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>{{$employee->position}}</td>
                        <td>{{$employee->floor}}</td>
                        <td>{{$employee->shift}}</td>
                        <td><img height="100" width="100" src="employeeimage/{{$employee->image}}"> </td>
                    
                        <td><a class="btn btn-danger" href="{{url('deleteemployee',$employee->id)}}">Delete</a></td>
                        <td><a class="btn btn-primary" href="{{url('updateemployee',$employee->id)}}">Update</a></td>
                              
                    </tr>
                    
                     @endforeach

                </table>
                       
            </div>
          </div>

      @include('admin.script')
      <!-- End custom js for this page -->
    </body>
  </html>