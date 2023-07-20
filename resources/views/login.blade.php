<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Cinemong | Sign In</title>
        <style type="text/tailwindcss">
            * {
                /* border: red 1px solid; */
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
    <body style="background-color: #001C30;">

        <table>
            <tr>
                <td><img  class="mr-36 h-screen" src="{{ mix('/resources/img/img_login.png') }}" alt=""></td>
                <td class="align-middle px-32">
                    <div class="mx-auto h-14 -mt-48 rounded-3xl border-4 border-cyan-300 text-cyan-300 ">
                        <h1 class="text-3xl  text-center m-1"><span class="display: inline-block; vertical-align: middle; line-height: normal;">Sign In</span></h1>
                    </div>
                    <div class=" h-14 mt-10">
                        <form action="" method="post">
                            <label class="text-xl text-white" for="username">Username</label><br>
                            <input class="text-xl mb-2 px-3 py-2 text-white w-full rounded-lg border-4 border-cyan-300 bg-transparent" type="text" name="username" id="username" placeholder="your username" required>

                            <label class="text-xl text-white" for="password">Password</label><br>
                            <input class="text-xl mb-2 px-3 py-2 text-white w-full rounded-lg border-4 border-cyan-300 bg-transparent" type="password" name="password" id="password" placeholder="your password" style="color-scheme: dark;" required>

                            <div class="text-white text-end underline">
                                <a href="">Forgot Password</a>
                            </div>

                            <div class="text-xl font-bold w-36 center h-8 my-5 m-auto bg-cyan-300 text-center rounded-md" style=" color: #001C30;">
                                <input class="my-auto " type="submit" value="Login">
                            </div>
                            <hr>
                            <div class="text-center p-2 text-white">
                                <h3 class="text-lg">Haven't an account?  <a href="/signin" class="text-cyan-300 underline pl-1"> Sign up</a></h3>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    
    </body>
</html>