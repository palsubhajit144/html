<style>
    h2 {
        color: #0055ff;
        text-decoration: underline;
        }
    .name {
        font-weight: bold;
        margin: 2px;  
        display: flex;
        align-items: center;
        gap: 5px;      
        }

    .gender {
        display: flex;
        align-items: center;
        gap: 5px;
        }

    .gender-title {
        font-weight: bold;
        margin-right: 5px;
        }

</style>

<div>
    <h2>New Registration Form</h2>
    <div>
        <form action="/student/reg_data" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="name">
                <label for="first_name" >First Name:</label>
                <input type="text" name="first_name" placeholder="Enter Your First Name" id="first_name">
                
                <label for="last_name" style="margin-left: 5px;">Last Name:</label>
                <input type="text" name="last_name" placeholder="Enter Your Last Name" id="last_name">
            </div>
            <div class="gender">
                <label class="gender-title">Gender:</label>
                <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label>
            </div>

            <!-- <div>
                <label>Email</label>
                <input type="email" name="email">
            </div> -->

            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</div>