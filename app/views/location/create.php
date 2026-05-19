<div class="min-h-screen bg-gray-100 py-10">

    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg">

        <h2 class="text-3xl font-bold mb-8">
            Create Location
        </h2>

        <form action="/location/store" method="POST">

            <div class="mb-5">

                <label class="block mb-2 font-semibold">
                    Name
                </label>

                <input type="text"
                       name="name"
                       class="w-full border border-gray-300 rounded-lg px-4 py-3">

            </div>

            <button type="submit"
                    class="bg-gray-800 text-white px-6 py-3 rounded-lg">
                Save Location
            </button>

        </form>

    </div>

</div>