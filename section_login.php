
    <section class="breadcrumbs-custom">
        <div style="background:#044A80;height:150px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <h2 class="breadcrumbs-custom-title" style="margin-top:40px;color:#D5D4D3;">Sign In</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-aside">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Sign In</li>
                </ul>
            </div>
        </div>
    </section>


    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            
                <div class="mt-12 flex flex-col items-center">

                    <h1 class="text-2xl xl:text-3xl font-extrabold"> QAS Sign In </h1> <br>

                    <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
                        
                        <div class="form-group">
                            <span>Email</span>
                            <input class="form-field" type="email" placeholder="Email" name='email' style='width:300px;'>
                            <!--<span>@gmail.com</span>-->
                        </div>

                        <div class="form-group">
                            <span>Password</span>
                            <input class="form-field" type="password" placeholder="Password" name='password' style='width:300px;'>
                        </div>

                        <input type='submit' name='login' value='Login' class="form-field" style='background:green;color:white;'> 
     
                    </form>
                </div>
                <p class="mt-6 text-xs text-gray-600 text-center"> Don't have account <a href="registration.php" class="border-b border-gray-500 border-dotted"> Register New Account </a> </p>
                </div>
                <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
                    <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat" style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');" >
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php
    // do process here
?>