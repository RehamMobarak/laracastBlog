<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">

                <h1 class="text-center font-bold text-xl">Register!</h1>

                <form method="POST" action="/register" class="mt-10">
                    @csrf
                    Name
                    <input type="text" name="name">
                    <br>

                    Username
                    <input type="text" name="username">
                    <br>

                    Email
                    <input type="email" name="email">
                    <br>

                    Password
                    <input type="password" name="password">


                    <button type="submit" value="submit">submit </button>

                </form>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{$error }}</li>
                        @endforeach
                    </ul>
                @endif
        </main>
    </section>
</x-layout>
