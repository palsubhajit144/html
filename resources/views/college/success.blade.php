<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration Successful</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #eef4ff, #f8fafc);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #1f2937;
        }

        .success-container {
            width: 100%;
            max-width: 600px;
            background: #ffffff;
            border-radius: 18px;
            padding: 45px 40px;
            text-align: center;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.10);
            border: 1px solid #e5e7eb;
        }

        /* Success Icon */
        .success-icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #dcfce7;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            font-weight: bold;
            border: 5px solid #bbf7d0;
        }

        .success-container h2 {
            margin: 0;
            color: #166534;
            font-size: 28px;
            font-weight: 700;
        }

        .success-message {
            margin: 12px 0 30px;
            color: #64748b;
            font-size: 15px;
        }

        /* Student Details */
        .student-details {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 8px 20px;
            text-align: left;
        }

        .student-details p {
            margin: 0;
            padding: 18px 5px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 16px;
        }

        .student-details p:last-child {
            border-bottom: none;
        }

        .student-details strong {
            display: inline-block;
            width: 130px;
            color: #475569;
        }

        .student-details p:first-child {
            color: #1d4ed8;
        }

        .student-details p:first-child strong {
            color: #475569;
        }

        /* Student ID */
        .student-id {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #1d4ed8;
        }

        /* Footer message */
        .footer-message {
            margin-top: 25px;
            color: #64748b;
            font-size: 13px;
        }

        /* Mobile */
        @media (max-width: 600px) {

            body {
                padding: 15px;
            }

            .success-container {
                padding: 35px 20px;
            }

            .success-container h2 {
                font-size: 24px;
            }

            .student-details {
                padding: 5px 15px;
            }

            .student-details strong {
                display: block;
                width: auto;
                margin-bottom: 5px;
                font-size: 13px;
                text-transform: uppercase;
                color: #64748b;
            }

            .student-details p {
                padding: 15px 5px;
            }
        }
    </style>
</head>

<body>

    <div class="success-container">

        <!-- Success Icon -->
        <div class="success-icon">
            ✓
        </div>

        <h2>Registration Successful!</h2>

        <p class="success-message">
            {{ session('success') }}
        </p>

        <div class="student-details">

            <p>
                <strong>Student ID:</strong>
                <span class="student-id">
                    {{ session('student_id') }}
                </span>
            </p>

            <p>
                <strong>Student Name:</strong>
                {{ session('student_name') }}
            </p>

        </div>

        <p class="footer-message">
            Please keep your Student ID for future reference.
        </p>

    </div>

</body>

</html>