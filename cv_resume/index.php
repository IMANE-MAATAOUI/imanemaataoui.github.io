<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? 'Imane Maataoui';
    $email = $_POST['email'] ?? 'maataouiimane24@gmail.com';
    echo "<p style='background:#d4edda;padding:10px;border:1px solid #c3e6cb;'>
    <b>$name</b>, your resume was submitted successfully using email: <b>$email</b>.</p><hr>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f0f0f0;
        }

        h1 {
            color: #ed4cf2;
            text-align: center;
            text-transform: uppercase;
            border-bottom: 2px solid #e238eb;
            padding-bottom: 10px;
        }

        img {
            border-radius: 50%;
            border: 3px solid #e675d7;
            height: 150px;
        }

        h2 {
            color: #d869c9;
            margin-top: 25px;
            padding-left: 10px;
            border-left: 4px solid #d869c9;
        }

        p, b, i {
            margin: 10px 0;
        }

        b {
            color: rgb(197, 71, 176);
        }

        i {
            color: #000000;
        }

        a {
            color: #c927a0;
            text-decoration: none;
            padding: 4px 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        hr {
            border: 0;
            height: 1px;
            background: #e747b7;
            margin: 30px 0;
        }

        ul {
            padding-left: 30px;
            list-style-type: none;
        }

        ul li {
            margin: 8px 0;
            padding-left: 20px;
        }

        ul li::marker {
            content: "▹";
            color: #c731ae;
        }

        button {
            background-color: #c927a0;
            color: white;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
        }

        button:hover {
            background-color: #a01c81;
        }
    </style>
</head>
<body>

    <h1>Curriculum Vitae</h1>
    <img src="img.jpg" alt="My Image" width="20%">
    <hr>

    <h2>Personal Information:</h2>
    <p><b>Full Name:</b> <i>Imane Maataoui</i></p>
    <p><b>Student Number:</b> <i>2310213577</i></p>
    <p><b>Date of Birth:</b> <i>18/08/2004</i></p>
    <p><b>Phone Number:</b> <a href="tel:+905375652091"><i>+90 537-565 20 91</i></a></p>
    <p><b>Email:</b> <a href="mailto:maataouiimane24@gmail.com"><i>maataouiimane24@gmail.com</i></a></p>
    <hr>

    <h2>Education:</h2>
    <p><b>University Name:</b> <i>Karabük Üniversitesi</i></p>
    <p><b>Department:</b> <i>Computer Engineering</i></p>
    <p><b>Education Level:</b> <i>2<sup>nd</sup> year</i></p>
    <hr>

    <h2>Skills:</h2>
    <p><b>Programming Languages:</b> <i>C/C++, HTML, MySQL</i></p>
    <p><b>Soft Skills:</b> <i>Teamwork, Leadership, Public Speaking</i></p>
    <hr>

    <h2>Certificates:</h2>
    <ul>
        <li><i>Certificate in Embroidery - Fall Semester 2024</i></li>
        <li><i>Leadership and Organizational Skills - Spring Semester 2024</i></li>
        <li><i>Certificate in Reading & Summarization - Fall Semester 2018</i></li>
    </ul>
    <hr>

    <h2>Languages:</h2>
    <p><b>Arabic:</b> Native</p>
    <p><b>French:</b> Intermediate</p>
    <p><b>English:</b> Upper Intermediate</p>
    <p><b>Turkish:</b> Elementary</p>
    <hr>

    <h2>Submission Options:</h2>
    <p><b>Official Microsoft Form (due May 20, 2025):</b></p>
    <button onclick="confirmSubmission()">Open Microsoft Form</button>

    <form method="POST">
        <input type="hidden" name="name" value="Imane Maataoui">
        <input type="hidden" name="email" value="maataouiimane24@gmail.com">
        <button type="submit">Submit Resume via PHP</button>
    </form>

    <script>
        function confirmSubmission() {
            const ask = confirm("Do you want to open the Microsoft Form to submit?");
            if (ask) {
                window.open("https://forms.office.com/r/zpa1wjappr", "_blank");
            }
        }
    </script>

</body>
</html>