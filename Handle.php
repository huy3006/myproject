<?php
    class Handle{
            public function index()
            {
                $email= $_POST['email'];
                $password=$_POST['password'];
                //Kiểm tra rỗng
                if($email==''||$password=='')
                {
                    echo "Bạn chưa nhập email";
                }
                else
                {   
                    //Kiểm tra có phải định dạng gmail không
                    $pattern="/[\S]+@gmail.com/";
                    if(preg_match($pattern,$email)==true)
                    {
                        echo "Email: ".$email."<br></br>";
                        echo "Mật khẩu:".$password;
                       
                    }
                    else
                    {
                        echo "Bạn nhập chưa đúng định dạng email";
                    }
                    

                }
            }


    }
    $Handle=new Handle();
    $Handle->index();

?>