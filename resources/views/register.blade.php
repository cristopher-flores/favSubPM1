<x-layout>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <h1 class="text-4xl">Sign up</h1>
    <form action="/register" method="POST">
        @csrf
        <div class="my-3">
            <x-input titulo="Name" type="text" name="name"/>
        </div>
        <div class="my-3">
            <x-input titulo="Email" type="text" name="email"/>
        </div>
        <div class="my-3">
            <x-input titulo="Password" type="password" name="pasword"/>
        </div>
        <div class="my-3">
            <x-input titulo="Birthday" type="date" name="birthday"/>
        </div>
        <button  class="border border-red-600 bg-purple-600 text-black-0  font-semibold px-3 py-1 rounded-lg my-3"  type="submit">Submit</button>
    </form>
</x-layout>
