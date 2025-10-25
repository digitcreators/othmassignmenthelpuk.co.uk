@extends('layouts.web')
@section('title',  "#1 OTHM Assignment Help UK - 300+ OTHM Experts Online")
@section('description',"Boost your OTHM career with our best OTHM Assignment Help in UK. Our OTHM helpers are always available for OTHM Diploma Levels 3, 4, 5, 6,7 and 8.")
@section('keywords',  'OTHM Assignment Help UK')
@section('canonical', config('app.url') )


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
@section('content')

{{-- Header --}}
<section class="main-banner bg-grey text-white py-8">
    <div class="lg-px-5 px-5 py-lg-0 py-5 container mx-auto flex flex-col lg:flex-row md:flex-row items-center">
      <!-- Left Column -->
      <div class="">
        <h1 class="text-4xl font-bold pb-4  text-white">Make Your Journey Effortless and Rewarding with Our OTHM Assignment Help UK</h1>
        <p class="pt-6 text-white">
        Welcome to othmassignmenthelpuk.co.uk, your trusted destination for OTHM assignment writing help. For over 12 years, we’ve assisted 20,000+ students from Level 3 to Level 8 with distinction-worthy assignments. Our team of 300+ qualified writers understands what examiners expect and delivers content that perfectly aligns with  academic standards, ensuring top grades every time.
        </p>

        <div class=" flex flex-col sm:flex-row items-center sm:space-x-4 mt-10">
            <a class="fancy" href="{{route('order')}}">
            <span class="top-key"></span>
            <span class="text">Write My OTHM Assignment!</span>
            <span class="bottom-key-1"></span>
            <span class="bottom-key-2"></span>
            </a>
            <a href="javascript:void(Tawk_API.toggle())" class="btn-pri lg:mt-0 mt-5">
                Chat Now
            </a>
        </div>
      </div>
      
      <!-- Right Column -->
      @include('partials.frontend.calculator') 

    </div>


</section>
</div>
{{-- Header --}}

@include('partials.frontend.uni-logo') 

@include('partials.frontend.why-choose') 

@include('partials.frontend.writers') 

<section class="steps-section py-10">
  <div class="">
    <!-- Heading -->
    <h3 class="text-center text-4xl text-white ">
      Watch Your OTHM Grades Rise in 4 Easy Moves!
    </h3>

    <div class="steps-grid">
      <!-- Step 1 -->
      <div class="step">
        <span class="step-number">1</span>
        <div class="step-content">
          <img src="{{ asset('imgs/order.png')}}" class="step-icon" alt="order" title="order">
          <p>Share your assignment brief and any other requirements that you would want us to follow.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="step">
        <span class="step-number">2</span>
        <div class="step-content">
          <img src="{{ asset('imgs/payment.png')}}" class="step-icon" alt="transaction" title="transaction">
          <p>Transform your payment through safe and secure payment gateways to avoid fraud.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="step">
        <span class="step-number">3</span>
        <div class="step-content"> 
          <img src="{{ asset('imgs/contact.png')}}" class="step-icon" alt="updates" title="updates">
          <p>A professional writer will be allocated to your task, who will maintain contact with you throughout.</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="step">
        <span class="step-number">4</span>
        <div class="step-content">
          <img src="{{ asset('imgs/assignment.png')}}" class="step-icon" alt="package" title="package">
          <p>Receive your assignment and review it. Then let us know if you need edits.</p>
        </div>
      </div>
    </div>

    <!-- SVG Connector -->
    <svg class="connector" viewBox="0 0 1000 400" preserveAspectRatio="none">
      <defs>
        <marker id="arrow" markerWidth="10" markerHeight="10" refX="5" refY="3" orient="auto" markerUnits="strokeWidth">
          <path d="M0,0 L0,6 L9,3 z" fill="#bbbbbb" />
        </marker>
      </defs>
    
      <!-- Z shape -->
      <path d="M 100 100 L 900 100 L 100 300 L 900 300" 
            stroke="#bbbbbb" stroke-width="3" stroke-dasharray="6,6" 
            fill="none" marker-end="url(#arrow)" />
    </svg>


  </div>
