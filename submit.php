<?php
// --- Database connection ---
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "techtrail2025";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// --- Collect form data ---
$fullname   = $_POST['fullname'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$college    = $_POST['college'];
$department = $_POST['department'];
$year       = $_POST['year'];
$topic      = $_POST['topic'];
$mode       = $_POST['mode'];
$comments   = $_POST['comments'];

// --- Insert data first ---
$sql = "INSERT INTO registrations (fullname, email, phone, college, department, year_of_study, topic, mode, comments)
        VALUES ('$fullname', '$email', '$phone', '$college', '$department', '$year', '$topic', '$mode', '$comments')";

if ($conn->query($sql) === TRUE) {

  // Auto-increment ID
  $last_id = $conn->insert_id;

  // Registration ID Format
  $reg_id = "TT2025-" . str_pad($last_id, 3, "0", STR_PAD_LEFT);

  // Update record with registration ID
  $conn->query("UPDATE registrations SET reg_id='$reg_id' WHERE id=$last_id");

} else {
  $status = "error";
  $errorMsg = $conn->error;
}

$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>Registration Successful</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      margin:0;
      padding:0;
      font-family:'Poppins',sans-serif;
      background: linear-gradient(135deg,#C8F8E5 0%,#FFE6D5 50%,#D9FBFF 100%);
      display:flex;
      justify-content:center;
      align-items:center;
      min-height:100vh;
      overflow-x:hidden;
    }

    /* Outer fade animation */
    @keyframes fadeIn {
      from { opacity:0; transform: translateY(25px) scale(.98); }
      to   { opacity:1; transform: translateY(0)     scale(1); }
    }

    .success-card {
      width:92%;
      max-width:420px;
      background: rgba(255,255,255,0.82);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius:20px;
      padding:35px 25px 40px;
      text-align:center;
      box-shadow:0 15px 35px rgba(0,0,0,0.10);
      animation: fadeIn .7s ease forwards;
      border:1px solid rgba(255,255,255,0.6);
    }

    .icon-circle {
      width:75px;
      height:75px;
      background:#28c76f;
      border-radius:50%;
      margin:0 auto 18px auto;
      display:flex;
      align-items:center;
      justify-content:center;
      box-shadow:0 10px 25px rgba(40,199,111,0.3);
      animation: pop .45s ease-out;
    }

    @keyframes pop {
      0% { transform:scale(0); opacity:0; }
      100% { transform:scale(1); opacity:1; }
    }

    .icon-circle span {
      color:white;
      font-size:40px;
      font-weight:700;
    }

    h2 {
      margin:10px 0 0;
      color:#04303b;
      font-size:24px;
      font-weight:700;
    }

    p {
      margin-top:12px;
      font-size:14px;
      color:#333;
      line-height:1.6;
    }

    .reg-box {
      margin-top:18px;
      padding:12px;
      background:#e9fff3;
      border-radius:12px;
      border:1px solid #c8f7dd;
      color:#0a7a3d;
      font-weight:600;
      font-size:15px;
      animation: fadeIn .9s ease;
    }

    .btn {
      margin-top:25px;
      display:inline-block;
      padding:12px 22px;
      background: linear-gradient(180deg,#009688,#00796b);
      color:white;
      border-radius:10px;
      text-decoration:none;
      font-weight:700;
      box-shadow:0 12px 25px rgba(0,150,136,0.25);
      transition:.2s ease;
    }

    .btn:hover {
      transform:scale(1.05);
      filter:brightness(.95);
    }

    @media (max-width:500px){
      .success-card { padding:28px 18px; }
      h2 { font-size:21px; }
    }
  </style>
</head>

<body>

  <div class="success-card">

    <div class="icon-circle">
      <span>✔</span>
    </div>

    <h2>Submission Successful!</h2>

    <p>
      Thank you for registering.<br>
      Your details have been submitted successfully.
    </p>

    <div class="reg-box">
      Registration ID: <strong><?= $reg_id ?></strong>
    </div>

    <a href="index.html" class="btn">Back to Home</a>

  </div>

</body>
</html>
