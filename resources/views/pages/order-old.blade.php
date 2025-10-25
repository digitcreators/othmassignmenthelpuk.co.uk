@extends('layouts.web')
@section('title', 'Order Assignment Help UK - Fast & Quality Service')
@section('description', 'Order Assignment Help UK at affordable prices. Get professional help now. Contact info@assignmenthelpuk.co.uk or call +441158881209.')
@section('canonical', config('app.app_url') . Request::path())
@section('content')

    <style>
        .iti {
            width: 100%;
            margin-top: 8px
        }
        
    </style>

</div>

    <section class="opacity-90">

        <div class="container px-5 pt-3 pb-20  mx-auto">
             @if(session('error'))
                <div class="mx-auto lg:mx-8 ">
                    <p class="text-red-500 text-base">{{ session('error') }}</p>
                </div>
            @endif
            @if (session('success'))
                <div class="md:w-1/2 my-4 mx-auto bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                    role="alert">
                    <div class="flex">
                        <div class="py-1">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                <circle style="fill:#25AE88;" cx="25" cy="25" r="25" />
                                <polyline
                                    style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                    points="
                38,15 22,33 12,25 " />
                            </svg>
                        </div>
                        <div>
                            <p class="text-center font-bold">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="flex flex-col md:px-12 w-full pt-3">

                <form method="POST" id="order-form" enctype="multipart/form-data" action="{{ route('order.store') }}" class="pt-3">
                    @csrf
                    <div class="py-5 flex flex-col md:ml-auto w-full mt-10 md:mt-0 ">
                        <div class="flex flex-wrap ">
                            <div class=" px-1 mb-3 w-full md:w-1/2 lg:w-1/3 ">

                                <label class="font-medium text-white">Paper Topic:</label>
                                <input type="text" name="paper_topic"
                                    class="w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out "
                                    value="" placeholder="Paper Topic">
                                @error('paper_topic')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">

                                <label class="font-medium text-white">Paper Type:</label>
                                <select name="paper_type"
                                    class="w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none mt-2 py-3 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                    <option hidden="" value="0" disabled="" selected="">Paper Type</option>
                                    @foreach ($paper_types as $paper_type)
                                        <option {{ old('$paper_type') == $paper_type->id ? 'selected' : '' }}
                                            value="{{ $paper_type->name }}">{{ $paper_type->name }}</option>
                                    @endforeach
                                </select>
                                @error('paper_type')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">

                                <label class="font-medium text-white">Urgency:</label>
                                <select name="deadline" id="deadline"
                                    class="get-fare w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                    <option hidden="" value="0" disabled="" selected="">Deadline</option>
                                    @foreach ($deadlines as $deadline)
                                        <option {{ old('$deadline') == $deadline->id ? 'selected' : '' }}
                                            value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                                    @endforeach
                                </select>
                                @error('deadline')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">

                                <label class="font-medium text-white">Style:</label>
                                <select name="reference_style"
                                    class="w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                    <option hidden="" value="0" disabled="" selected="">Styles</option>
                                    @foreach ($reference_styles as $reference_style)
                                        <option {{ old('$reference_style') == $reference_style->id ? 'selected' : '' }}
                                            value="{{ $reference_style->name }}">{{ $reference_style->name }}</option>
                                    @endforeach
                                </select>
                                @error('reference_style')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">
                                <label class="font-medium text-white">Language:</label>
                                <select name="language"
                                    class="w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                    <option hidden="" value="" disabled="" class="" selected="">
                                        Language
                                    </option>
                                    <option value="eng-uk">English (U.K)</option>
                                    <option value="eng-us">English (U.S)</option>
                                    <option value="not-a-native-speaker">Not a native speaker</option>
                                </select>
                                @error('language')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">

                                <label class="font-medium text-white">Number of References:</label>
                                <select name="style"
                                    class="w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                    <option hidden="" value="0" disabled="" selected="">References</option>
                                    @for ($i = 0; $i <= 80; $i++)
                                        <option value="{{ $i }}"> {{ $i }} </option>
                                    @endfor
                                </select>
                                @error('style')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">

                                <label class="font-medium text-white">Select Academic Level:</label>
                                <select name="academic_level" id="academic_level"
                                    class="get-fare w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                    <option hidden="" value="0" disabled="" selected="">Choose any option
                                    </option>
                                    @foreach ($academic_levels as $academic_level)
                                        <option {{ old('$academic_level') == $academic_level->id ? 'selected' : '' }}
                                            value="{{ $academic_level->id }}">
                                            {{ $academic_level->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('academic_level')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">
                                <label class="font-medium text-white">Pages</label>
                                <select name="number_of_pages" id="no_of_pages"
                                    class="get-fare w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                    <option hidden="" value="0" disabled="" selected="">No of words
                                    </option>
                                    @for ($i = 1; $i <= 200; $i++)
                                        <option {{ old('number_of_pages') == $i ? 'selected' : '' }}
                                            value="{{ $i }}">
                                            {{ 250 * $i . ' ' . 'Words' . ' ' . '-' . ' ' . $i . ' ' . 'Pages' }}
                                        </option>
                                    @endfor
                                </select>
                                @error('number_of_pages')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class=" px-1 mb-3 w-full lg:w-1/3">
                                <label class="font-medium text-white">Subject:</label>
                                <select name="subject"
                                    class="w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                                    <option hidden="" value="0" disabled="" selected="">Subjects
                                    </option>
                                    @foreach ($subjects as $subject)
                                        <option {{ old('subject') == $subject->id ? 'selected' : '' }}
                                            value="{{ $subject->name }}">{{ $subject->name }}</option>
                                    @endforeach
                                </select>
                                @error('subject')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-1 mb-3 w-full lg:w-1/1">
                                <label class="font-medium text-white">Message:</label>
                                <textarea name="detail" rows="3"
                                    class="w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out "
                                    placeholder="Detail"></textarea>
                            </div>

                            <div class=" w-full lg:w-1/2 my-5">
                                <div class="flex items-center ">
                                    <label class="font-medium text-white">Select Space:</label>
                                    <div class="ml-5 form-check form-check-inline">
                                        <input name="spacing"
                                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-800 bg-white checked:bg-blue-600 checked:border-blue-900 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            type="radio" id="single" value="1" checked="">
                                        <label class="  form-check-label inline-block text-white" for="single"> Single
                                            Space </label>
                                    </div>
                                    <div class="ml-10 form-check form-check-inline">
                                        <input name="spacing"
                                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-800 bg-white checked:bg-blue-600 checked:border-blue-900 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            type="radio" id="double" value="2">
                                        <label class=" form-check-label inline-block text-white" for="double"> Double
                                            Space </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="w-full lg:w-1/2 mb-3">
                            <div class="w-full px-1 mb-3">
                                <label class="font-medium text-white">Attachments:</label>
                                <input type="file" name="emailAttachments[]" multiple=""
                                    class="w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out "
                                    accept=".pdf,.ppt,.pptx,.doc,.docx,.xls,.xlsx,.csv,.txt,.jpeg,.jpg,.png,.gif,.sav,.sps,.spv,.spo,.mat,.zip,.rar"
                                    aria-describedby="email_attacements_help" id="email_attacements">
                                @if (session('message'))
                                    <p class="text-red-600 text-sm">{{ session('message') }}</p>
                                @endif
                                @error('emailAttachments.*')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <h2 class=" my-4 font-medium title-font text-4xl text-center text-white">Contact Information</h2>

                    <div class="flex flex-wrap ">

                        <div class="w-full md:w-1/2 px-1 mb-3">
                            <label class="font-medium text-white">Name:</label>
                            <input type="text" name="name"
                                class="w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out "
                                placeholder="Full Name" value="">
                            @error('name')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full md:w-1/2 px-1 mb-3">
                            <label class="font-medium text-white">Email:</label>
                            <input type="email" name="email"
                                class="w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none py-2 px-3 mt-2 leading-8 transition-colors duration-200 ease-in-out  "
                                placeholder="Email" value="">
                            @error('email')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full md:w-1/2 px-1 mb-3">
                            <label class="font-medium text-white">Country:</label>
                            <select name="country"
                                class="w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none py-3 px-3 mt-2 leading-8 transition-colors duration-200 ease-in-out ">
                                <option hidden="" value="0" disabled="" selected="">Country</option>
                                @foreach ($countries as $country)
                                    <option {{ old('country') == $country->id ? 'selected' : '' }}
                                        value="{{ $country->name }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('country')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full md:w-1/2 px-1 mb-3">
                            <label class="font-medium text-white">Phone Number:</label>
                            <input type="tel" name="Phone"
                                class="w-full text-gray-700 rounded border border-primary-one bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none  py-2 px-3 leading-8 transition-colors duration-200 ease-in-out "
                                placeholder="Contact Number" value="" id="phone">
                            <input type="hidden" id="phone2" name="phone">
                            @error('phone')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="">
                        <div class="w-full md:w-1/2 px-1 mb-3">
                            <!-- Google Recaptcha -->
                            <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
                        </div>
                        <div class="w-full md:w-1/2 px-1 mb-3 my-4 font-medium title-font text-3xl leading-[70px] text-white">
                            Total Cost GBP: <span class="text-3xl"> <span id="cost"> 0</span>
                            </span>
                        </div>
                    </div>
                        
                    <div class="text-center pt-10">
                        <button type="submit" id="btn-submit" class="btn-pri text-white rounded py-2 px-8">
                            Submit
                        </button>
                    </div>
            </div>
            </form>
        </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            const loading =
                '<svg class="inline-block " width="60px" height="60px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#000"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'
            $('#cost').html(loading);
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["gb"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            $("#order-form").submit(function() {
                $('#order-form').find(':submit').attr("disabled", true);
                $('#btn-submit').html("Submiting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });

            $(".get-fare").change(function(e) {
                e.preventDefault();
                var data = {
                    "_token": "{{ csrf_token() }}",
                    "deadline_id": $('#deadline').val(),
                    "academic_level_id": $('#academic_level').val(),
                }
                $.ajax({
                    method: 'POST',
                    url: '{{ route('get.fare') }}',
                    beforeSend: function() {
                        // $("#cost-per-page").html("Loading...")

                        $("#cost").html(loading)
                    },
                    complete: function() {
                        // $("#loading").removeClass("d-block");
                    },
                    data: data,
                    success: function(res) {
                        //  console.log(res);
                        // if 1 page is selected
                        $("#cost").html((res.per_page_price * ($("#no_of_pages").val() == null ?
                            1 : $("#no_of_pages").val())))
                    },
                    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                        console.log(JSON.stringify(jqXHR));
                        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    }
                });
            });
        });
    </script>
@endsection
