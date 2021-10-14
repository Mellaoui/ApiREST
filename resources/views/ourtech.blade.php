<x-guest-layout>

    <section class="text-gray-600 body-font">
        <div class="container flex flex-col px-5 py-24 mx-auto space-y-8">
            <div class="flex flex-col flex-wrap items-center w-full mb-20 text-center">
                <h1 class="mb-2 text-2xl font-medium text-gray-200 sm:text-3xl title-font">The best work come from the heart!</h1>
                <p class="w-full leading-relaxed text-gray-400 lg:w-1/2">Here is a list of our latest work and products.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 cursor-pointer xl:w-1/3 md:w-1/2">
                    <div class="overflow-hidden transition duration-75 border-gray-200 rounded hover:shadow-xl">
                        <img class="w-full" src="img/Doctor.png" alt="Work">
                        <div class="px-6 py-4">
                            <div class="mb-2 text-xl font-bold text-gray-200">Doctors Dashbaord</div>
                            <p class="text-base text-gray-400">
                                A place where Doctors can follow-up with patients from anywhere.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#Laravel</span>
                            <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#Vue Js </span>
                            <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#Tailwind css</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 xl:w-1/3 md:w-1/2">
                    <div class="overflow-hidden transition duration-75 border-gray-200 rounded hover:shadow-xl">
                        <img class="w-full" src="img/ecommerce.png" alt="Work">
                        <div class="px-6 py-2">
                            <div class="mb-2 text-xl font-bold text-gray-200">ecommerce website for businesses</div>
                            <p class="text-base text-gray-400">
                                We help businesses create thier ecommerce websites.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#woocommerce</span>
                            <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#shopify</span>
                            <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#magento</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 xl:w-1/3 md:w-1/2">
                    <div class="overflow-hidden transition duration-75 border-gray-200 rounded hover:shadow-xl">
                        <img class="w-full" src="img/ecommerce.png" alt="Work">
                        <div class="px-6 py-2">
                            <div class="mb-2 text-xl font-bold text-gray-200">Web design / Landing Pages </div>
                            <p class="text-base text-gray-400">
                                We help businesses to create thier Landing Pages that converts visitors to clients.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#Figma</span>
                            <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#Sketch</span>
                            <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#Adobe XD</span>
                        </div>
                    </div>
                </div>

            <a href="{{ route('landing') }}">
                <button class="flex px-8 py-2 mx-auto font-extrabold duration-300 ease-in-out transform rounded shadow hover:scale-110 button hover:underline">Back to Home</button>
            </a>
        </div>
    </section>

</x-guest-layout>
