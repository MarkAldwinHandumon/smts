<x-app-layout>
<style>
    .uli-box {
        width: 35px;
        text-align: center;
        margin-right: 5px;
    }

    .bordered-table {
  width: 100%;
  border-collapse: collapse; /* Ensures borders between cells are merged */
}

.bordered-table td {
  border: 1px solid black; /* Border for each cell */
  padding: 8px; /* Optional padding */
  text-align: center; /* Optional text alignment */
}

.bordered-table th {
  border: 1px solid black; /* Border for header cells if used */
  padding: 8px; /* Optional padding */
  text-align: center; /* Optional text alignment */
}

</style>
<div class="pcoded-content" style="padding-left: 10%;padding-right: 10%;">
    <div class="row">
        <!-- Logo Column -->
        <div class="col-12 col-md-1" style="border: solid 1px black;">
            <div class="text-center">
                <center>
                <img class="img-radius" src="{{ asset('assets/images/tesda.png') }}" alt="User-Profile-Image" style="width: 100%; max-width: 100px;">
                </center>
            </div>
        </div>
        
        <!-- Main Text Column -->
        <div class="col-12 col-md-10" style="border: solid 1px black;">
            <div class="text-center">
                <br><br>
                <strong>
                    <h5 style="color: blue; margin: 0;">Technical Education and Skills Development Authority</h5>
                    <h6 style="color: blue; margin: 0;">Pangasiwaan sa Edukasyong Teknikal at Pagpapaunlad ng Kasanayan</h6>
                </strong>
            </div>
        </div>

        <!-- Additional Info Column -->
        <div class="col-12 col-md-1" style="border: solid 1px black;">
            <div class="text-center"><br><br>
                <strong>
                    <span>MIS 03 – 01</span><br>
                    (ver. 2017)
                </strong>
            </div>
        </div>

        <!-- Header Section -->
        <div class="col-12" style="border-left: solid 1px black; border-right: solid 1px black; padding: 10px;">
            <div class="text-center">
                <h1>Registration Form</h1>
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="col-12" style="border: solid 1px black; padding: 1px;">
            <div class="row">
                <div class="col-12 col-md-10 text-center"><br><br><br>
                    <h1 style="color: blue; margin: 0;">LEARNERS PROFILE FORM</h1>
                </div>
                <div class="col-12 col-md-2">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center align-items-center" style="padding: 8px;">
                            <div style="padding: 60px;">
                                <div class="text-center">
                                    <strong>
                                        <span style="padding-left: 10px;">I.D. Picture</span><br>
                                        (1 x 1)
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
           <strong><h4 style="color: blue; margin: 0;">1. Web-Based Information System Auto Generated</h4></strong>
        </div>

        <div class="col-12" style="border-left: solid 1px black; border-right: solid 1px black;">
    <div class="row">
        <!-- Left Section -->
        <div class="col-12 col-md-3 p-1">
            <div class="row">
                <div class="col-1 p-3">
                    <span style="font-weight: bold; font-size: large">1.1</span>
                </div>
                <div class="col-11">
                    <span style="font-weight: bold; font-size: large">Unique Learner Identifier <br>(ULI) Number:</span>
                </div>
            </div>
        </div>

        <!-- Input Section -->
        <div class="col-12 col-md-5 p-3">
            <div class="d-flex flex-wrap">
                <input type="text" class="uli-box" id="uli1" maxlength="1" disabled />
                <input type="text" class="uli-box" id="uli2" maxlength="1" disabled />
                <input type="text" class="uli-box" id="uli3" maxlength="1" disabled />
                <input type="text" class="uli-box" id="uli4" maxlength="1" disabled />
                <input type="text" class="uli-box" id="uli5" maxlength="1" disabled />
                <input type="text" class="uli-box" id="uli6" maxlength="1" disabled />
                <input type="text" class="uli-box" id="uli7" maxlength="1" disabled />
                <input type="text" class="uli-box" id="uli8" maxlength="1" disabled />
                <input type="text" class="uli-box" id="uli9" maxlength="1" disabled />
                <input type="text" class="uli-box" id="uli10" maxlength="1" disabled />
                <input type="text" class="uli-box" id="uli11" maxlength="1" value="-" disabled />
                <input type="text" class="uli-box" id="uli12" maxlength="1" disabled />
                <input type="text" class="uli-box" id="uli13" maxlength="1" disabled />
                <input type="text" class="uli-box" id="uli14" maxlength="1" disabled />
            </div>
        </div>

        <!-- Entry Date Label -->
        <div class="col-12 col-md-2 p-2 text-end">
            <div class="row">
                <div class="col-2 p-3">
                </div>
                <div class="col-10 p-3">
                    <span style="font-weight: bold; font-size: large">1.2</span>
                    <span style="font-weight: bold; font-size: large">Entry Date:</span>
                </div>
            </div>
        </div>

        <!-- Entry Date Input -->
        <div class="col-12 col-md-2 p-3">
            <input type="text" class="form-control">
        </div>
    </div>
