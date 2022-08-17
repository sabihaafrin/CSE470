{{-- <x-app-layout>
</x-app-layout> --}}
    
  <!DOCTYPE html>
<html lang="en">
    <base href="/public">
      <style type="text/css">
      label
      {
        display: inline-block;
        width: 200px;
      }
      </style>
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
     
        <div class="container" align="center" style="padding-top: 100px;">

        <form action="{{url('addtest')}}" method="POST" enctype="multipart/form-data">
         
          @csrf 

          <div style="padding: 15px;">          
              <label>Test divisions </label>
              <select name="speciality" style="color:black; width: 200px;" required="">
                <option> --Select-- </option>
                <option value="angiography"> angiography </option>
                <option value="echocardiography"> echocardiography </option>
                <option value="ultrasound"> ultrasound </option>
                <option value="autopsy"> autopsy </option>
                <option value="biopsy"> biopsy </option>
                <option value="endoscopy"> endoscopy </option>
                <option value="blood test"> blood test </option>
                <option value="glucose test"> glucose test </option>
                <option value="CT-scan"> CT-scan </option>
                <option value="X-Ray"> X-Ray </option>

              </select>
              </div>


          <div style="padding: 15px;">          
            <label>Cost</label>
            <input type="number" style="color:black;" name="number" placeholder="Write the cost" required="">
            </div>


            <div style="padding: 15px;">
              <label>Room Number </label>
              <input type="text" style="color:black;" name="room" placeholder="Write the room number" required="">      
              </div>

              <div style="padding: 15px;">
                  <label>Available Date </label>
                  <div class="col-5 col-sm-2">
                      <input type="date" style="color:black;" placeholder="Select a date" required="">
                    </div>
                  
                  </div>

                  <div style="padding: 15px;">
                      <label>Available Shift </label>
                      <input type="text" style="color:black;" name="room" placeholder="Write the room number" required="">      
                      </div>

            

                    <div style="padding: 15px;">
                      <input type="submit" class="btn btn-success" >      
                      </div>

        </form>
        </div>
          </div>
    

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>