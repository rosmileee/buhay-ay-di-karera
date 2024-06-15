<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="/css/bookingform.css">
</head>
<body>
    <div class="container">
        <h1>Booking Form</h1>
        <form action="{{ route('booking.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="checkin">Check-In Date:</label>
                <input type="date" id="checkin" name="checkin" required>
            </div>
            <div class="form-group">
                <label for="checkout">Check-Out Date:</label>
                <input type="date" id="checkout" name="checkout" required>
            </div>
            <div class="form-group">
                <label for="room">Room Type:</label>
                <select id="room" name="room" required>
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="suite">Suite</option>
                </select>
            </div>
            <div class="form-group">
                <label for="adults">Number of Adults:</label>
                <input type="number" id="adults" name="adults" min="1" required>
            </div>
            <div class="form-group">
                <label for="children">Number of Children:</label>
                <input type="number" id="children" name="children" min="0" required>
            </div>
            <button type="submit">Book Now</button>
        </form>
    </div>
</body>
</html>