</div>

        
        <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
           <strong><h4 style="color: blue; margin: 0;">2. Manpower Profile</h4></strong>
        </div>

        <div class="col-12" style="border-left: solid 1px black;border-right: solid 1px black;">
            <div class="row">
                <div class="col-3 p-1">
                <p style="font-weight:bold;font-size:large">2.1.	Name:</span>
                </div>
                <div class="col-3 p-1 ">
                <input type="text" class="form-control" name="end_date" style="border:solid 1px">
                <label class="d-flex justify-content-center align-items-center font-weight-bold">Last Name, Extension Name (e.g:Jr.)</label>
                </div>
                <div class="col-3 p-1">
                <input type="text" class="form-control" name="end_date" style="border:solid 1px">
                <label class="d-flex justify-content-center align-items-center font-weight-bold">First </label>
                </div>
                <div class="col-3 p-1">
                <input type="text" class="form-control" name="end_date" style="border:solid 1px">
                <label class="d-flex justify-content-center align-items-center font-weight-bold">Middle</label>
                </div>
            </div>
        </div>
        <div class="col-12" style="border-left: solid 1px black;border-right: solid 1px black;">
            <div class="row">
                <div class="col-3 p-1">
                <p style="font-weight:bold;font-size:large">2.2. Complete <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Permanent Mailing <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:</span>
                </div>
                <div class="col-3 p-1 ">
                <input type="text" class="form-control" name="end_date" style="border:solid 1px">
                <label class="d-flex justify-content-center align-items-center font-weight-bold">Number, Street</label>
                </div>
                <div class="col-3 p-1">
                <input type="text" class="form-control" name="end_date" style="border:solid 1px">
                <label class="d-flex justify-content-center align-items-center font-weight-bold">Barangay </label>
                </div>
                <div class="col-3 p-1">
                <input type="text" class="form-control" name="end_date" style="border:solid 1px">
                <label class="d-flex justify-content-center align-items-center font-weight-bold">District</label>
                </div>
            </div>
        </div>

        <div class="col-12" style="border-left: solid 1px black;border-right: solid 1px black;">
            <div class="row">
                <div class="col-3 p-1">
                </div>
                <div class="col-3 p-1 ">
                <input type="text" class="form-control" name="end_date" style="border:solid 1px">
                <label class="d-flex justify-content-center align-items-center font-weight-bold">City/Municipality</label>
                </div>
                <div class="col-3 p-1">
                <input type="text" class="form-control" name="end_date" style="border:solid 1px">
                <label class="d-flex justify-content-center align-items-center font-weight-bold">Province </label>
                </div>
                <div class="col-3 p-1">
                <input type="text" class="form-control" name="end_date" style="border:solid 1px">
                <label class="d-flex justify-content-center align-items-center font-weight-bold">Region</label>
                </div>
            </div>
        </div>

        <div class="col-12" style="border-left: solid 1px black;border-right: solid 1px black;">
            <div class="row">
                <div class="col-3 p-1">
                </div>
                <div class="col-3 p-1 ">
                <input type="text" class="form-control" name="end_date" style="border:solid 1px">
                <label class="d-flex justify-content-center align-items-center font-weight-bold">Email Address/Facebook Account:</label>
                </div>
                <div class="col-3 p-1">
                <input type="text" class="form-control" name="end_date" style="border:solid 1px">
                <label class="d-flex justify-content-center align-items-center font-weight-bold">Contact No: </label>
                </div>
                <div class="col-3 p-1">
                <input type="text" class="form-control" name="end_date" style="border:solid 1px">
                <label class="d-flex justify-content-center align-items-center font-weight-bold">Nationality</label>
                </div>
            </div>
        </div>

        <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
           <strong><h4 style="color: blue; margin: 0;"> 3. Personal Information</h4></strong>
        </div>

        <div class="col-12" style="border-left: solid 1px black;border-right: solid 1px black;">
            <div class="row">
                <div class="col-3 pl-4" style="border-right: solid 1px black;">
                    <p style="font-weight:bold;font-size:large">3.1. Sex:</span>

                    <div class="form-check  pl-5">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">Male</label>
                    </div>

                    <div class="form-check  pl-5">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">Female</label>
                    </div>
                </div>

                <div class="col-3 pl-4" style="border-right: solid 1px black;">
                    <p style="font-weight:bold;font-size:large">3.2.  Civil Status</span>

                    <div class="form-check  pl-5">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">Single</label>
                    </div>

                    <div class="form-check  pl-5">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">Married</label>
                    </div>

                    <div class="form-check  pl-5">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">Widower</label>
                    </div>

                    <div class="form-check  pl-5">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">Separated</label>
                    </div>
                <br>
                </div>
                <div class="col-6 pl-4">
                    <p style="font-weight:bold;font-size:large"> 3.3   Employment  Status (before the training)</span>

                    <div class="form-check  pl-5">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">Employed</label>
                    </div>

                    <div class="form-check  pl-5">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">Unemployed</label>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-12 p-5" style="border: solid 1px black; ">
            <div class="row">
                <div class="col p-1">
                <p style="font-weight:bold;font-size:large">3.4 Birthdate</span>
                </div>
                <div class="col p-1">
                    <input type="text" class="form-control" name="first_name" style="border: solid 1px black;">
                    <label class="d-flex justify-content-center align-items-center font-weight-bold text-center">
                    Month of Birth
                    </label>
                </div>
                <div class="col p-1">
                    <input type="text" class="form-control" name="middle_name" style="border: solid 1px black;">
                    <label class="d-flex justify-content-center align-items-center font-weight-bold text-center">
                    Day of Birth
                    </label>
                </div>
                <div class="col p-1">
                    <input type="text" class="form-control" name="middle_name_2" style="border: solid 1px black;">
                    <label class="d-flex justify-content-center align-items-center font-weight-bold text-center">
                    Year of Birth
                    </label>
                </div>
                <div class="col p-1">
                    <input type="text" class="form-control" name="suffix" style="border: solid 1px black;">
                    <label class="d-flex justify-content-center align-items-center font-weight-bold text-center">
                    Age
                    </label>
                </div>
            </div>
        </div>

        <div class="col-12 p-5" style="border: solid 1px black; ">
            <div class="row">
                <div class="col p-1">
                <p style="font-weight:bold;font-size:large">3.4 Birthdate</span>
                </div>
                <div class="col p-1">
                    <input type="text" class="form-control" name="first_name" style="border: solid 1px black;">
                    <label class="d-flex justify-content-center align-items-center font-weight-bold text-center">
                    City/Municipality
                    </label>
                </div>
    
                <div class="col p-1">
                    <input type="text" class="form-control" name="middle_name_2" style="border: solid 1px black;">
                    <label class="d-flex justify-content-center align-items-center font-weight-bold text-center">
                    Province
                    </label>
                </div>
                <div class="col p-1">
                    <input type="text" class="form-control" name="suffix" style="border: solid 1px black;">
                    <label class="d-flex justify-content-center align-items-center font-weight-bold text-center">
                    Region
                    </label>
                </div>
            </div>
        </div>

        <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;">
           <strong><h4 style=" margin: 0;"> 3.5  Educational Attainment Before the Training (Trainee)</h4></strong>
        </div>

        <div class="col-12">
            <div class="row">
                <table class="bordered-table">
                    <tbody>
                        @foreach($educations->chunk(4) as $chunk) <!-- Chunk into groups of 4 -->
                        <tr>
                            @foreach($chunk as $row) <!-- Iterate over each chunk -->
                            <td style="text-align: left;">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="{{ $row->id }}">
                                    <label class="form-check-label" for="{{ $row->id }}" >{{ $row->title }}</label>
                                </div>
                            </td>
                            @endforeach
                            <!-- If less than 4 columns, fill the rest with empty cells -->
                            @for ($i = count($chunk); $i < 4; $i++)
                            <td></td>
                            @endfor
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    
        <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
           <strong><h4 style="color: blue; margin: 0;"> 4. Learner/Trainee/Student (Clients)    Classification:</h4></strong>
        </div>

        
        <div class="col-12">
            <div class="row">
                <table class="bordered-table">
                    <tbody>
                        @foreach($classifications->chunk(3) as $chunk) <!-- Chunk into groups of 4 -->
                        <tr>
                            @foreach($chunk as $row) <!-- Iterate over each chunk -->
                            <td style="text-align: left;">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="{{ $row->id }}">
                                    <label class="form-check-label" for="{{ $row->id }}" >{{ $row->title }}</label>
                                </div>
                            </td>
                            @endforeach
                            <!-- If less than 4 columns, fill the rest with empty cells -->
                            @for ($i = count($chunk); $i < 3; $i++)
                            <td></td>
                            @endfor
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
           <strong><h4 style="color: blue; margin: 0;"> 5. Type of Disability (for Persons with Disability Only):</h4></strong>
        </div>

        <div class="col-12">
            <div class="row">
                <table class="bordered-table">
                    <tbody>
                        @foreach($disablities->chunk(3) as $chunk) <!-- Chunk into groups of 4 -->
                        <tr>
                            @foreach($chunk as $row) <!-- Iterate over each chunk -->
                            <td style="text-align: left;">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="{{ $row->id }}">
                                    <label class="form-check-label" for="{{ $row->id }}" >{{ $row->title }}</label>
                                </div>
                            </td>
                            @endforeach
                            <!-- If less than 4 columns, fill the rest with empty cells -->
                            @for ($i = count($chunk); $i < 3; $i++)
                            <td></td>
                            @endfor
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
           <strong><h4 style="color: blue; margin: 0;"> 6. Causes of Disability (for Persons with Disability Only):</h4></strong>
        </div>

        <div class="col-12">
            <div class="row">
                <table class="bordered-table">
                    <tbody>
                        @foreach($causes->chunk(3) as $chunk) <!-- Chunk into groups of 4 -->
                        <tr>
                            @foreach($chunk as $row) <!-- Iterate over each chunk -->
                            <td style="text-align: left;">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="{{ $row->id }}">
                                    <label class="form-check-label" for="{{ $row->id }}" >{{ $row->title }}</label>
                                </div>
                            </td>
                            @endforeach
                            <!-- If less than 4 columns, fill the rest with empty cells -->
                            @for ($i = count($chunk); $i < 3; $i++)
                            <td></td>
                            @endfor
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-12" style="border: solid 1px black;">
            <div class="row">
                <div class="col-3 pl-2 pt-2" style="border-right: solid 1px black;">
                <strong><h4 style="color: blue; margin: 0;">7. Taken NCAE/YP4SC Before?</h4></strong>
                </div>

                <div class="col-12 col-md-3 pl-md-4" style="border-right: solid 1px black;">
                    <div class="form-check pt-3">
                        <input class="form-check-input" type="radio" name="ncae" id="ncae-yes" value="yes">
                        <label class="form-check-label" for="ncae-yes">Yes</label>
                    </div>
                </div>

                <div class="col-12 col-md-6 pl-md-4">
                    <div class="form-check pt-3">
                        <input class="form-check-input" type="radio" name="ncae" id="ncae-no" value="no">
                        <label class="form-check-label" for="ncae-no">No</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" style="border: solid 1px black;">
            <div class="row">
                <div class="col-6 pl-5 pt-2">
                    <div>
                    <h4>Where: <input type="text" style="width: 500px;border:none;border-bottom: solid 1px black;background-color:transparent"></h4> 
                    </div>
                    <div>
                    <h4>Where: <input type="text" style="width: 500px;border:none;border-bottom: solid 1px black;background-color:transparent"></h4> 
                    </div>
                </div>
                <div class="col-6 p-1">
                </div>
            </div>
        </div>
        <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
           <strong><h4 style="color: blue; margin: 0;"> 8. Name of Course/Qualification <input type="text" style="width: 500px;border:none;background-color:transparent"></h4></strong>
        </div>

        <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
           <strong><h4 style="color: blue; margin: 0;"> 9. If Scholar, What Type of Scholarship Package (TWSP, PESDA, STEP)? <input type="text" style="width: 500px;border:none;background-color:transparent"></h4></strong>
        </div>

        <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
           <strong><h4 style="color: blue; margin: 0;"> 10. Privacy Disclaimer <input type="text" style="width: 500px;border:none;background-color:transparent"></h4></strong>
        </div>

        <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
           <span>I hereby allow TESDA to use/post my contact details, name, email, cellphone/landline nos. and other information I provided which may be used for processing of my scholarship application, for employment opportunities and other purposes.</span>
        </div>

    </div>
</div>
</x-app-layout>
