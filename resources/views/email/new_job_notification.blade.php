<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klusmelder</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            color: #333;
            font-weight: bold;
        }

        .content {
            margin-bottom: 30px;
        }

        .content p {
            color: #666;
            margin-bottom: 15px;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            color: #999;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Job Notification</h1>
        </div>
        <div class="content">
            <p>Hello Freelancer,</p>
            <p>We are excited to inform you that a new job opportunity is available!</p>

            <p>Title: {{ $job->title }}</p>
            <p>Budget: {{ $job->budget }}</p>
            <p>Start Date: {{ $job->start_date }}</p>
            <p>End Date: {{ $job->end_date }}</p>
            <p>Location: {{ $job->location }}</p>
            <p>Details: {{ $job->description }}</p>
            <p>If you are interested, please click the button below to apply:</p>
            <a href="#" class="btn" style="color: #fff;">Apply Now</a>
        </div>
        <div class="footer">
            <p>Best Regards,<br>Klusmelder</p>
        </div>
    </div>
</body>

</html>
