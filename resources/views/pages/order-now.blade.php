@extends('layouts.web')
@section('title', 'Place Your Order Now - OTHM Assignment Help UK')
@section('description', 'Submit your order details and get expert academic support from OTHM Assignment Help UK. Original, plagiarism-free, and timely delivery.')
@section('canonical', config('app.app_url') . Request::path())
@section('links')
    <script async src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')

<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .form-item {
        width: 100%;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.375rem;
        border: 2px solid var(--color-secondary);
        padding: 0.4rem;
        font-size: 0.9rem;
        --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        outline: 2px solid transparent;
        outline-offset: 2px;
        --tw-text-opacity: 1;
        color: rgb(9 14 52 / var(--tw-text-opacity));
    }

    .order-form-styling1 {
        border-radius: 20px;
    }
    
    #btn-submit{
        background: black;
        padding: 10px 40px;
        border: 1px solid #fff;
        border-radius: 1px;
    }
    
    #btn-submit:hover{
        color: var(--color-secondary);
        font-weight: 600;
    }
    
    .iti__selected-dial-code{
        color: black;
    }
    
    .bg-secondary{
        background: var(--color-secondary);
    }
    
    .a3f {
        --tw-bg-opacity: 1;
        background-color: rgba(225, 225, 225, var(--tw-bg-opacity));
    }
    
    .max-w-\[45px\] {
        max-width: 50px;
        display: block;
    }
    
    .at\[1px\] {
        height: 1px;
    }
    .summary-form{
    border-radius: 9px;
    color: black;
    border: 2px solid var(--color-primary);
    }
    hr{
        border: 1px solid var(--color-secondary)
    }
    .btn-dual-shade {
    background: var(--color-secondary) !important;
    border: 1px solid var(--color-secondary) !important;
    border-radius: 40px;
    box-shadow: none !important;
    color: #fff !important;
    font-family: lato;
    font-size: 14px;
    font-weight: 700;
    overflow: hidden;
    padding: 10px 30px !important;
    position: relative;
    transition: all .5s ease-in;
    }
    .btn-dual-shade:hover {
    background: #fff !important;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, .38) !important;
    color: var(--color-secondary) !important;
    }
    .order-sec{
    background: rgb(246, 246, 246);
    }
