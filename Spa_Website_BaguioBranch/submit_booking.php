<?php 
    session_start();

    require 'config/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST['name'];
        $user_id = $_SESSION['user_id'] ?? 0;  
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $service = $_POST['service'];
        $date = $_POST['date'];
        $type = $_POST['type'];
        $price = 0;

        switch ($service) {
            case 'Aromatherapy Massage':   
                $price = 2000;
                break;
            case 'Hot Stone Massage':
                $price = 2500;
                break;
            case 'Ventosa':
                $price = 3500;
                break;
            default:
                $price = 0;
        }
        $_SESSION['price'] = $price;


        $stmt = $conn->prepare("INSERT INTO booking_info (name, user_id, phone, address, service_provided, date, preffered_type) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $adminStmt = $conn_admin->prepare("INSERT INTO booking_info (name, user_id, phone, address, service_provided, date, preffered_type) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("siissss", $fullname, $user_id, $phone, $address, $service, $date, $type);
        $adminStmt->bind_param("siissss", $fullname, $user_id, $phone, $address, $service, $date, $type);

        if ($stmt->execute() && $adminStmt->execute()) {
            $_SESSION['name'] = $fullname;
            $_SESSION['phone'] = $phone;
            $_SESSION['address'] = $address;
            $_SESSION['service'] = $service;
            $_SESSION['date'] = $date;
            $_SESSION['type'] = $type;

            header('Location: receipt.php');
            exit(); 
        } else {
    echo "<script>
        alert('Booking failed!\\nUser DB: " . $stmt->error . "\\nAdmin DB: " . $adminStmt->error . "');
    </script>";
}


        $stmt->close();
        $conn->close();

    }

?>