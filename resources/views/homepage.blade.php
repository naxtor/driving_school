<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Driving School</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="bg-white">
        <!-- Header -->
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <h1 class="text-lg font-bold leading-6">Driving School</h1>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#schedules" class="text-sm font-semibold leading-6 text-gray-900">Schedules</a>

                    <a href="#packages" class="text-sm font-semibold leading-6 text-gray-900">Packages</a>

                    <a href="#trainers" class="text-sm font-semibold leading-6 text-gray-900">Trainers</a>

                    <a href="#vehicles" class="text-sm font-semibold leading-6 text-gray-900">Vehicles</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Contact</a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Driving School</span>
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#schedules"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Schedules</a>

                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Packages</a>

                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Trainers</a>

                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Vehiles</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- First section -->
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]"
                    viewBox="0 0 1155 678">
                    <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3"
                        d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                    <defs>
                        <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177"
                            y2="474.645" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9089FC" />
                            <stop offset="1" stop-color="#FF80B5" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">The Best Driving School in
                        Indonesia</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">We're providing services for anyone to learning
                        driving car, we have experienced teachers that ready to company you with the best price</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                            started</a>
                    </div>
                </div>
            </div>
            <div
                class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]"
                    viewBox="0 0 1155 678">
                    <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3"
                        d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                    <defs>
                        <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177"
                            y2="474.645" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9089FC" />
                            <stop offset="1" stop-color="#FF80B5" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

        </div>
        <!-- Schedules -->
        <div id="schedules" class="relative mt-20 pb-10">
            <div class="text-center">
                <h2 class="text-4xl font-bold">Schedules</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">To helping our customer find the best time to learn
                    driving,
                    here are the available schedules</p>
            </div>
            <div class="w-full grid grid-cols-4 mt-20 px-40 gap-x-20">
                @foreach ($schedules as $schedule)
                <div class="bg-white p-4 drop-shadow-lg rounded">
                    <p class="text-lg">{{ $schedule['day'] }}</p>
                    <p class="text-md py-4">{{ $schedule['hours'] }}</p>
                    <p class="text-sm text-gray-900">Duration {{ $schedule['duration'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Packages -->
        <div id="packages" class="relative mt-20 pb-10">
            <div class="text-center">
                <h2 class="text-4xl font-bold">Packages</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">We understand our customer needs, so we provide
                    packages based on their needs</p>
            </div>
            <div class="w-full grid grid-cols-3 mt-20 px-40 gap-x-20">
                @foreach ($packages as $package)
                <div class="bg-white p-4 border rounded-lg">
                    <p class="text-xl">{{ $package['name'] }}</p>
                    <p class="text-sm text-gray-900 py-2">{{ $package['description'] }}</p>
                    <p class="text-2xl text-gray-900">{{ $package['price'] }}</p>
                    <div class="mt-4">
                        <a href="#"
                            class="font-semibold text-white text-md bg-indigo-600 py-1 px-4 rounded mt-20">Choose</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Trainers -->
        <div id="trainers" class="relative mt-20 pb-10">
            <div class="text-center">
                <h2 class="text-4xl font-bold">Our Trainers</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">To succesful your learning journey, we only recruit
                    professional trainer that has years of experience</p>
            </div>
            <div class="w-full grid grid-cols-3 mt-20 px-40 gap-x-20">
                @foreach ($trainers as $trainer)
                <div>
                    <img src="{{$trainer['image']}}" alt="" class="rounded-lg w-full h-64 object-cover">
                    <p class="font-semibold text-md pt-8">{{ $trainer['name'] }}</p>
                    <p class="text-md text-gray-900">{{ $trainer['position'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Staffs -->
        <div id="staffs" class="relative mt-20 pb-10">
            <div class="text-center">
                <h2 class="text-4xl font-bold">Our Staffs</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Our founding father is really understand how to deliver
                    best value to customer and help them reach their goals</p>
            </div>
            <div class="w-full grid grid-cols-3 mt-20 px-40 gap-x-20">
                @foreach ($staffs as $staff)
                <div>
                    <img src="{{$staff['image']}}" alt="" class="rounded-lg w-full h-64 object-cover">
                    <p class="font-semibold text-md pt-8">{{ $staff['name'] }}</p>
                    <p class="text-md text-gray-900">{{ $staff['position'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Cars collection -->
        <div id="vehicles" class="relative mt-20 pb-10">
            <div class="text-center">
                <h2 class="text-4xl font-bold">Vehicles</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">To support students learning driving, we provide several
                    vehicles to use</p>
            </div>
            <div class="w-full grid grid-cols-3 mt-20 px-40 gap-x-20">
                @foreach ($vehicles as $vehicle)
                <div class="bg-white drop-shadow-lg rounded-lg">
                    <img src="{{$vehicle['image']}}" alt="" class="rounded-lg w-full h-40 object-cover">
                    <div class="px-4 py-6">
                        <p class="font-semibold text-md">{{ $vehicle['name'] }}</p>
                        <p class="text-md text-gray-900">{{ $vehicle['type'] }} Transmission</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Footer -->
        <div class="bg-black py-10 px-4 mt-20 text-center">
            <p class="text-white text-md font-semibold">Address</p>
            <div class="w-full flex justify-center">
                <p class="text-white text-sm pt-2 max-w-sm">Jl. Raya Kb. Jeruk No.27, RT.1/RW.9, Kb. Jeruk,
                    Kec.
                    Kb. Jeruk,
                    Kota
                    Jakarta
                    Barat, Daerah Khusus Ibukota Jakarta 11530</p>
            </div>
        </div>
    </div>
    </div>

</body>

</html>