</style>
<section class="text-white py-10 order-sec">
    <h1 class="text-3xl pb-3 text-primary text-center">Order Now</h1>
    <div class="container mx-auto ">
        @if(session('error'))
        <div class="mx-auto lg:mx-8 ">
            <p class="text-red-500 text-base">{{ session('error') }}</p>
        </div>
        @endif
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3 gap-x-4 gap-y-4">
            <div class="col-span-3 lg:col-span-2">
                <div class="w-full a1L order-form-styling1 a1Z dark:av a13 px-4 md:px-8 py-5 md:py-6">

                    <form id="order-form" action="{{ route('order.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 gap-4">
                            <div class="col-span-2">
                                <input type="text" id="topic" name="paper_topic" class="summary form-item"
                                    placeholder="Enter your Topic" value="{{ old('topic') }}">
                                @error('topic')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <select id="paper-type" name="paper_type" class="form-item text-gray-400 summary">
                                    <option hidden="" value="0" disabled="" selected="">Paper Type</option>
                                    @foreach ($paper_types as $paper_type)
                                    <option {{ old('$paper_type')==$paper_type->id ? 'selected' : '' }}
                                        value="{{ $paper_type->name }}">{{ $paper_type->name }}</option>
                                    @endforeach
                                </select>
                                @error('paper_type')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <select id="deadline" name="deadline" class="form-item text-gray-400 summary get-fares">
                                    <option hidden="" value="0" disabled="" selected="">Deadline</option>
                                    @foreach ($deadlines as $deadline)
                                    <option value="{{ $deadline->name }}" {{ old('deadline')==$deadline->name ?
                                        "selected" : "" }} get-id="{{ $deadline->id }}">
                                        {{ $deadline->name .' '
                                        .Carbon\Carbon::now()->addDays($deadline->duration_in_days)->format('j \of F Y')
                                        }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <select id="reference-style" name="reference_style"
                                    class="form-item text-gray-400 summary">
                                    <option hidden="" value="0" disabled="" selected="">Referencing Style</option>
                                    @foreach ($reference_styles as $reference_style)
                                    <option {{ old('$reference_style')==$reference_style->id ? 'selected' : '' }}
                                        value="{{ $reference_style->name }}">{{ $reference_style->name }}</option>
                                    @endforeach
                                </select>
                                @error('reference_style')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <select id="language" name="language" class="form-item text-gray-400 summary">
                                    <option hidden="" value="" disabled="" class="" selected="">Language</option>
                                    <option value="eng-uk" {{ old('language')=='eng-uk' ? "selected" : "" }}>English
                                        (U.K)</option>
                                    <option value="eng-us" {{ old('language')=='eng-us' ? "selected" : "" }}>English
                                        (U.S)</option>
                                    <option value="none" {{ old('language')=='none' ? "selected" : "" }}>Not a native
                                        speaker</option>
                                </select>
                                @error('language')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <select id="no-of-references" name="no_of_references"
                                    class="form-item text-gray-400 summary">
                                    <option hidden="" value="" disabled="" class="" selected="">Number of References
                                    </option>
                                    @for ($i = 1; $i <= 20; $i++) <option get-id="{{ $i }}" {{
                                        old('no_of_references')==$i ? "selected" : "" }} value="{{ $i }}">{{ $i }}
                                        </option>
                                        @endfor
                                </select>
                                @error('no_of_references')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <select id="academic-level" name="academic_level" class="form-item text-gray-400 summary get-fares">
                                    <option hidden="" value="0" disabled="" selected="">Academic Level</option>
                                    @foreach ($academic_levels as $academic_level)
                                    <option get-id="{{ $academic_level->id }}" {{ old('$academic_level')==$academic_level->name ? "selected" : "" }} value="{{ $academic_level->name }}">
                                        {{ $academic_level->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('academic_level')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-2 md:col-span-1">
                                <select id="pages" name="number_of_pages" class="form-item text-gray-400 summary get-fares">
                                    <option hidden="" disabled="" selected="">No of Pages</option>
                                    @for ($i = 1; $i <= 100; $i++) <option get-id="{{ $i }}" {{ old('pages')==$i
                                        . ' Pages - ' . 250 * $i . ' Words' ? "selected" : "" }}
                                        value="{{ $i . ' Pages - ' . 250 * $i . ' Words' }}">{{ $i . ' Pages - ' . 250 *
                                        $i . ' Words' }}</option>
                                        @endfor
                                </select>
                            </div>

                            <div class="col-span-2 md:col-span-1">
                                <select id="subject" name="subject" class="form-item text-gray-400 summary">
                                    <option hidden="" value="0" disabled="" selected="">Subject</option>
                                    @foreach ($subjects as $subject)
                                    <option value="{{ $subject->name }}" {{ old('subject')==$subject->name ? "selected"
                                        : "" }}>{{ $subject->name }}</option>
                                    @endforeach
                                </select>
                                @error('subject')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <div class="flex input-group" data-tooltip-target="slides-tooltip">
                                    <button role="button"
                                        class="py-2 px-2 rounded-l bg-secondary text-white btn-minus">-</button>
                                    <input id="no-of-slides" name="no_of_slides" type="number" min="0" max="100"
                                        class="get-fares w-full border border-transparent dark:bg-[#242B51] shadow-sm dark:shadow-lg py-3 px-6 text-black text-base outline-none focus:border-primary-one-dark"
                                        placeholder="Number of Slides" value="{{ old('no_of_slides') }}">
                                    <button role="button"
                                        class="py-2 px-2 rounded-r bg-secondary text-white btn-plus">+</button>
                                </div>
                                @error('no_of_slides')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <div class="flex input-group" data-tooltip-target="posters-tooltip">
                                    <button role="button"
                                        class="py-2 px-2 rounded-l bg-secondary text-white btn-minus">-</button>
                                    <input name="no_of_posters" id="no-of-posters" type="number" min="0" max="100"
                                        class=" get-fares w-full border border-transparent dark:bg-[#242B51] shadow-sm dark:shadow-lg py-3 px-6 text-black text-base outline-none focus:border-primary-one-dark"
                                        placeholder="Number of Posters" value="{{ old('no_of_posters') }}">
                                    <button role="button"
                                        class="py-2 px-2 rounded-r bg-secondary text-white btn-plus">+</button>
                                </div>
                               
                                @error('no_of_posters')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2">
                                <label class="block text-black">
                                    <span class="sr-only ">Choose File</span>
                                    <input type="file" name="emailAttachments[]" multiple
                                        class="block w-full text-sm  file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold  file:text-white dark:file:text-dark-lite file:bg-dark dark:file:bg-[#f6f7ff] hover:file:bg-primary-two-dark " />
                                </label>
                                <p class="mt-1 text-xs text-black" id="file_input_help">PDF, PPT, PPTX, DOC, DOCX, JPEG,
                                    JPG, PNG, ZIP or RAR (MAX. 25MB).</p>
                            </div>

                            <div class="col-span-2">
                                <textarea name="detail" rows="2"
                                    class="form-item @error('detail') error-field @enderror h-28"
                                    placeholder="Any special note (optional)">{{ old('detail', '') }}</textarea>
                                @error('detail')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-2 md:col-span-1">
                                <input type="text" id="name" name="name"
                                    class="form-item summary @error('name') error-field @enderror"
                                    placeholder="Enter your Name" value="{{ old('name', '') }}" />
                                @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-2 md:col-span-1">
                                <input type="text" id="email" name="email"
                                    class="form-item summary @error('email') error-field @enderror"
                                    placeholder="Enter your Email" value="{{ old('email', '') }}" />
                                @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-2 md:col-span-1">
                                <input type="text" id="phone" id="phone" name="phone"
                                    class="form-item summary @error('phone') error-field @enderror text-black" placeholder=""
                                    value="{{ old('phone', '') }}" />
                                <div id="valid-msg" class="hidden font-bold text-black flex items-center">
                                    <span class="text-primary-one text-xl pt-2 ">
                                        <svg class="h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                            width="48px" height="48px">
                                            <path fill="#c8e6c9"
                                                d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z" />
                                            <path fill="#4caf50"
                                                d="M34.586,14.586l-13.57,13.586l-5.602-5.586l-2.828,2.828l8.434,8.414l16.395-16.414L34.586,14.586z" />
                                        </svg>
                                    </span>
                                    <span class="pt-2">
                                        Valid Number
                                    </span>
                                </div>
                                <p id="error-msg" class="hidden text-red-500"></p>
                                @error('phone')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <input type="hidden" name="phone" id="phone2" />
                            </div>
                            <div class="col-span-2 md:col-span-1">
                            <select name="country" class="form-item summary text-gray-400">
                                <option hidden value="0" disabled {{ old('country') ? '' : 'selected' }}>Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->name }}" 
                                        {{ old('country', 'United Kingdom') == $country->name ? 'selected' : '' }}>
                                        {{ $country->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('country')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>


                            <input type="hidden" id="academic_level_id" name="academic_level_id"
                                value="{{ old('academic_level_id') }}">
                            <input type="hidden" id="deadline_id" name="deadline_id" value="{{ old('deadline_id') }}">
                            <input type="hidden" id="no-of-pages" name="no_of_pages" value="{{ old('no_of_pages') }}">
                            <div class="w-full">
                                <!-- Google Recaptcha -->
                                <div class="g-recaptcha mt-2" data-sitekey={{config('services.recaptcha.key')}}></div>
                            </div>
                             <div class="col-span-2 text-center">
                                 <button id="btn-submit" type="submit" class="btn btn-md d-block btn-dual-shade w-100 form-btn cursor-not-allowed" disabled>
                                <div bis_skin_checked="1">
                                    <i class="fas fa-solid fa-lock">
                                    </i><span>&nbsp; Proceed</span>
                                </div>
                            </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-white order-first lg:order-last col-span-3 lg:col-span-1 px-3">
                <div class="shadow-sm order-form-styling1 summary-form mt-4 pt-3">
                    <h2 class="text-xl px-6">Order Summary</h2>
                    <hr class="mt-2">
                    <div class="text-color py-2 px-6">
                      
                        <ul class="">
                            <li>Topic: <span class="float-right" id="topic-data">-</span></li>
                            <li class="mt-2">Paper Type: <span class="float-right" id="paper-type-data">-</span></li>
                            <li class="mt-2">Deadline: <span class="float-right" id="deadline-data">-</span></li>
                            <li class="mt-2">Reference Style: <span class="float-right" id="reference-style-data">-</span></li>
                            <li class="mt-2">Language: <span class="float-right" id="language-data">-</span></li>
                            <li class="mt-2">References: <span class="float-right" id="no-of-references-data">-</span></li>
                            <li class="mt-2">Academic Level: <span class="float-right" id="academic-level-data">-</span></li>
                            <li class="mt-2">Pages: <span class="float-right" id="pages-data">-</span> </li>
                            <li class="mt-2">Subject: <span class="float-right" id="subject-data">-</span></li>
                            <li class="mt-2">Price Per Slide: <span class="float-right" id="cost-per-slide">-</span></li>
                            <li class="mt-2">Price Per Poster: <span class="float-right" id="cost-per-poster">-</span></li>
                            <li class="mt-2">Price Per Page: <span class="float-right" id="cost-per-page">-</span></li>
                            <hr class="mt-2">
                            <li class="mt-2 text-xl font-bold">Total: <span class="float-right text-2xl font-semibold text-black"
                                    id="total-cost">-</span></li>
                                </ul>
                                
                            </div>
                            <!--<button id="btn-submit" type="submit" class="btn btn-md d-block btn-dual-shade w-100 form-btn cursor-not-allowed" disabled>-->
                            <!--    <div bis_skin_checked="1">-->
                            <!--        <i class="fas fa-solid fa-lock">-->
                            <!--        </i><span>&nbsp; Proceed</span>-->
                            <!--    </div>-->
                            <!--</button>-->
                            
                        </div>
                        <div class="rounded border mt-3 summary-form" bis_skin_checked="1">
                            <img data-src="{{asset('imgs/secured-payment.webp')}}" 
                            class="img-fluid mt-3 d-block mx-auto lazyloaded" 
                            alt="Order Assignment" 
                            title="Order Assignment" 
                            loading="lazy" width="282" height="109" 
                            src="{{asset('imgs/secured-payment.webp')}}">
                        </div>
                    </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
    $('select').on('change', function () {
        $(this).removeClass("text-gray-400");
    });
    $('.summary').on('change', function () {
        $('#' + this.id + '-data').html(this.value);
    });

    if ({{ old('pages') ? 'true' : 'false' }} ) {
        $('.summary').change()
        $('.get-fares').change()
    }


    const fares = @json($fares);

    $(".get-fares").change(function () {
        const academic_level = $('#academic-level option:selected').attr("get-id");
        const deadline = $('#deadline option:selected').attr("get-id");
        const no_of_pages = $('#pages option:selected').attr("get-id") || "1";
        const no_of_slides = $('#no-of-slides').val() || "0";
        const no_of_posters = $('#no-of-posters').val() || "0";
    
        const currency = ' GBP';
    
        fares.forEach(fare => {
            if (deadline == fare.deadline_id && academic_level == fare.academic_level_id) {
                var total = (fare.per_slide_price * no_of_slides) + 
                            (fare.per_poster_price * no_of_posters) + 
                            (fare.per_page_price * no_of_pages);
    
                $('#total-cost').html(total.toLocaleString() + currency);
                $('#cost-per-page').html(fare.per_page_price + currency + " x " + no_of_pages);
                $('#cost-per-slide').html(fare.per_slide_price + currency + " x " + no_of_slides);
                $('#cost-per-poster').html(fare.per_poster_price + currency + " x " + no_of_posters);
    
                $('#academic_level_id').val(academic_level);
                $('#deadline_id').val(deadline);
                $('#no-of-pages').val(no_of_pages);
            }
        });
    });


</script>
<script>
    $(document).ready(function () {

        $('.btn-plus, .btn-minus').on('click', function (e) {
            e.preventDefault();
            const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
            const input = $(e.target).closest('.input-group').find('input');

            if (input.is('input')) {
                input[0][isNegative ? 'stepDown' : 'stepUp']()
            }
            $(".get-fares").change()
        })

        const phone = document.querySelector("#phone");
        var errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");

        // here, the index maps to the error code returned from getValidationError - see readme
        var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        // initialise plugin
        const phoneInput = window.intlTelInput(phone, {
            preferredCountries: ["gb"],
            separateDialCode: true,
            dropdownContainer: document.body,
            customPlaceholder: function (selectedCountryPlaceholder, selectedCountryData) {
                return "e.g. " + selectedCountryPlaceholder;
            },
            initialCountry: "gb",
            geoIpLookup: function (callback) {
                $.get("https://ipinfo.io/103.244.175.33?token=1fb4fdd88d0fa0", function () { }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "gb";
                    // success(countryCode);
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        var submit = $('#btn-submit');

        var reset = function () {
            phone.classList.remove("error");
            phone.classList.remove("error-field");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hidden");
            validMsg.classList.add("hidden");
            submit.attr("disabled", true);
            submit.addClass("btn-disabled");
        };

        // on blur: validate
        phone.addEventListener('blur', function () {
            reset();
            if (phone.value.trim()) {
                if (phoneInput.isValidNumber()) {
                    validMsg.classList.remove("hidden");
                    submit.attr("disabled", false);
                    submit.removeClass("btn-disabled");
                    submit.removeClass("cursor-not-allowed");
                } else {
                    submit.addClass("cursor-not-allowed");
                    phone.classList.add("error");
                    phone.classList.add("error-field");
                    var errorCode = phoneInput.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hidden");
                }
            }
        });

        // on keyup / change flag: reset
        phone.addEventListener('change', reset);
        phone.addEventListener('keyup', reset);

        var loader = ' <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">';
        loader += ' <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>';
        loader += ' <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>';
        loader += ' </svg>';

        $("#order-form").submit(function () {
            submit.html(loader);
            submit.attr("disabled", true);
            submit.addClass("cursor-not-allowed");

            const phoneNumber = phoneInput.getNumber();
            $('#phone2').val(phoneNumber);
            return true;
        });
    });
</script>
@endsection