</section>   


<section class="four-sec py-10 px-4 bg-white">
  <div class="container max-w-7xl mx-auto">

    <!-- First Row -->
    <div class="four-border-sec grid grid-cols-1 lg:grid-cols-2 gap-8">
      
      <!-- Left -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Choose Our OTHM Assignment Help Providers Because Your Grades Deserve the Best
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
          Writing OTHM assignments is not just about filling pages with words; they require a thorough understanding of business and management concepts, as well as your critical thinking skills. Plus, you need to have a professional tone and academic knowledge to strengthen your assignment, which is not really easy for many students. But with OTHM Assignment Help UK’s support, you can definitely do it. Every student who is pursuing their OTHM qualifications may have unique needs, and our team is fully equipped to cater to them. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
          Whether you are at an undergraduate, postgraduate or doctoral level, our proficient writers guarantee meticulous research and polished writing for all academic levels. They can handle assignments, coursework and projects at every level. Our OTHM Assignment Writing Services offer personalised assistance to meet your academic needs and always deliver high-quality solutions. We go beyond the basics, enriching your assignments with real-world examples, current trends and case studies. Every paper is original and research-driven for the highest impact on your grades. Also, we respect deadlines and deliver your work way earlier than your submission date, so you have ample time to go through it and let us know if there are any amendments needed.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Certified OTHM Assignment Writers UK Who Help You Shine 
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
          Acquiring an OTHM qualification is your opportunity to shine in the professional world and gain international recognition. However, managing these assignments can be challenging, even for students who understand the topics well. That’s why many learners rely on OTHM assignment help services to make the process easier. Whether it’s due to a lack of time, limited writing skills, or difficulty articulating ideas, our professional support ensures you get the guidance you need. With expert assistance, you can overcome confusion about formatting, structure, or assignment briefs and submit work that meets OTHM standards confidently and on time.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
          At OTHM Assignment Help, you find solutions to every such problem. Just share your assignment brief and see how we craft impressive academic papers out of it with deep research, insights, and practical examples. Whether it is strategic leadership, tourism and hospitality, or business management, our writers know how to meet the assessment criteria of all OTHM courses. They blend creativity, real-world examples, and storytelling, which makes your work even more engaging and interesting. Besides, we accommodate urgent assignment requests, so if you have an assignment due, don't panic—let us know right away. From research to referencing, every aspect will be taken care of.
          </p>
        </div>
      </div>

    </div>

    <!-- Second Row -->
    <div class="four-border-sec grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
      
      <!-- Left -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Stay Calm and Let Our OTHM Assignment Help UK Online Do the Magic
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
          As an OTHM learner, things can become a bit unmanageable because one must balance personal aspirations, deadlines, and job obligations simultaneously. That's when OTHMAssignmentHelp UK can prove to be beneficial in managing your academic, professional and personal life. Students who aspire much but find it difficult to fit adequate time into the day will benefit from our OTHM assignment writing help. Our practical approach clearly distinguishes our assignment writing assistance. We include practical examples, case-based learning, and creative ideas that wow teachers and graders. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
          Whether you need OTHM Level 4 Assignment Assistance or OTHM Level 7 Assignment Help, each task is matched to your OTHM level to guarantee it satisfies precise learning outcomes and shows your knowledge of the subject. With years of expertise in both academia and business, our writers transform difficult ideas into clear, well-organized papers reflecting precision. Every project is tailored from beginning to end and formatted exactly according to OTHM guidelines. With our lightning-fast turnaround and reasonable rates, you have the ideal support system to succeed in your OTHM qualifications. On top of that, we provide limitless revisions free of charge for your peace of mind. So, seize this opportunity and excel without burning out.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Study Smart with Our OTHM Assignments Writing Help Services Online In UK
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
          With a number of projects piling up, it is quite easy to feel overwhelmed with expectations and deadlines. For this reason, OTHMAssignmentHelp offers you a smarter approach to managing your OTHM coursework. We create papers that will stand out in the pile of submissions. A team of academic visionaries with knowledge of what your examiners are looking for drives our OTHM assignment assistance service. They combine theory with practical examples to turn difficult OTHM concepts into well-researched, properly referenced material. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
          Moreover, we make sure your paper reflects your own point of view while fully conforming to OTHM's evaluation criteria, whether you require online OTHM Level 5 Assignment Help or OTHM Level 3 assignment help in UK. Every project we provide makes sense, grabs the reader's interest, and effectively conveys your knowledge. Furthermore, we understand that time is of the utmost importance, so our efficient team delivers excellent work even under constrained deadlines. In addiotn ot that, we offer a range of services to refine your work, including proofreading, editing, formatting, plagiarism checks, and online consultations. You will receive an originality report as proof that everything has been written by our human writers. We have you submitting a masterpiece worthy of admiration and results.
          </p>
        </div>
      </div>

    </div>

    <!-- CTA Button -->
    <div class="text-center mt-10">
      <a href="{{route('order')}}" 
         class="btn-pri">
        Get Started
      </a>
    </div>

  </div>
