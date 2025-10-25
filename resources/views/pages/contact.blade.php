@extends('layouts.web')
@section('title', 'Contact OTHM Assignment Help UK – We’re Here to Help')
@section('description', 'Get in touch with the friendly support team at OTHM Assignment Help UK. We’re ready to answer your questions and guide you through our services.')
@section('canonical', config('app.app_url') . Request::path())

@section('schema-script')

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "@yield('title', '')",
      "url": "@yield('canonical')",
      "logo": "https://othmassignmenthelpuk.co.uk/public/imgs/logo.webp",
      "sameAs": [
        "https://www.facebook.com/othmassignmenthelpuk.co.uk/",
        "https://www.instagram.com/othmassignmenthelpuk.co.uk/"
      ]
    }
    </script>
    
@endsection

@section('links')
    <script async src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')
</div>
<style>
    .contact-sec{
    background-color: #e4e4e4;
    border-radius: 12px;
    margin-top: 40px;
    padding: 20px 14px;
    }
    hr{
        border: 1px solid var(--color-secondary)
    }
    .form-input {
        width: 100%;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        box-shadow: 2px 2px 3px 0px #ae3b4c !important;
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
     .icon {
        position: relative;
        background: #fff;
        border-radius: 50%;
        margin: 10px;
        width: 50px;
        height: 50px;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border: 1px solid var(--color-secondary);
        box-shadow: 0 10px 10px rgb(185 130 111);
        cursor: pointer;
        transition: all 0.2s 
    cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }
    </style>
<section class="py-5 mx-auto px-3">
    
    <div class="space-y-5 text-center">
      
        </div>

    {{-- <p class="text-center text-4xl font-semibold py-4 px-4">Contact us</p> --}}
        <!-- form -->
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2">
            <div class="text-center md:text-left lg:mt-15">
              <!-- Phone -->
              <div class="flex flex-wrap items-center gap-6 py-2 justify-center md:justify-start">
                <div class="md:w-3/12 flex ">
                  <img src="{{ asset('imgs/contact-2.png')}}"
                       width="64" height="64" alt="Contact" title="Contact" />
                </div>
                <div class=" md:w-8/12 mt-3 md:mt-0 md:pl-3">
                  <span class="text-black text-lg font-bold block mb-0">LET'S TALK</span>
                  <a href="tel:+44 7403 663991" class="block text-black">
                    +44 7403 663991
                  </a>
                </div>
              </div>
            
              <!-- Email -->
              <div class="flex flex-wrap items-center gap-6 py-2 mt-5 justify-center md:justify-start">
                <div class=" md:w-3/12 flex ">
                  <img src="{{ asset('imgs/email.png')}}"
                       width="64" height="64" alt="Email" title="Email" />
                </div>
                <div class=" md:w-8/12 mt-3 md:mt-0 md:pl-3">
                  <span class="text-black text-lg font-bold block mb-0">SEND US EMAIL</span>
                  <a href="mailto:info@othmassignmenthelpuk.co.uk" class="block text-black">
                    info@othmassignmenthelpuk.co.uk
                  </a>
                </div>
              </div>
            
              <hr class="my-4 border-gray-300">
            
              <!-- Social Media -->
              <div class="text-center mt-5">
                <span class="text-secondary text-lg font-bold">FIND US ON SOCIAL MEDIA</span>
                <div class="mt-3 flex justify-center gap-4">
                  <!-- Facebook -->
                  <a href="https://www.facebook.com/othmassignmenthelpuk.co.uk/" target="_blank"
                     class="icon flex items-center gap-2 text-blue-600 hover:text-blue-800">
                    <svg viewBox="0 0 320 512" height="20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 
                      52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 
                      0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                    </svg>
                  </a>
            
                  <!-- Instagram -->
                  <a href="https://www.instagram.com/othmassignmenthelpuk.co.uk/" target="_blank"
                     class="icon flex items-center gap-2 text-pink-600 hover:text-pink-800">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 
                      3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 
                      3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 
                      3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 
                      1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 
                      15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 
                      1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 
                      10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 
                      0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 
                      10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 
                      3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 
                      1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 
                      3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 
                      1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 
                      2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 
                      0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 
                      1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 
                      1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 
                      1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 
                      1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="mx-auto lg:mx-8  contact-sec">

            <h1 class="text-3xl font-semibold text-center text-primary">
                        Contact Us
                        </h1>
                <div class="px-2 space-y-4 my-4 ">
                    <div id="msg-bag"></div>
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-x-3 gap-y-6 mt-8 " id="contact-form"  >
                     @csrf
                        <div class="w-full space-y-2">
                              <input type="text" name="name" class="form-input" placeholder="Name" value="">
                        </div>
                      
                        <div class="w-full space-y-2">
                          <input type="text" name="email" class="form-input" placeholder="Email" value="">
                        </div>
                        
                        <div class="w-full space-y-2">
                            <input type="tel" name="Phone" id="phone" class="form-input" placeholder="Contact Number" value=""> 
                            <input type="hidden" name="phone" id="phone2" class="form-input"  value="">
                        </div>

                        <div class="w-full space-y-2">
                            {{-- <input type="text" name="country" class="" placeholder="Country" value=""> --}}
                           <select name="country"
                            class="h-[44px] w-full text-black rounded form-input text-base outline-none py-1 px-3 leading-8 bg-white ">
                            <option hidden value="0" disabled {{ old('country') ? '' : 'selected' }} class="text-gray-500">Country</option>
                            @foreach ($countries as $country)
                                <option class="bg-white" 
                                    value="{{ $country->name }}" 
                                    {{ old('country', 'United Kingdom') == $country->name ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>    
                            @endforeach
                        </select>

                        </div>

                        <div class="w-full md:col-span-2 space-y-2">
                            
                            <input type="text" name="subject" class="form-input" placeholder="Subject" value="">
                        </div>

                        <div class="w-full md:col-span-2 space-y-2">
                            
                        <textarea name="detail" rows="2" class=" form-input h-28" placeholder="Type details here..."></textarea>
                        </div>
                        <div class="flex flex-col md:flex-row items-center lg:gap-15 gap-4 py-2 mt-5">
                        <!-- Submit Button -->
                        
                        <!-- Google Recaptcha -->
                        <div class="w-full md:w-auto flex  md:justify-end mt-4 md:mt-0">
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                        </div>
                        <div class=" md:w-auto flex justify-center md:justify-start">
                            <button class="btn-pri" type="submit" id="btn-submit">
                            <span>Submit</span>
                            </button>
                        </div>
                    </div>


                    </form>
                </div>
            </div>
        </div>

</section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
             const phoneInputField = document.querySelector("#phone");
             const phoneInput = window.intlTelInput(phoneInputField, {
                 preferredCountries: ["gb"],
                 utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
             });
            $('#contact-form').on('submit', function(e) {
                e.preventDefault();
               
                 const phoneNumber = phoneInput.getNumber();
                 $('#phone2').val(phoneNumber);
                $.ajax({
                    url: "{{ route('contact.store') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $('#contact-form').serialize(),
                    beforeSend: function() {
                        $(".contact-form-error").empty();
                        $('#contact-form').find(':submit').attr("disabled", true);
                        $('#btn-submit').html("Submiting...");
                    },
                    complete: function() {
                        $('#contact-form').find(':submit').attr("disabled", false);
                        $('#btn-submit').html("Submit Your Query");
                    },
                    success: function(res) {

                        // console.log(res)

                        $('#msg-bag').empty();

                        let msg =
                            '<div class="bg-green-100 border w-[80%] text-center left-[10%] border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">';
                        msg += '<strong class="font-bold">Success!</strong>';
                        msg += '<span class="block sm:inline">' + res.success + '</span>';
                        msg += '</div>';

                        $('#msg-bag').append(msg);

                        $(':input', 'form')
                            .not(':button, :submit, :reset, :hidden')
                            .val('')
                            .prop('checked', false)
                            .prop('selected', false);
                    },
                    error: function(err) {
                        if (err.status == 422) {

                            $('#msg-bag').empty();

                            let msg =
                                '  <div class="mx-auto md:mx-0 md:left-[35%] bg-red-100 border w-[80%]  md:w-[30%] border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 text-center" role="alert">';
                            msg += '    <strong class="font-bold ">Error!</strong>';
                            msg += '    <span class="  ">Invalid Data</span>';
                            msg += ' </div>';

                            $('#msg-bag').append(msg);

                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $('#contact-form').find('[name="' + i + '"]');
                                el.after($('<span class="contact-form-error text-red-700">' +
                                    error[0] + '</span>'));
                            });

                            $('.contact-form-error').delay(2000).fadeOut();
                        } 
                    },
                });
            });
        });
    </script>
@endsection
