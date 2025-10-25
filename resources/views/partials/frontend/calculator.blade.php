<div class=" col-span-12 lg:col-span-5 mt-4 lg:mt-0">
        <div class="calculator mx-auto lg:mx-0 sm:max-w-sm md:max-w-md lg:max-w-lg px-4 relative ">
            <div class="calculator-bg px-5 px-lg-0 border-black p-6 space-y-4">
                <div class="pricing text-center ">
                    <span
                        class="text-white text-base font-semibold  p-2 md:p-2 px-4">
                       Hire OTHM Experts!
                    </span>
                </div>
    
                <div class="flex flex-col mt-2 md:mt-5">
                    <select name="paper_type" class="form-select" aria-label="Paper Type">
                        <option  hidden="" value="0" disabled="" selected="">Paper Type</option>
                        @foreach ($paper_types as $paper_type)
                            <option class="text-sm font-bold"  value="{{ $paper_type->id }}">{{ $paper_type->name }}</option>
                        @endforeach
                        {{-- {{ old('paper_type') == $paper_type ? 'selected' : '' }} --}}
                    </select>
                </div>
    
                <div class="flex flex-col">
                    <select name="academic_level" id="academic_level" class="form-select get-fare" aria-label="Academic Level">
                        <option hidden="" value="0" disabled="" selected="">Select Level</option>
                        @foreach ($academic_levels as $academic_level )
                        <option  class="text-sm font-bold" value="{{ $academic_level->id }}">{{ $academic_level->name }}</option>    
                        @endforeach
                        
                    </select>
                </div>
    
                <div class="flex flex-col">
                    <select id="deadline" name="deadlines" class="form-select get-fare" aria-label="Deadlines"> 
                        <option hidden="" value="0" disabled="" selected="">Deadline</option>
                        @foreach ($deadlines as $deadline)
                            <option class="text-sm font-bold" value="{{ $deadline->id }}">{{ $deadline->name }}</option>    
                        @endforeach
                        
                    </select>
                </div>
                <div class="get-fare flex flex-col">
                    <select name="Pages" id="no_of_pages" class="form-select get-fare" aria-label="No of Pages">
                        <option hidden="" value="0" disabled="" selected="">No of words / Pages</option>
                        @for ($i=1; $i<=200 ; $i++)
                        <option value="{{ $i }}" class="text-sm font-bold">
                            {{ 250*$i . ' ' . 'Words'. ' ' . '-' . ' '. $i .' ' .'Pages' }}
                        </option>
                        @endfor
                        
                    </select>
                </div>
                <div class="flex flex-row justify-center items-center font-semibold leading-[45px] space-x-2">
                    <div class="text-white">Total Price :</div>
                    <div class="text-white">£ </div>
                    <div class="text-white" id="cost">0</div>
                </div>
                <div class="flex justify-center items-center">
                   <a href="{{route('order')}}" class="btn-order"> Order Now 
                    <span class="icon-box"><i class="fa fa-chevron-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>