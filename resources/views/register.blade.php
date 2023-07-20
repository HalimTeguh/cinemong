<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Cinemong | Sign Up</title>
        <style type="text/tailwindcss">
            * {
                /* border: red 1px solid; */
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
    <body style="background-color: #001C30;">

        <table>
            <tr >
                <td><img  class="mr-36 h-screen" src="{{ mix('/resources/img/img_register.png') }}" alt="" style="max-width: 105%;"></td>
                <td class="align-middle px-32">
                    <div class="mx-40 h-14 -mt-80 rounded-3xl border-4 border-cyan-300 text-cyan-300 ">
                        <h1 class="text-3xl  text-center m-1"><span class="display: inline-block; vertical-align: middle; line-height: normal;">Sign Up</span></h1>
                    </div>
                    <div class="mx-40 h-14 mt-10">
                        <form action="/signin" method="post">
                            @csrf
                            <label class="text-xl text-white" for="username">Username</label><br>
                            <input class="text-xl mb-2 px-3 py-2 text-white w-full rounded-lg border-4 border-cyan-300 bg-transparent @error('username') is-invalid @enderror " type="text" name="username" id="username" placeholder="your username" value="{{ old('username') }}">
                            @error('username')
                            <div class="invalid-feedback text-red-500 font-medium mb-1">
                                {{ $message }}
                            </div>
                            @enderror

                            <label class="text-xl text-white" for="name">Full Name</label><br>
                            <input class="text-xl mb-2 px-3 py-2 text-white w-full rounded-lg border-4 border-cyan-300 bg-transparent @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="your name" value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback text-red-500 font-medium mb-1">
                                {{ $message }}
                            </div>
                            @enderror

                            <label class="text-xl text-white" for="birth">Birth Date</label><br>
                            <input class="text-xl mb-2 px-3 py-2 text-white w-full rounded-lg border-4 border-cyan-300 bg-transparent @error('birth') is-invalid @enderror" type="date" name="birth" id="birth" placeholder="your birth date" value="{{ old('birth') }}" style="color-scheme: dark;" >
                            @error('birth')
                            <div class="invalid-feedback text-red-500 font-medium mb-1">
                                {{ $message }}
                            </div>
                            @enderror
                            
                            <label class="text-xl text-white" for="password">Password</label><br>
                            <input class="text-xl mb-2 px-3 py-2 text-white w-full rounded-lg border-4 border-cyan-300 bg-transparent @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="your password" style="color-scheme: dark;" >
                            @error('password')
                            <div class="invalid-feedback text-red-500 font-medium mb-1">
                                {{ $message }}
                            </div>
                            @enderror

                            <label class="text-xl text-white" for="password">Confirm Password</label><br>
                            <input class="text-xl mb-2 px-3 py-2 text-white w-full rounded-lg border-4 border-cyan-300 bg-transparent @error('confirm') is-invalid @enderror" type="password" name="confirm" id="confirm" placeholder="Confirm password" style="color-scheme: dark;" >
                            @error('confirm')
                            <div class="invalid-feedback text-red-500 font-medium mb-1">
                                {{ $message }}
                            </div>
                            @enderror

                            <input class="text-xl mb-2 px-3 py-2 text-white w-full rounded-lg border-4 border-cyan-300 bg-transparent @error('confirm') is-invalid @enderror" type="hidden" name="level" id="level" value="2" >

                            <div class="text-xl font-semibold w-44 center h-11 my-5 m-auto align-text-bottom border-4 border-cyan-300 text-cyan-300 hover:bg-cyan-300 hover:text-blue-950 text-center rounded-md">
                                <input class="pt-1" type="submit" value="Register">
                            </div>
                            <hr>
                            <div class="text-center p-2 text-white">
                                <h3 class="text-lg">Already have an account?  <a href="/login" class="text-cyan-300 hover:underline pl-1"> Sign in</a></h3>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    
    </body>
</html>
