<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration Preview</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #eef4ff, #f8fafc);
            color: #1f2937;
        }

        .page-wrapper {
            width: 100%;
            min-height: 100vh;
            padding: 50px 20px;
        }

        .container {
            width: 100%;
            max-width: 950px;
            margin: 0 auto;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #1e40af, #2563eb);
            color: white;
            padding: 30px;
            border-radius: 16px 16px 0 0;
            text-align: center;
            box-shadow: 0 5px 15px rgba(30, 64, 175, 0.15);
        }

        .header h1 {
            margin: 0;
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        .header p {
            margin: 8px 0 0;
            font-size: 14px;
            opacity: 0.9;
        }

        /* Main Card */
        .card {
            background: #ffffff;
            padding: 35px;
            border-radius: 0 0 16px 16px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
        }

        /* Section */
        .section {
            margin-bottom: 35px;
        }

        .section:last-child {
            margin-bottom: 0;
        }

        .section-heading {
            display: flex;
            align-items: center;
            margin-bottom: 18px;
        }

        .section-heading::before {
            content: "";
            width: 5px;
            height: 24px;
            background: #2563eb;
            border-radius: 5px;
            margin-right: 10px;
        }

        .section-heading h2 {
            margin: 0;
            font-size: 19px;
            color: #1e3a8a;
        }

        /* Information Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .info-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 15px 18px;
            transition: all 0.2s ease;
        }

        .info-item:hover {
            border-color: #bfdbfe;
            background: #f8fbff;
        }

        .label {
            display: block;
            color: #64748b;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }

        .value {
            display: block;
            color: #111827;
            font-size: 15px;
            font-weight: 500;
            min-height: 20px;
            word-break: break-word;
        }

        /* Full Width */
        .full-width {
            grid-column: 1 / -1;
        }

        /* Percentage */
        .percentage {
            background: #eff6ff;
            border-color: #bfdbfe;
        }

        .percentage .value {
            color: #1d4ed8;
            font-size: 18px;
            font-weight: 700;
        }

        /* Submit Area */
        .submit-area {
            margin-top: 35px;
            padding-top: 25px;
            border-top: 1px solid #e5e7eb;
            text-align: center;
        }

        .submit-area p {
            margin: 0 0 20px;
            color: #64748b;
            font-size: 14px;
        }

        .submit-button {
            border: none;
            outline: none;
            padding: 14px 45px;
            border-radius: 9px;
            background: linear-gradient(135deg, #16a34a, #15803d);
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(22, 163, 74, 0.25);
            transition: all 0.2s ease;
        }

        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(22, 163, 74, 0.3);
        }

        .submit-button:active {
            transform: translateY(0);
        }

        /* Mobile */
        @media (max-width: 700px) {

            .page-wrapper {
                padding: 20px 12px;
            }

            .header {
                padding: 25px 15px;
            }

            .header h1 {
                font-size: 24px;
            }

            .card {
                padding: 22px 15px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .full-width {
                grid-column: auto;
            }

            .submit-button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="page-wrapper">

        <div class="container">

            <!-- Page Header -->
            <div class="header">
                <h1>Student Registration Preview</h1>
                <p>Please review your information before final submission</p>
            </div>

            <!-- Main Card -->
            <div class="card">

                <!-- Personal Information -->
                <div class="section">

                    <div class="section-heading">
                        <h2>Personal Information</h2>
                    </div>

                    <div class="info-grid">

                        <div class="info-item">
                            <span class="label">First Name</span>
                            <span class="value">
                                {{ $college_data['first_name'] ?? '' }}
                            </span>
                        </div>

                        <div class="info-item">
                            <span class="label">Last Name</span>
                            <span class="value">
                                {{ $college_data['last_name'] ?? '' }}
                            </span>
                        </div>

                        <div class="info-item">
                            <span class="label">Gender</span>
                            <span class="value">
                                {{ $college_data['gender'] ?? '' }}
                            </span>
                        </div>

                        <div class="info-item">
                            <span class="label">Date of Birth</span>
                            <span class="value">
                                {{ $college_data['dob'] ?? '' }}
                            </span>
                        </div>

                        <div class="info-item">
                            <span class="label">State</span>
                            <span class="value">
                                {{ $college_data['state'] ?? '' }}
                            </span>
                        </div>

                        <div class="info-item full-width">
                            <span class="label">Address</span>
                            <span class="value">
                                {{ $college_data['address'] ?? '' }}
                            </span>
                        </div>

                    </div>

                </div>


                <!-- Academic Information -->
                <div class="section">

                    <div class="section-heading">
                        <h2>Academic Information</h2>
                    </div>

                    <div class="info-grid">

                        <div class="info-item">
                            <span class="label">Class</span>
                            <span class="value">
                                {{ $college_data['class'] ?? '' }}
                            </span>
                        </div>

                        <div class="info-item">
                            <span class="label">Department</span>
                            <span class="value">
                                {{ $college_data['department'] ?? '' }}
                            </span>
                        </div>

                        <div class="info-item percentage">
                            <span class="label">Madhyamik Percentage</span>
                            <span class="value">
                                {{ $college_data['madhyamik_percentage'] ?? '' }}%
                            </span>
                        </div>

                        <div class="info-item percentage">
                            <span class="label">Higher Secondary Percentage</span>
                            <span class="value">
                                {{ $college_data['higher_secondary_percentage'] ?? '' }}%
                            </span>
                        </div>

                    </div>

                </div>


                <!-- Government ID -->
                <div class="section">

                    <div class="section-heading">
                        <h2>Government ID Information</h2>
                    </div>

                    <div class="info-grid">

                        <div class="info-item">
                            <span class="label">Government ID Type</span>
                            <span class="value">
                                {{ $college_data['govt_id_type'] ?? '' }}
                            </span>
                        </div>

                        <div class="info-item">
                            <span class="label">Government ID Number</span>
                            <span class="value">
                                {{ $college_data['govt_id_number'] ?? '' }}
                            </span>
                        </div>

                    </div>

                </div>


                <!-- Contact Information -->
                <div class="section">

                    <div class="section-heading">
                        <h2>Contact Information</h2>
                    </div>

                    <div class="info-grid">

                        <div class="info-item">
                            <span class="label">Phone</span>
                            <span class="value">
                                {{ $college_data['phone'] ?? '' }}
                            </span>
                        </div>

                        <div class="info-item">
                            <span class="label">Email</span>
                            <span class="value">
                                {{ $college_data['email'] ?? '' }}
                            </span>
                        </div>

                    </div>

                </div>


                <!-- Password -->
                <div class="section">

                    <div class="section-heading">
                        <h2>Account Information</h2>
                    </div>

                    <div class="info-grid">

                        <div class="info-item">
                            <span class="label">Password</span>
                            <span class="value">
                                ********
                            </span>
                        </div>

                    </div>

                </div>


                <!-- Final Submit -->
                <div class="submit-area">

                    <p>
                        Please verify all the information before submitting your registration.
                    </p>

                    <form action="{{ route('student.register.final') }}" method="POST">

                        @csrf

                        <button type="submit" class="submit-button">
                            ✓ &nbsp; Final Submit
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>

</html>