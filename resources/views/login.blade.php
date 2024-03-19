<x-layout>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <h1 class="text-red-600 text-center text-4xl">Log In</h1>
    <form action="/login" method="POST">
        @csrf
        <div>
            <x-input titulo="Email" type="text" name="email" />
        </div>
        <div>
            <x-input titulo="Password" type="password" name="password"/>
        </div>
        <button class="border border-red-600 bg-purple-600 text-black-0  font-semibold px-3 py-1 rounded-lg" type="submit">Log In</button>
    </form>
</x-layout>
