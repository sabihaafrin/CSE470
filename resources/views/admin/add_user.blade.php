
    
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
       <style type="text/css">
       label
       {
        display: inline-block;
        width: 200px;
       }
       </style>


      @include('admin.css')
  
    </head>
    <body>
      <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        
  
        @include('admin.sidebar')
        <!-- partial -->
        
        @include('admin.navbar')
  
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-top: 100px;">
                <form action="{{url('upload_employee')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div style="padding: 15px;">
                        <label>Employee Name</label>
                        <input type="text" style="color: black" name="name" placeholder="Write the name">

                    </div>

                    <div style="padding: 15px;">
                        <label>Phone</label>
                        <input type="number" style="color: black" name="number" placeholder="Write the number">

                    </div>

                    <div style="padding: 15px;">
                        <label>Position</label>
                        <select name="position" style="color: black; width:200px;" >
                            <option>---Select Position---</option>
                            <option value="nurse">Nurse</option>
                            <option value="wardboy">Wardboy</option>
                            <option value="guard">Guard</option>
                            <option value="driver">Driver</option>
                            <option value="receptionist">Receptionist</option>

                        </select>

                    </div>

                    <div style="padding: 15px;">
                        <label>Floor</label>
                        <input type="text" style="color: black" name="floor" placeholder="Write the floor">

                    </div>

                    <div style="padding: 15px;">
                        <label>Shift</label>
                        <input type="text" style="color: black" name="shift" placeholder="Write the shift">

                    </div>

                    <div style="padding: 15px;">
                        <label>Employee Image</label>
                        <input type="file" name="file">
                    </div>
                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>


        </div>
      @include('admin.script')
      <!-- End custom js for this page -->
    </body>
  </html>