<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New Registration Form</title>


    <style>

        * {
            box-sizing: border-box;
        }


        body {
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
            font-family: 'Courier New', monospace;
        }


        /* Page Heading */

        h2 {
            color: #ae00ff;
            text-decoration: underline;
            text-align: center;
            margin: 0 0 20px 0;
        }

        span {
            color: red;
        }

        /* Main Form Box */

        .registration-form {
            width: 900px;
            max-width: 100%;
            margin: 0 auto;
            padding: 25px;

            border: 1px solid #e799ee;
            border-radius: 10px;

            background-color: #e5f3a6;

            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }


        /* Form */

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .mandatory-info {
            text-align: left;
            font-size: 13px;
            color: #555;
        }


        /* Single Field */

        .form-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }


        /* Labels */

        .form-group label {
            min-width: 160px;
            font-weight: bold;
        }

        .percentage-input {
            position: relative;
            display: inline-block;
        }

        .percentage-input input {
            padding-right: 10px;
        }

        .percentage-input span {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #494949;
            pointer-events: none;
        }                


        /* Inputs, Select and Textarea */

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 9px 10px;

            border: 1px solid #999;
            border-radius: 5px;

            font-family: inherit;
            font-size: 14px;

            background-color: white;
        }


        /* Normal Inputs */

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"],
        .form-group input[type="tel"],
        .form-group input[type="number"],
        .form-group input[type="date"],
        .form-group select {
            width: 300px;
        }


        /* File Inputs */

        .form-group input[type="file"] {
            width: auto;
            padding: 5px;
        }


        /* Textarea */

        .form-group textarea {
            width: 400px;
            height: 90px;
            resize: vertical;
        }


        /* Two Column Layout */

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }


        .form-row .form-group {
            min-width: 0;
        }


        .form-row .form-group label {
            min-width: 120px;
        }


        /* Gender */

        .gender {
            display: flex;
            align-items: center;
            gap: 8px;
        }


        .gender-title {
            min-width: 160px;
            font-weight: bold;
        }


        .gender input {
            margin: 0;
        }


        /* Result Documents */

        .result-documents {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }


        /* Register Button */

        .button-group {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }


        button {
            padding: 10px 30px;

            border: none;
            border-radius: 5px;

            background-color: #ae00ff;
            color: white;

            font-family: inherit;
            font-size: 16px;
            font-weight: bold;

            cursor: pointer;
        }


        button:hover {
            background-color: #8d00cc;
        }


        /* Responsive Design */

        @media (max-width: 700px) {

            body {
                padding: 10px;
            }


            .registration-form {
                padding: 15px;
            }


            /* Make two columns into one */

            .form-row {
                grid-template-columns: 1fr;
            }


            /* Stack label and input */

            .form-group {
                align-items: flex-start;
                flex-direction: column;
            }


            .form-group label,
            .gender-title {
                min-width: auto;
            }


            .form-group input[type="text"],
            .form-group input[type="email"],
            .form-group input[type="password"],
            .form-group input[type="tel"],
            .form-group input[type="number"],
            .form-group input[type="date"],
            .form-group select,
            .form-group textarea {
                width: 100%;
            }


            /* Keep gender options in one row */

            .gender {
                flex-direction: row;
                align-items: center;
            }

        }

    </style>

</head>


