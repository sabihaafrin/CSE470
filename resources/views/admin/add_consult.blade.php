
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
                <form action="{{url('upload_consult')}}" method="POST" enctype="multipart/form-data">         
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
     
                            <label>Test Details</label>
                            <input type="text" style="color: black" name="details" placeholder="Description of test">
            
                        </div>
                    <div style="padding: 15px;">          
     
                        <label>Discount Per Test</label>
                        <input type="text" style="color: black" name="discount" placeholder="Discount per test">
        
                    </div>

                    <div style="padding: 15px;">          
                        <label>Doctor Name </label>
                        <select name="docname" style="color:black; width: 200px;" required="">
                          <option> --Select-- </option>
                          <option value="heart"> Kai </option>
                          <option value="laser"> Sehun </option>
                          <option value="hormones"> Suho </option>
                          <option value="medicine"> Lay </option>
                          <option value="brain"> Baekhyun </option>
                          <option value="bones"> Kyungsoo </option>
                          <option value="skin"> Chanyeol </option>
                          <option value="skin"> Xiumin </option>
                          <option value="skin"> Chen </option>


                        </select>
                        </div>

                    <div style="padding: 15px;">          
     
                        <label> Schedule Start Time</label>
                        <input type="time" style="color:black;" name= "starttime" placeholder="Select a time" required="">
        
                    </div>

                    <div style="padding: 15px;">          
     
                        <label>Schedule End Time</label>
                        <input type="time" style="color:black;" name= "endtime" placeholder="Select a time" required="">
        
                    </div>

                    <div style="padding: 15px;">
                        <label>Emergency Contact </label>
                        <input type="text" style="color:black;" name="emergency" placeholder="Please call" required="">      
                    </div>

                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-success">
                    </div>

                </form>       
           </div>    
         @include('admin.script')
       </body>
     </html>