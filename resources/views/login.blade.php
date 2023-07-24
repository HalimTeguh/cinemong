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
        
        @error('loginError')
                    <div class="absolute top-0 left-0 right-0 bg-red-100 border border-red-400 text-red-700  px-4 py-3 rounded text-center" role="alert">
                        <strong class="font-bold"> {{ $message }} </strong>
                    </div>
        @enderror

        <table>
            <tr>
                <td><img  class="mr-36 h-screen" src="{{ mix('/resources/img/img_login.png') }}" alt=""></td>
                <td class="align-middle px-32">

                    

                    <div class="mx-auto h-14 -mt-48 rounded-3xl border-4 border-cyan-300 text-cyan-300 ">
                        <h1 class="text-3xl  text-center m-1"><span class="display: inline-block; vertical-align: middle; line-height: normal;">Sign In</span></h1>
                    </div>
                    <div class=" h-14 mt-10">
                        <form action="/signin" method="post">
                            @csrf
                            <label class="text-xl text-white" for="username">Username</label><br>
                            <input class="text-xl mb-2 px-3 py-2 text-white w-full rounded-lg border-4 border-cyan-300 bg-transparent @error('username') is-invalid @enderror" type="text" name="username" id="username" placeholder="your username" value="{{ old('username') }}" required>
                            @error('username')
                            <div class="invalid-feedback text-red-500 font-medium mb-1">
                                {{ $message }}
                            </div>
                            @enderror

                            <label class="text-xl text-white" for="password">Password</label><br>
                            <input class="text-xl mb-2 px-3 py-2 text-white w-full rounded-lg border-4 border-cyan-300 bg-transparent @error('username') is-invalid @enderror" type="password" name="password" id="password" placeholder="your password" style="color-scheme: dark;" value="{{ old('password') }}" required>
                            @error('password')
                            <div class="invalid-feedback text-red-500 font-medium mb-1">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="text-white text-end hover:underline">
                                <a href="">Forgot Password</a>
                            </div>

                            <div class="text-xl font-semibold w-44 center h-11 my-5 m-auto align-text-bottom border-4 border-cyan-300 text-cyan-300 hover:bg-cyan-300 hover:text-blue-950 text-center rounded-md">
                                <input class="pt-1" type="submit" value="Login">
                            </div>
                            <hr>
                            <div class="text-center p-2 text-white">
                                <h3 class="text-lg">Haven't an account?  <a href="/signup" class="text-cyan-300 hover:underline pl-1"> Sign up</a></h3>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    
    </body>
</html>
