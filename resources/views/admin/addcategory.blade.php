@extends('layout.app')
@section('content')
    <div class=" h-screen flex justify-center items-center bg-black" style="margin-top: ">
        <form action="#" method="post" class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md">
            @csrf
            <p class="mb-5 text-3xl uppercase text-gray-600">Add Category</p>
            <input type="text" name="" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" autocomplete="off" placeholder="" required>
            <select name="" id="" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none">
                <option value=""></option>
            </select>
            <button  class="bg-purple-600 hover:bg-purple-900 text-white font-bold p-2 rounded w-80" type="submit"><span>Add</span></button>
        </form>
    </div>
@endsection
