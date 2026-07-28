<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: lightpink;
        }

        h2 {
            color: #050581;
        }

        h4 {
            color: #058124;
        }

        .user-form {
            width: 600px;
        }


        .input-wrapper {
            margin: 15px 0;
        }


        input[type="text"] {
            width: 250px;
            height: 30px;
            font-size: 16px;
            border: 1px solid blue;
            border-radius: 5px;
            padding-left: 8px;
        }


        button {
            width: 260px;
            padding: 10px;
            background: #0a4d9c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }


        button:hover {
            background: #063b77;
        }


        /* Side by side fields */
        .input-row {
            display: flex;
            gap: 30px;
        }


        .input-row .input-wrapper {
            display: flex;
            flex-direction: column;
        }


        /* Skills */
        .skill {
            display: flex;
            align-items: center;
            gap: 10px;
        }


        input[type="checkbox"] {
            width:18px;
            height:18px;
        }


        label {
            font-size:16px;
        }


        /* Age */
        .age-box {
            display:flex;
            align-items:center;
            gap:15px;
        }


        input[type="range"] {
            width:250px;
        }


        output {
            font-size:18px;
            color:#050581;
            font-weight:bold;
        }


        select {
            width:260px;
            height:35px;
            border:1px solid blue;
            border-radius:5px;
        }

        .error{
            background: #f5a5a5;
            color: #ed0b0b;
            padding: 3px 10px;
            border-radius: 20px;
            display: inline-block;
            margin: 5px;
            
        }


    </style>

</head>

<body>

<h2>Add New User</h2>

<div class="user-form">

<form action="adduser" method="post">

@csrf

<!-- Name -->

    <div class="input-wrapper">
        <input type="text" placeholder="Enter First Name" value="{{ old('firstname') }}"name="firstname">
    <span>
        @error('firstname') 
            <x-message-banner msg="{{ $message }}" class="error" /> 
        @enderror
    </span>
    </div>


    <div class="input-wrapper">
    <input type="text" placeholder="Enter Last Name" value="{{ old('lastname') }}" name="lastname">
     <span>
        @error('lastname') 
            <x-message-banner msg="{{ $message }}" class="error" /> 
        @enderror
    </span>
    </div>

    <div class="input-wrapper">
    <input type="text" placeholder="Enter Email ID" value="{{ old('email') }}" name="email">
     <span>
        @error('email') 
            <x-message-banner msg="{{ $message }}" class="error" /> 
        @enderror
    </span>
    </div>

    <div class="input-wrapper">
    <input type="text" placeholder="Enter Password" name="password">
     <span>
        @error('password') 
            <x-message-banner msg="{{ $message }}" class="error" /> 
        @enderror
    </span>
    </div>

    <!-- Skills -->

    <h2>Add User's Skills</h2>

    <h4>Check The Box</h4>

    <div class="skill">

    <input type="checkbox" name="skills[]" value="PHP" id="php">
    <label for="php">PHP</label>

    <input type="checkbox" name="skills[]" value="DotNet" id="dotnet">
    <label for="dotnet">.Net</label>

    <input type="checkbox" name="skills[]" value="JAVA" id="java">
    <label for="java">Java</label>

    </div>


    <!-- Gender -->

    <h2>Gender</h2>

    <div>

    <input type="radio" name="gender" value="male" id="male">
    <label for="male">Male</label>

    <input type="radio" name="gender" value="female" id="female">
    <label for="female">Female</label>

    </div>

    <!-- City -->

    <h2>City</h2>

    <select name="city">

    <option value="Delhi">Delhi</option>
    <option value="Kolkata">Kolkata</option>
    <option value="Mumbai">Mumbai</option>

    </select>

    <!-- Age -->

    <h2>Age</h2>

    <div class="age-box">

    <input type="range" 
        name="age" 
        id="age"
        min="18" 
        max="60" 
        value="18"
        oninput="showAge.value = age.value">

    <output id="showAge">18</output>

    </div>

    <!-- Aadhaar + Phone -->

    <div class="input-row">


    <div class="input-wrapper">

    <h2>Aadhaar Number</h2>

    <input type="text"
        placeholder="Enter Aadhaar Number"
        value="{{ old('aadhar_number') }}"
        name="aadhar_number">
    <span>
        @error('aadhar_number') 
            <x-message-banner msg="{{ $message }}" class="error" /> 
        @enderror
    </span>

    </div>

    <div class="input-wrapper">

    <h2>Phone Number</h2>

    <input type="text"
        placeholder="Enter Phone Number"
        value="{{ old('phone_number') }}"
        name="phone_number">

    <span>
    @error('phone_number') 
        <x-message-banner msg="{{ $message }}" class="error" /> 
    @enderror
</span>
    </div>
    </div>


    <!-- PAN + Pincode -->

    <div class="input-row">


    <div class="input-wrapper">

    <h2>PAN Number</h2>

    <input type="text"
        placeholder="Enter PAN Number"
        value="{{ old('pan_number') }}"
        name="pan_number">
    <span>
    @error('pan_number') 
        <x-message-banner msg="{{ $message }}" class="error" /> 
    @enderror
    </span>
    </div>

    <div class="input-wrapper">

    <h2>Pincode</h2>

    <input type="text"
        placeholder="Enter Pincode"
        name="pincode">
    <span>
    @error('pincode') 
        <x-message-banner msg="{{ $message }}" class="error" /> 
    @enderror
    </span>
    </div>

    </div>

    <br>


    <button type="submit">
        Final Submit
    </button>


</form>

</div>


</body>
</html>