<body>


    <h2>New Registration Form</h2>


    <div class="registration-form">


        <form
            action="/student/reg_data"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf


            <!-- ================================= -->
            <!-- Name -->
            <!-- ================================= -->

            <div class="form-row">


                <!-- First Name -->

                <div class="form-group">

                    <label for="first_name">
                        First Name<span>*</span>:
                    </label>

                    <input
                        type="text"
                        name="first_name"
                        id="first_name"
                        placeholder="Enter First Name"
                    >

                </div>


                <!-- Last Name -->

                <div class="form-group">

                    <label for="last_name">
                        Last Name<span>*</span>:
                    </label>

                    <input
                        type="text"
                        name="last_name"
                        id="last_name"
                        placeholder="Enter Last Name"
                    >

                </div>


            </div>


            <!-- ================================= -->
            <!-- Gender -->
            <!-- ================================= -->

            <div class="gender">

                <label class="gender-title">
                    Gender<span>*</span>:
                </label>


                <input
                    type="radio"
                    name="gender"
                    id="male"
                    value="male"
                >

                <label for="male">
                    Male
                </label>


                <input
                    type="radio"
                    name="gender"
                    id="female"
                    value="female"
                >

                <label for="female">
                    Female
                </label>

            </div>


            <!-- ================================= -->
            <!-- Date of Birth -->
            <!-- ================================= -->

            <div class="form-group">

                <label for="dob">
                    Date of Birth<span>*</span>:
                </label>

                <input
                    type="date"
                    name="dob"
                    id="dob"
                >

            </div>


            <!-- ================================= -->
            <!-- Profile Picture -->
            <!-- ================================= -->

            <div class="form-group">

                <label for="profile_picture">
                    Profile Picture:
                </label>

                <input
                    type="file"
                    name="profile_picture"
                    id="profile_picture"
                >

            </div>


            <!-- ================================= -->
            <!-- State -->
            <!-- ================================= -->

            <div class="form-group">

                <label for="state">
                    State<span>*</span>:
                </label>

                <select name="state" id="state">

                    <option value="">
                        Select State
                    </option>

                    <option value="wb">
                        West Bengal
                    </option>

                    <option value="ori">
                        Odisha
                    </option>

                    <option value="ass">
                        Assam
                    </option>

                    <option value="tri">
                        Tripura
                    </option>

                </select>

            </div>


            <!-- ================================= -->
            <!-- Address -->
            <!-- ================================= -->

            <div class="form-group">

                <label for="address">
                    Address<span>*</span>:
                </label>

                <textarea
                    name="address"
                    id="address"
                    placeholder="Enter Your Address"
                ></textarea>

            </div>


            <!-- ================================= -->
            <!-- Class & Department -->
            <!-- ================================= -->

            <div class="form-row">


                <!-- Class -->

                <div class="form-group">

                    <label for="class">
                        Class<span>*</span>:
                    </label>

                    <select name="class" id="class">

                        <option value="">
                            Select Class
                        </option>

                        <option value="1">
                            Class 11
                        </option>

                        <option value="2">
                            Class 12
                        </option>

                        <option value="3">
                            First Year
                        </option>

                        <option value="4">
                            Second Year
                        </option>

                        <option value="5">
                            Third Year
                        </option>

                    </select>

                </div>


                <!-- Department -->

                <div class="form-group">

                    <label for="department">
                        Department<span>*</span>:
                    </label>

                    <select name="department" id="department">

                        <option value="">
                            Select Department
                        </option>

                        <option value="science">
                            Science
                        </option>

                        <option value="commerce">
                            Commerce
                        </option>

                        <option value="arts">
                            Arts
                        </option>

                    </select>

                </div>


            </div>


            <!-- ================================= -->
            <!-- Government ID -->
            <!-- ================================= -->

            <div class="form-row">


                <!-- Government ID Type -->

                <div class="form-group">

                    <label for="govt_id_type">
                        Government ID Type<span>*</span>:
                    </label>

                    <select
                        name="govt_id_type"
                        id="govt_id_type"
                    >

                        <option value="">
                            Select ID Type
                        </option>

                        <option value="aadhar">
                            Aadhar Card
                        </option>

                        <option value="pan">
                            PAN Card
                        </option>

                        <option value="voter">
                            Voter ID
                        </option>

                    </select>

                </div>


                <!-- Government ID Number -->

                <div class="form-group">

                    <label for="govt_id_number">
                        ID Number<span>*</span>:
                    </label>

                    <input
                        type="text"
                        name="govt_id_number"
                        id="govt_id_number"
                        placeholder="Enter Government ID Number"
                    >

                </div>


            </div>


            <!-- ================================= -->
            <!-- Government ID Image -->
            <!-- ================================= -->

            <div class="form-group">

                <label for="govt_id_image">
                    Government ID Image<span>*</span>:
                </label>

                <input
                    type="file"
                    name="govt_id_image"
                    id="govt_id_image"
                >

            </div>


            <!-- ================================= -->
            <!-- Phone Number -->
            <!-- ================================= -->

            <div class="form-group">

                <label for="phone">
                    Phone Number<span>*</span>:
                </label>

                <input
                    type="tel"
                    name="phone"
                    id="phone"
                    placeholder="Enter Phone Number"
                >

            </div>


            <!-- ================================= -->
            <!-- Academic Percentages -->
            <!-- ================================= -->

            <div class="form-row">


                <!-- Madhyamik Percentage -->

                <div class="form-group">

                    <label for="madhyamik_percentage">
                        Madhyamik Percentage<span>*</span>:
                    </label>
                    <div class="percentage-input">
                        <input
                            type="number"
                            name="madhyamik_percentage"
                            id="madhyamik_percentage"
                            placeholder="Enter Percentage"
                            min="0"
                            max="100"
                            step="0.01"
                        > <span>%</span>
                    </div>

                </div>


                <!-- Higher Secondary Percentage -->

                <div class="form-group">

                    <label for="higher_secondary_percentage">
                        Higher Secondary Percentage<span>*</span>:
                    </label>
                    <div class="percentage-input">

                        <input
                            type="number"
                            name="higher_secondary_percentage"
                            id="higher_secondary_percentage"
                            placeholder="Enter Percentage"
                            min="0"
                            max="100"
                            step="0.01"
                        > <span>%</span>
                    </div>
                </div>


            </div>


            <!-- ================================= -->
            <!-- Result Documents -->
            <!-- ================================= -->

            <div class="result-documents">


                <!-- Madhyamik Result -->

                <div class="form-group">

                    <label for="mp_result_doc">
                        Madhyamik Result<span>*</span>:
                    </label>

                    <input
                        type="file"
                        name="mp_result_doc"
                        id="mp_result_doc"
                    >

                </div>


                <!-- Higher Secondary Result -->

                <div class="form-group">

                    <label for="hs_result_doc">
                        Higher Secondary Result<span>*</span>:
                    </label>

                    <input
                        type="file"
                        name="hs_result_doc"
                        id="hs_result_doc"
                    >

                </div>


            </div>


            <!-- ================================= -->
            <!-- Email -->
            <!-- ================================= -->

            <div class="form-group">

                <label for="email">
                    Email<span>*</span>:
                </label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter Your Email"
                >

            </div>


            <!-- ================================= -->
            <!-- Password -->
            <!-- ================================= -->

            <div class="form-group">

                <label for="password">
                    Password:
                </label>

                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Enter Password"
                >

            </div>


            <!-- ================================= -->
            <!-- Register Button -->
            <!-- ================================= -->

            <div class="button-group">

                <button type="submit">
                    Register
                </button>

            </div>


        </form>

        <p class="mandatory-info">
            <span>*</span> marked fields are mandatory. Please fill them carefully.
        </p>
    </div>


</body>

</html>