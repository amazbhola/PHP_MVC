<!-- app/views/tender/create.php -->


<div class="min-h-screen bg-gray-100 py-10">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8">

        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
            Tender Entry Form
        </h2>

        <form action="/tender/store" method="POST" class="space-y-6">

            <!-- Tender Number -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Tender Number
                </label>

                <input 
                    type="text"
                    name="tender_number"
                    placeholder="Enter tender number"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Description
                </label>

                <textarea 
                    name="description"
                    rows="4"
                    placeholder="Enter tender description"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                ></textarea>
            </div>

            <!-- Last Selling Date -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Last Selling Date
                </label>

                <input 
                    type="date"
                    name="lastsalling_date"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- Document Price -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Document Price
                </label>

                <input 
                    type="number"
                    name="document_price"
                    placeholder="Enter document price"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- Tender Security -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Tender Security
                </label>

                <input 
                    type="text"
                    name="tender_secutity"
                    placeholder="Enter tender security amount"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- Methods -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Method
                </label>

                <select 
                    name="methods"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
                    <option value="">Select Method</option>
                    <option value="OTM">OTM</option>
                    <option value="LTM">LTM</option>
                    <option value="RFQ">RFQ</option>
                    <option value="DPM">DPM</option>
                </select>
            </div>

            <!-- Department -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Department
                </label>

                <select 
                    name="department_id"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
                    <option value="">Select Department</option>
                   <?php 
                    if(!empty($departments)):
                         foreach($departments as $department): ?>
                            <option value="<?= $department['id']; ?>">
                                <?= $department['name']; ?>
                            </option>
                    <?php endforeach; ?>
                    <?php endif; ?>

                </select>
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button 
                    type="submit"
                    class="w-full bg-gray-800 hover:bg-gray-900 text-white font-bold py-3 rounded-lg transition duration-300"
                >
                    Save Tender
                </button>
            </div>

        </form>

    </div>
</div>