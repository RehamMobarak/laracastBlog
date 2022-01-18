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
                    <input type="text" name="email">
                    <br>

                    Password
                    <input type="text" name="password">


                    <button type="submit" value="submit">submit </button>

                </form>

        </main>
    </section>
</x-layout>
