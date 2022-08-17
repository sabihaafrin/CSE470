
     <!DOCTYPE html>
     <html lang="en">
       <head>   
        
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
           @include('admin.sidebar')        
           @include('admin.navbar')

           <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-top: 100px;">
                <form action="{{url('upload_test')}}" method="POST" enctype="multipart/form-data">         
                    @csrf    
                    <div style="padding: 15px;">          
                        <label>Test divisions </label>
                        <select name="test" style="color:black; width: 100px;" required="">
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
     
                        <label>Cost of test</label>
                        <input type="text" style="color: black" name="cost" placeholder="Write the cost">
        
                    </div>

                    <div style="padding: 15px;">          
     
                        <label>Room no</label>
                        <input type="text" style="color: black" name="room" placeholder="Write the room">
        
                    </div>

                    <div style="padding: 15px;">          
     
                        <label>Result Date</label>
                        <input type="date" style="color:black;" name= "date" placeholder="Select a date" required="">
        
                    </div>

                    <div style="padding: 15px;">
                        <label>Available Slot </label>
                        <input type="time" style="color:black;" name="slot" placeholder="Select the slot" required="">      
                    </div>

                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-success">
                    </div>

                </form>       
           </div>    
         @include('admin.script')
       </body>
     </html>