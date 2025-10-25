@extends('layouts.web')

@section('title', "OTHM Assignment Help UK Reviews - See Our Clients Feedback")
@section('description', "Check out our clients' reviews to understand why OTHM Assignment Help UK is trusted by Students. See how we have helped students to achieve success.")
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<main>

  <section class=" mx-auto px-5 md:px-14 lg:px-32 py-10" style="background: rgb(246, 246, 246);">
    <h1 class="text-4xl font-semibold pb-8 text-primary text-center">Explore Authentic Feedback from Students</h1>
    <ul class=" relative grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <li
        class="review-styling shadow-lg py-3 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100">
        <img class=" mx-auto text-center" src="{{asset('imgs/lily.webp')}}" width="90" height="90" alt="Lily"
          title="Lily">
        <div class="flex items-center p-4 ">
          <div class="ml-4 leading-5">
            <div class="mt-1 text-sm text-center">
              “I was struggling with my OTHM Level 7 assignment, but the team did a pretty good job. The paper was well-researched, perfectly structured, and I got a distinction for the first time. I'm really happy about it!”
            </div>
          </div>
        </div>
        <hr class="w-[50%] mx-auto h-2 ">
        <p class="text-lg font-semibold text-center">Lily</p>
        <ul class="flex justify-center mb-5">

          <li class="my-auto text-cyan-600">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>

        </ul>
      </li>
      <li
        class="review-styling shadow-lg py-3 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100">
        <img class=" mx-auto text-center" src="{{asset('imgs/brexton.webp')}}" width="90" height="90" alt="Braxton"
          title="Braxton">
        <div class="flex items-center p-4 ">
          <div class="ml-4 leading-5">
            <div class="mt-1 text-sm text-center">
              “My OTHM project was due the next day, and they saved me from failing. The quality was superb and the analysis was absolutely correct. Truly commendable service, I have recommended it to my friends too.”
            </div>
          </div>
        </div>
        <hr class="w-[50%] mx-auto h-2 ">
        <p class="text-lg font-semibold text-center">Braxton </p>
        <ul class="flex justify-center mb-5">

          <li class="my-auto text-cyan-600">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>

        </ul>
      </li>
      <li
        class="review-styling shadow-lg py-3 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100">
        <img class=" mx-auto text-center" src="{{asset('imgs/chloe.webp')}}"
          width="90" height="90" alt="Chloe" title="Chloe">
        <div class="flex items-center p-4 ">
          <div class="ml-4 leading-5">
            <div class="mt-1 text-sm text-center">
              “I have previously utilised a few writing companies, none of which match this exceptional firm. They completely grasped my OTHM Level 5 project brief and did wonders with it. Kudos to the team!”
            </div>
          </div>
        </div>
        <hr class="w-[50%] mx-auto h-2 ">
        <p class="text-lg font-semibold text-center">Chloe</p>
        <ul class="flex justify-center mb-5">

          <li class="my-auto text-cyan-600">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>

        </ul>
      </li>
      <li
        class="review-styling shadow-lg py-3 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100">
        <img class=" mx-auto text-center" src="{{asset('imgs/everette.webp')}}"
          width="90" height="90" alt="Everett" title="Everett">
        <div class="flex items-center p-4 ">
          <div class="ml-4 leading-5">
            <div class="mt-1 text-sm text-center">
              “The writer appointed to my work was well-versed in OTHM requirements and standards. Everything was spot on from the research to the referencing. I cannot thank you enough for your wonderful work!”
            </div>
          </div>
        </div>
        <hr class="w-[50%] mx-auto h-2 ">
        <p class="text-lg font-semibold text-center">Everett</p>
        <ul class="flex justify-center mb-5">

          <li class="my-auto text-cyan-600">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>

        </ul>
      </li>
      <li
        class="review-styling shadow-lg py-3 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100">
        <img class=" mx-auto text-center" src="{{asset('imgs/sara.webp')}}"
          width="90" height="90" alt="Sara" title="Sara">
        <div class="flex items-center p-4 ">
          <div class="ml-4 leading-5">
            <div class="mt-1 text-sm text-center">
              “I received an A even though I was not expecting much. They included relevant real-world examples that made my work even more credible and interesting to read. Even revised my paper when I told them to, without any hassle.”
            </div>
          </div>
        </div>
        <hr class="w-[50%] mx-auto h-2 ">
        <p class="text-lg font-semibold text-center">Sara</p>
        <ul class="flex justify-center mb-5">

          <li class="my-auto text-cyan-600">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>

        </ul>
      </li>
      <li
        class="review-styling shadow-lg py-3 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100">
        <img class=" mx-auto text-center" src="{{asset('imgs/parker.webp')}}"
          width="90" height="90" alt="Parker" title="Parker">
        <div class="flex items-center p-4 ">
          <div class="ml-4 leading-5">
            <div class="mt-1 text-sm text-center">
              “At first, I was doubtful about taking help from them, but the team surpassed all expectations. My OTHM assignment was flawlessly written in line with every guideline. They even offered revisions to guarantee I was completely satisfied.”
            </div>
          </div>
        </div>
        <hr class="w-[50%] mx-auto h-2 ">
        <p class="text-lg font-semibold text-center">Parker </p>
        <ul class="flex justify-center mb-5">

          <li class="my-auto text-cyan-600">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>
          <li class="my-auto">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
              class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor"
                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
              </path>
            </svg>
          </li>

        </ul>
      </li>
      
    </ul>
  </section>
</main>

@endsection