</section>

  <section class="qualificationLevel py-10 px-5 lg:px-20">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-8">
        <h2 class="text-2xl md:text-3xl font-bold text-white">Expert OTHM Assignment Help for Every Diploma Level</h2>
        <p class="mt-3 text-sm md:text-base text-slate-200 max-w-3xl mx-auto text-white">At OTHM Assignment Help UK, we provide comprehensive academic support for students enrolled in various OTHM diploma levels (3, 4, 5, 6, 7, and 8). Whether you’re just starting your OTHM journey or pursuing advanced qualifications, our team of expert writers ensures every assignment meets OTHM’s strict academic standards.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Left: vertical tabs -->
        <div class="space-y-3">
          <div class="flex flex-col space-y-2" role="tablist" aria-orientation="vertical">

            <!-- Tab button (use data-tab to control the content) -->
            <button class="tab-btn flex items-center gap-3 rounded-lg bg-indigo-700" data-tab="level-3" aria-controls="level-3" aria-selected="true" id="tab-level-3" aria-controls="level-3" role="tab" >
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#612235" class="iconTab w-6 h-6 text-blue-600">
              <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM4.21 10L12 14.47 19.79 10 12 5.53 4.21 10zM12 16.5c-3.25 0-6 1.57-6 3.5v1h12v-1c0-1.93-2.75-3.5-6-3.5z"/>
              </svg>

              <div class="text-left infoTab">
                <div class="font-semibold titleTab">Level 3</div>
                <div class="text-sm infotitleTab">Foundation programmes</div>
              </div>
            </button>

            <button class="tab-btn flex items-center gap-3 pt-4 rounded-lg hover:bg-slate-700" data-tab="level-4" aria-controls="level-4" aria-selected="false" id="tab-level-4" aria-controls="level-4" role="tab" >
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#612235" class="iconTab w-6 h-6 text-blue-600">
              <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM4.21 10L12 14.47 19.79 10 12 5.53 4.21 10zM12 16.5c-3.25 0-6 1.57-6 3.5v1h12v-1c0-1.93-2.75-3.5-6-3.5z"/>
              </svg>
              <div class="text-left infoTab">
                <div class="font-semibold titleTab">Level 4</div>
                <div class="text-sm infotitleTab">Undergraduate Programmes</div>
              </div>
            </button>

            <button class="tab-btn flex items-center gap-3 pt-4 rounded-lg hover:bg-slate-700" data-tab="level-5" aria-controls="level-5" aria-selected="false" id="tab-level-5" aria-controls="level-5" role="tab" >
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#612235" class="iconTab w-6 h-6 text-blue-600">
              <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM4.21 10L12 14.47 19.79 10 12 5.53 4.21 10zM12 16.5c-3.25 0-6 1.57-6 3.5v1h12v-1c0-1.93-2.75-3.5-6-3.5z"/>
              </svg>
              <div class="text-left infoTab">
                <div class="font-semibold titleTab">Level 5</div>
                <div class="text-sm infotitleTab">Certificate in Leading</div>
              </div>
            </button>

            <button class="tab-btn flex items-center gap-3 pt-4 rounded-lg hover:bg-slate-700" data-tab="level-6" aria-controls="level-6" aria-selected="false" id="tab-level-6" aria-controls="level-6" role="tab" >
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#612235" class="iconTab w-6 h-6 text-blue-600">
              <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM4.21 10L12 14.47 19.79 10 12 5.53 4.21 10zM12 16.5c-3.25 0-6 1.57-6 3.5v1h12v-1c0-1.93-2.75-3.5-6-3.5z"/>
              </svg>
              <div class="text-left infoTab">
                <div class="font-semibold titleTab">Level 6</div>
                <div class="text-sm infotitleTab">UK Bachelor's degree</div>
              </div>
            </button>

            <button class="tab-btn flex items-center gap-3 pt-4 rounded-lg hover:bg-slate-700" data-tab="level-7" aria-controls="level-7" aria-selected="false" id="tab-level-7" aria-controls="level-7" role="tab" >
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#612235" class="iconTab w-6 h-6 text-blue-600">
              <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM4.21 10L12 14.47 19.79 10 12 5.53 4.21 10zM12 16.5c-3.25 0-6 1.57-6 3.5v1h12v-1c0-1.93-2.75-3.5-6-3.5z"/>
              </svg>
              <div class="text-left infoTab">
                <div class="font-semibold titleTab">Level 7</div>
                <div class="text-sm infotitleTab">Postgraduate programmes</div>
              </div>
            </button>

            <button class="tab-btn flex items-center gap-3 pt-4 rounded-lg hover:bg-slate-700" data-tab="level-8" aria-controls="level-8" aria-selected="false" id="tab-level-8" aria-controls="level-8" role="tab" >
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#612235" class="iconTab w-6 h-6 text-blue-600">
              <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM4.21 10L12 14.47 19.79 10 12 5.53 4.21 10zM12 16.5c-3.25 0-6 1.57-6 3.5v1h12v-1c0-1.93-2.75-3.5-6-3.5z"/>
              </svg> 
              <div class="text-left infoTab">
                <div class="font-semibold titleTab">Level 8</div>
                <div class="text-sm infotitleTab">Doctoral level programmes</div>
              </div>
            </button>

          </div>
        </div>

        <!-- Right: tab content (span 2 cols on md) -->
        <div class="md:col-span-2">
          <div class="tab-content bg-transparent text-white">

            <div id="level-3" role="tabpanel" aria-labelledby="tab-level-3" class="tab-panel">
              <p class="font-bold text-2xl">OTHM Level 3 Award in Assessing Vocationally Related Achievement</p>
              <ul class="mt-3 space-y-2 list-disc list-inside text-slate-100 text-base">
                <li>OTHM Level 3 Diploma in Business Management</li>
                <li>OTHM Level 3 Diploma in Business Studies</li>
                <li>OTHM Level 3 Diploma in Fashion and Textiles</li>
                <li>OTHM Level 3 Foundation Diploma for Higher Education Studies</li>
                <li>OTHM Level 3 Foundation Diploma in Accountancy</li>
                <li>OTHM Level 3 Foundation Diploma in Employability and Workplace Skills</li>
                <li>OTHM Level 3 Foundation Diploma in Engineering</li>
                <li>OTHM Level 3 Foundation Diploma in Health and Social Care</li>
                <li>OTHM Level 3 Foundation Diploma in Information Technology</li>
                <li>OTHM Level 3 Foundation Diploma in People and Organisations</li>
              </ul>
            </div>

            <div id="level-4" role="tabpanel" aria-labelledby="tab-level-4" class="tab-panel hidden">
              <p class="font-bold text-2xl">Year 1 of a Three-year UK Bachelor's degree</p>
              <ul class="mt-3 space-y-2 list-disc list-inside text-slate-100 text-base">
                <li>OTHM Level 4 Diploma in Accounting and Business</li>
                <li>OTHM Level 4 Diploma in Business Management</li>
                <li>OTHM Level 4 Diploma in Education and Training Management</li>
                <li>OTHM Level 4 Diploma in Health and Social Care Management</li>
                <li>OTHM Level 4 Diploma in Information Technology</li>
                <li>OTHM Level 4 Diploma in Logistics and Supply Chain Management</li>
                <li>OTHM Level 4 Diploma in Tourism and Hospitality Management</li>
                <li>OTHM Level 4 Award in Internal Quality Assurance of Assessment Processes and Practice</li>
                <li>OTHM Level 4 Certificate in Leading the Internal Quality Assurance of Assessment Processes and Practice</li>
              </ul>
            </div>

            <div id="level-5" role="tabpanel" aria-labelledby="tab-level-5" class="tab-panel hidden">
              <p class="font-bold text-2xl">Year 2 of a Three-year UK Bachelor's degree</p>
              <ul class="mt-3 space-y-2 list-disc list-inside text-slate-100 text-base">
                <li>OTHM Level 5 Diploma in Accounting and Business</li>
                <li>OTHM Level 5 Diploma in Business Management</li>
                <li>OTHM Level 5 Diploma in Education and Training - see additional centre resource requirements</li>
                <li>OTHM Level 5 Diploma in Health and Social Care Management</li>
                <li>OTHM Level 5 Diploma in Information Technology</li>
                <li>OTHM Level 5 Diploma in Logistics and Supply Chain Management</li>
                <li>OTHM Level 5 Diploma in Tourism and Hospitality Management</li>
                <li>OTHM Level 5 Extended Diploma in Accounting and Business</li>
                <li>OTHM Level 5 Extended Diploma in Business Management</li>
                <li>OTHM Level 5 Extended Diploma in Health and Social Care Management</li>
                <li>OTHM Level 5 Extended Diploma in Logistics and Supply Chain Management</li>
                <li>OTHM Level 5 Extended Diploma in Psychology</li>
                <li>OTHM Level 5 Extended Diploma in Tourism and Hospitality Management</li>
              </ul>
            </div>

            <div id="level-6" role="tabpanel" aria-labelledby="tab-level-6" class="tab-panel hidden">
              <p class="font-bold text-2xl">Year 3 (Final year) of a Three-year UK Bachelor's degree</p>
              <ul class="mt-3 space-y-2 list-disc list-inside text-slate-100 text-base">
                <li>OTHM Level 6 Certificate in Academic and Professional Skills Development</li>
                <li>OTHM Level 6 Diploma in Accounting and Business</li>
                <li>OTHM Level 6 Diploma in Business Management</li>
                <li>OTHM Level 6 Diploma in Health and Social Care Management</li>
                <li>OTHM Level 6 Diploma in Information Technology</li>
                <li>OTHM Level 6 Diploma in Logistics and Supply Chain Management</li>
                <li>OTHM Level 6 Diploma in Teaching and Learning</li>
                <li>OTHM Level 6 Diploma in Tourism and Hospitality Management</li>
              </ul>
            </div>

            <div id="level-7" role="tabpanel" aria-labelledby="tab-level-7" class="tab-panel hidden">
              <p class="font-bold text-2xl">Postgraduate programmes</p>
              <ul class="mt-3 space-y-2 list-disc list-inside text-slate-100 text-base">
                <li>OTHM Level 7 Certificate in Research Methods</li>
                <li>OTHM Level 7 Diploma in Accounting and Finance</li>
                <li>OTHM Level 7 Diploma in Coaching and Mentoring</li>
                <li>OTHM Level 7 Diploma in Education Management and Leadership</li>
                <li>OTHM Level 7 Diploma in Health and Social Care Management</li>
                <li>OTHM Level 7 Diploma in Human Resource Management</li>
                <li>OTHM Level 7 Diploma in International Business IT</li>
                <li>OTHM Level 7 Diploma in Logistics and Supply Chain Management</li>
                <li>OTHM Level 7 Diploma in Police Leadership and Management</li>
                <li>OTHM Level 7 Diploma in Project Management</li>
                <li>OTHM Level 7 Diploma in Public Administration</li>
                <li>OTHM Level 7 Diploma in Risk Management</li>
                <li>OTHM Level 7 Diploma in Strategic Management and Leadership</li>
                <li>OTHM Level 7 Diploma in Strategic Marketing</li>
                <li>OTHM Level 7 Diploma in Tourism and Hospitality Management</li>
              </ul>
            </div>

            <div id="level-8" role="tabpanel" aria-labelledby="tab-level-8" class="tab-panel hidden">
              <p class="font-bold text-2xl">Doctoral level programmes</p>
              <ul class="mt-3 space-y-2 list-disc list-inside text-slate-100 text-base">
                <li>OTHM Level 8 Diploma in Strategic Management and Leadership Practice</li>
              </ul>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>


