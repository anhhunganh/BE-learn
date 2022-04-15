<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <h1>Đăng kí</h1>
        <form method="post" action="./process.php">
            
        <!-- Name -->
        <div id="form_name">
            <div class="name">Nhập Họ</div>
            <input type="text" name="surname" id="input_surname">
            <div class="name">Nhập Tên</div>
            <input type="text" name="last_name" id="input_last_name">
        </div>

        <!-- birthday -->
        <div id="form_birthday">
            <div class="name">Ngày sinh</div>
            <input type="date" name="birthday" id="input_birthday">
        </div>

        <!-- Gender -->
        <div id="form_gender">
            <div class="name">Giới tính</div>
            <input type="radio" name="gender" value="0">Nam
            <input type="radio" name="gender" value="1">Nữ
            <input type="radio" name="gender" value="2">Khác
        </div>

        <!-- Address -->
        <div id="form_address">
            <div class="name">Địa chỉ</div>
            <textarea id="input_address" name="address" cols="30" rows="3"></textarea>
        </div>

        <!-- hobby -->
        <div id="form_hobby">
            <div class="name">Sở thích</div>
            <select name="select_hobby" class="" id="select_hobby">
                <option value="1">Chơi game</option>
                <option value="2">Nghe nhạc</option>
                <option value="3">Xem Phim</option>
            </select>
        </div>
        
        <!-- Email -->
            <div id="form__email">
                <div class="name">Email</div>
                <input type="email" name="email" id="email_input" placeholder="example@email.com">
            </div>

        <!-- Password -->
        <div id="form_pass">
            <div class="name">Mật khẩu</div>
            <input type="password" name="password" id="input_password">
        </div>

        <!-- Button -->
        <div id="form_btn">
            <button onclick="return dang_ki()" onkeypress="return searchKeyPress(event)">Đăng kí</button>
        </div>
        </form>
    </div>
</body>

<script>

    // Ấn Enter để gửi form
    function searchKeyPress(e)
        {
            e = e || window.event;
            if (e.keyCode == 13)
            {
                document.getElementById('enter').click();
                return false;
            }
            return true;
    }

    // Validate form

    function dang_ki(){
        let check_error = false;

        // Check Họ
        let check_surname = document.getElementById('input_surname').value;
        if(check_surname.length === 0) {
            alert('Bạn chưa nhập Họ');
            check_error = true;
        }else {
            let regex_surname = /^[A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹ]*(?:[ ][A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹ]*)*$/;

            if(regex_surname.test(check_surname) == false) {
                alert('Họ nên bắt đầu bằng chữ in hoa!');
                check_error = true;
            }
        }

        // Check Tên
        let check_last_name = document.getElementById('input_last_name').value;
        if(check_last_name.length === 0) {
            alert('Bạn chưa nhập Tên');
            check_error = true;
        }else {
            let regex_surname = /^[A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹ]*(?:[ ][A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹ]*)*$/;

            if(regex_surname.test(check_last_name) == false) {
                alert('Tên nên bắt đầu bằng chữ in hoa!');
                check_error = true;
            }
        }

        // Check Ngày sinh
        let check_birthday = document.getElementById('input_birthday').value;
        if(check_birthday.length === 0) {
            alert ('Bạn chưa nhập ngày sinh');
            check_error = true;
        }

        // Check gender
        let check_gender_arr = document.getElementsByName('gender');
        let check_gender = false;

        for(let i = 0; i < check_gender_arr.length; i++){
            if(check_gender_arr[i].checked) {
                check_gender = true;
            }
        }
        if(check_gender == false){
            alert ('Bạn chưa nhập giới tính');
            check_error = true;
        }

        // Check Địa chỉ
        let check_address = document.getElementById('input_address').value;
        if(check_address.length === 0){
            alert ('Bạn chưa nhập địa chỉ');
            check_error = true;
        }

        // check sở thích


        // Check Email
        let check_email = document.getElementById('email_input').value;
        if(check_email.length === 0){
            alert ('Bạn chưa nhập địa chỉ Email');
            check_error = true;
        }

        // Check Password
        let check_pass = document.getElementById('input_password').value;
        if(check_pass.length === 0){
            alert ('Mật khẩu không được đêr trống');
            check_error = true;
        }else if(check_pass.length < 8){
            alert ('Độ dài mật khẩu phải lớn hơn 8 ký tự');
            check_error = true;
        }

        if(check_error){
            return false;
        }

    }
</script>
</html>