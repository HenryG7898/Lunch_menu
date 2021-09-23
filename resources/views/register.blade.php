@extends('layout.app')
@section('content')
<div class="bg-black min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-center">Sign up</h1>
            <form action="{{url('register')}}" method="post">
                @csrf
            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="fname"
                placeholder="First Name" />
            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="lname"
                placeholder="Last Name" />
            <select id="gender" name="gender" class="block border border-grey-light w-full p-3 rounded mb-4">
                <option selected></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="email"
                placeholder="Email" />

            <input
                type="password"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="password"
                placeholder="Password" />
            <input
                type="password"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="confirm_password"
                placeholder="Confirm Password" />

            <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Sign Up</button>
            </form>
            <div class="text-center text-sm text-grey-dark mt-4">
                By signing up, you agree to the
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Terms of Service
                </a> and
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Privacy Policy
                </a>
            </div>
        </div>

        <div class="text-white mt-6">
            Already have an account?
            <a class="no-underline border-b border-blue text-blue" href="../login/">
                Log in
            </a>.
        </div>
    </div>
</div>
@endsection
