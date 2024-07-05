
<!DOCTYPE html>


<head>
   
   
    <link rel="stylesheet" href="style.css">
    

    <title>Appointment Page</title>
</head>

<body>
    
<div class="container">
        <header>Create An Appointment</header>
    
        <form  method="post" action="insert.php">
            <div class="form first">
                <div class="details personal">
                    <div class="fields">
                        <div class="input-field">
            <label>Full Name</label>
            <input type="text" name="Name" placeholder="Enter your first name" required ><br><br>
                    </div>
            <div class="input-field">
            <label for="gender">Gender</label>
            <select name="gender"  required>
                <option disabled selected>Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            
            </select><br><br></div>
            <div class="input-field">
            <label>Contact</label>
            <input type="number" name="contact" placeholder="Enter contact number" required><br><br>
        </div>
        <div class="input-field">
            <label>Date of Birth</label>
            <input type="date" name="dateofbirth" placeholder="Enter birth date" required><br><br>
        </div>
        <div class="input-field">
            <label>Email</label>
            <input type="email" name="email" placeholder="example@example.com" required><br><br>
        </div>
        <div class="input-field">
            <label for="procedure_type">Which procedure for?</label>
            <select name="ptype" required>
                <option disabled selected>Select Procedure Type</option>
                <option value="Initial Consultation">Initial Consultation</option>
                <option value="Follow-up Appointment">Follow-up Appointment</option>
                <option value="Routine Check-up">Routine Check-up</option>
                <option value="Surgical Procedure">Surgical Procedure</option>
            </select><br><br>
            </div>
            <div class="input-field">
            <label>Prefer Appointment Date & Time </label>
            <input type="datetime-local" name="appointment_datetime" placeholder="appointment date&time" required><br><br>
                </div>
            <button class="submit" type="submit" name="submit">
                <span class="btnText">Submit</span>
                   
            </button>
        </div>
            </div>
        </div>
    </div>
        </form>
        
    </div>

    <script src="script.js"></script>
</body>

</html>