@include('partials.frontend.testimonial') 


<section class="text-white faqs bg-primary-one px-2 md:px-12 lg:px-20 mx-auto py-10">
  <div class="container mx-auto">
    <h3 class="text-4xl text-center text-black py-5">
      Frequently Asked Questions – Easy Help Desk
    </h3>

    <div class="grid lg:grid-cols-2 md:grid-cols-1 grid-cols-1 items-center">
      <div class="text-center">
        <img src="{{asset('imgs/faq-sec-2.webp')}}" class="img-fluid mx-auto hidden md:block" alt="Frequently Asked Questions"
          title="Frequently Asked Questions" width="453" height="560">
      </div>

      <div class="space-y-2 py-5 px-3">

        <!-- FAQ 1 -->
        <div class="content faq-internal-styling" data-no="0">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="0">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">1-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How do you ensure the originality of OTHM assignments?</h4>
            </div>
            <div class="icons text-right w-1/4">
              <i class="fa fa-minus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide0" style="display: block;">
          Your OTHM paper is guaranteed to be 100% original and free from plagiarism. Our platform features real writers who craft content from scratch. They do not use AI tools or plagiarise from other sources. Additionally, each paper is checked using reliable tools, such as Turnitin, to ensure 100% originality.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="content faq-internal-styling" data-no="1">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="1">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">2-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you provide OTHM assignment help for all levels of study, including undergraduate and postgraduate?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide1" style="display: none;">
          Yes, we provide OTHM assignment help for all levels of study, including undergraduate and postgraduate. Our writers are proficient and knowledgeable at all academic levels, and they will help you meet your academic expectations. They customise every assignment according to your qualification level and requirements.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="content faq-internal-styling" data-no="2">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="2">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">3-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What if I need urgent OTHM assignment help? Do you offer express services?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide2" style="display: none;">
          Yes, if you need urgent OTHM assignment help, we do offer express services. Our seasoned writers can accommodate urgent orders since they are efficient and have developed great writing speed over the years.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="content faq-internal-styling" data-no="3">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="3">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">4-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What subjects or courses within OTHM do you cover in your assignment help services?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide3" style="display: none;">
          We cover a wide range of subjects and courses within OHTM in our assignment help services, ensuring that students of all levels can receive our guidance. It includes human resource management, education and training, business management, accounting and finance, health and social care, and more.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">5-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How do you ensure the relevance of content in OTHM assignments?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
          Our expert writers have academic as well as industry experience. They are well-aware of the guidelines, grading criteria and learning outcomes. They use credible and up-to-date sources for accurate and relevant content in your OTHM assignments.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">6-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Are your writers familiar with OTHM’s grading and marking criteria?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
          Yes, our writers are familiar with OTHM’s grading and marking criteria. They create plagiarism-free OTHM assignments backed by deep research. They strictly adhere to the academic guidelines of UK universities and are familiar with the formatting, structures, and citation styles used in these institutions. We also offer multiple revisions for your complete satisfaction. 
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">7-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you offer proofreading and editing for OTHM assignments?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
          Yes, of course, we offer editing and rewriting services for OTHM assignments, refining aspects such as grammar, structure, format, vocabulary, and other elements. Our eagle-eyed editors make sure there are no flaws in your work.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">8-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you offer discounts for multiple OTHM assignments or bulk orders?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
          Yes, we offer discounts and special offers for multiple OTHM assignment orders to help you manage your budget. The more assignments you book on our website, the more money you can save.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">9-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What happens if I’m not satisfied with the OTHM assignment I receive?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
          If you are not satisfied, no problem at all. We offer limitless revisions until you are happy with the work. Besides, there are no extra charges for these edits. Your satisfaction is our top priority.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">10-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What makes your OTHM assignment help different from others in the UK?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
          Unlike other writing services in the UK, our OTHM assignment help offers subject-specific expertise to students, delivering quality work at reasonable rates and with the quickest turnaround time. Apart from that, to make the whole process smooth and easy for you, we offer 24/7 customer care and countless edits without any extra charges.
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

  
<section class="cta-section py-16">
  <div class="cta-container container mx-auto px-6 lg:px-16 grid grid-cols-1 lg:grid-cols-2 items-center gap-10 py-5 lg:py-0">

    <!-- Left Side (Text) -->
    <div class=" text-white">
      <h3 class="text-3xl font-semibold mb-5 leading-snug">
        Simplify Your OTHM Experience and Make It Worthwhile
      </h3>
      <p class="text-base text-gray-100 leading-relaxed max-w-md">
        If complex units are holding you back, then you have landed on the right platform. With professional writers by your side, you can definitely ace your tough assignments, meeting the required criteria of OTHM qualifications.
      </p>

      <div class="flex flex-col sm:flex-row items-center gap-4 mt-10">
         <a href="{{route('order')}}" class="btn-order"> Order Now 
          <span class="icon-box"><i class="fa fa-chevron-right"></i></span>
        </a>
            <a href="{{route('price')}}" class="btn-order lg:mt-0 mt-5">
                Check Pricing Plan
                <span class="icon-box"><i class="fa fa-chevron-right"></i></span>
            </a>
      </div>
    </div>

    <!-- Right Side (Image) -->
    <div class="flex justify-center lg:justify-end">
      <img src="{{ asset('imgs/cta-girl.webp') }}" 
           alt="Sign Up Now" 
           class="max-w-full h-auto rounded-lg drop-shadow-lg hidden md:block"
           width="555" height="370" />
    </div>

  </div>
</section>



  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const tabButtons = document.querySelectorAll('.tab-btn');
      const panels = document.querySelectorAll('.tab-panel');

      function activateTab(tabId) {
        // buttons
        tabButtons.forEach(btn => {
          const isActive = btn.dataset.tab === tabId;
          btn.classList.toggle('bg-indigo-700', isActive);
          btn.classList.toggle('hover:bg-slate-700', !isActive);
          btn.setAttribute('aria-selected', isActive ? 'true' : 'false');
        });

        // panels
        panels.forEach(panel => {
          panel.classList.toggle('hidden', panel.id !== tabId);
        });
      }

      // initial state: ensure level-3 is active
      activateTab('level-3');

      tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          activateTab(btn.dataset.tab);
          // move focus for keyboard users
          btn.focus();
        });
      });
    });
  </script>

@endsection


