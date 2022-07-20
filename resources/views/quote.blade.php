
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quote</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" viewBox="0 0 640 640" enable-background="new 0 0 640 640" xml:space="preserve"> McCdama
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="5.000000" d="M341.000000,376.000000 
                    	C336.052704,378.877441 330.734253,380.789490 325.010956,379.927246 
                    	C315.436005,378.484680 306.980286,382.890686 298.019623,384.602631 
                    	C297.191467,384.760864 296.333008,384.831787 295.500000,385.000000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.000000"
                    	d="
                    M418.000000,455.500000 
                    	C424.490509,456.879547 431.147308,457.403717 437.510437,459.467865 
                    	C440.753937,460.520050 442.869720,462.266327 444.647339,465.416870 
                    	C448.022125,471.398254 452.202545,476.924500 454.500000,483.500000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="5.000000"
                    	d="
                    M389.000000,422.000000 
                    	C388.666656,422.666656 388.357788,423.346924 387.996185,423.997864 
                    	C384.624512,430.068054 382.115021,436.185669 383.363861,443.523163 
                    	C384.137604,448.069427 382.482086,452.881592 384.000000,457.500000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="8.000000"
                    	d="
                    M298.000000,254.500000 
                    	C293.933289,254.967194 289.904419,254.199768 286.025177,253.380722 
                    	C280.205444,252.151978 274.442017,251.246552 268.500000,251.750000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.000000"
                    	d="
                    M298.000000,293.500000 
                    	C288.762970,292.709961 279.671417,294.586975 270.500000,295.000000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="10.000000"
                    	d="
                    M300.500000,280.000000 
                    	C291.333344,280.833344 282.166656,281.666687 273.000000,282.500000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="11.000000"
                    	d="
                    M337.000000,262.500000 
                    	C328.000000,262.500000 319.000000,262.500000 310.000000,262.500000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="14.000000"
                    	d="
                    M302.000000,270.499969 
                    	C292.833344,270.666626 283.666656,270.833313 274.500000,270.999969 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="8.000000"
                    	d="
                    M248.000000,367.000000 
                    	C239.116852,367.677185 230.263672,368.598602 221.500000,370.250000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="13.000000"
                    	d="
                    M276.000000,182.499985 
                    	C275.166656,183.333313 274.257019,184.103958 273.512329,185.010117 
                    	C268.509155,191.097900 269.036163,195.517273 276.058319,199.906708 
                    	C281.091797,203.053101 286.666656,205.333328 292.000000,208.000000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.000000"
                    	d="
                    M294.500000,154.500000 
                    	C296.193512,161.006500 294.788727,167.275040 292.980927,173.494461 
                    	C292.437622,175.363647 291.666687,177.166672 291.000000,179.000000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="8.000000"
                    	d="
                    M284.000000,407.500000 
                    	C292.170319,413.459747 293.627350,421.704865 292.000000,431.000000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="10.000000"
                    	d="
                    M274.500000,150.500000 
                    	C274.941040,155.138138 274.579620,159.873596 279.930634,162.634430 
                    	C283.080627,164.259659 283.522430,168.091080 284.038788,171.494110 
                    	C284.321930,173.360352 285.000000,175.166672 285.500000,177.000000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.000000"
                    	d="
                    M263.000000,407.000000 
                    	C261.163269,412.718750 261.504547,418.624207 261.500000,424.500000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.000000"
                    	d="
                    M295.000000,421.500000 
                    	C296.093933,425.461365 295.204926,429.505341 295.500000,433.500000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="5.000000"
                    	d="
                    M229.500000,359.000000 
                    	C225.885651,359.883636 222.302490,360.996033 218.500000,360.500000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.000000"
                    	d="
                    M435.000000,489.500000 
                    	C437.090057,491.384521 437.238739,493.962341 437.500000,496.500000 
                    "/>
                    <path fill="none" opacity="1.000000" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.000000"
                    	d="
                    M312.000000,383.000000 
                    	C311.597168,384.930511 310.011932,385.678619 308.500000,386.500000 
                    "/>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-12">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">Today's Quote</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    {{$queryList}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
