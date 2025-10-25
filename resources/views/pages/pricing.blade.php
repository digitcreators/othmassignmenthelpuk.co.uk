@extends('layouts.web')
@section('title', 'OTHM Assignment Help UK  - Transparent & Fair Rates')
@section('description', 'Check the pricing at OTHM Assignment Help UK to see how we balance affordability and quality. Flexible plans designed to support every student’s needs.')
@section('canonical', config('app.app_url') . Request::path())

@section('content')
<style>
    /*.overflow-x-auto::-webkit-scrollbar {*/
    /*    height: 8px;*/
    /*}*/
    
    /*.overflow-x-auto::-webkit-scrollbar-track {*/
    /*    background: #101820; */
    /*    border-radius: 10px;*/
    /*}*/
    
    /*.overflow-x-auto::-webkit-scrollbar-thumb {*/
    /*    background: #ae0000; */
    /*    border-radius: 10px;*/
    /*}*/
.hover\:bg-primary-one:hover {
    --tw-bg-opacity: 1;
    background-color: var(--color-secondary);
}
.border-primary-one {
    --tw-border-opacity: 1;
    border-color: var(--color-primary);
}
</style>
<section class="container py-6 px-4 mx-auto" x-data="datatables()" x-cloak>
    <h1 class="text-4xl font-semibold py-8 text-primary text-center">Affordable Rates, Uncompromised Quality</h1>

    <div class=" bg-white border border-primary-one shadow-lg relative   overflow-x-auto">
          <table class="border-collapse table-auto w-full whitespace-no-wrap table-striped relative" >
            <thead>
                <tr class="text-center">
                    <th class=" bg-primary-one border border-primary-one sticky top-0 px-2 md:px-6 py-2 font-bold tracking-wider text-base whitespace-nowrap overflow-hidden ">
                        Deadline / Academic Level
                    </th>
                    @foreach($academicLevels as $level)
                        <th class=" bg-primary-one border border-primary-one sticky top-0 px-2 md:px-6 py-2 font-bold tracking-wider text-base whitespace-nowrap overflow-hidden">
                            {{ $level->name }}
                        </th>
                    @endforeach
                 </tr>
            </thead>
            <tbody>
                @foreach($deadlines as $deadline)
                    <tr class="hover:bg-primary-one hover:text-white">
                        <td class="border border-t border-primary-one days">
                            <span class="px-2 md:px-6 py-2 flex justify-center items-center text-base">{{ $deadline->name }}</span>
                        </td>
                        @foreach($academicLevels as $level)
                            @php
                                $price = $fares->where('academic_level_id', $level->id)
                                               ->where('deadline_id', $deadline->id)
                                               ->first();
                            @endphp
                            <td class="border border-t border-primary-one days">
                                <span class="px-2 md:px-6 py-2 flex justify-center items-center text-base">{{ $price ? $price->per_page_price . ' GBP' : 'N/A' }}</span>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

        
    </div>
    <div class=" flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4  mt-10">
          <a class="fancy" href="{{route('order')}}">
            <span class="top-key"></span>
            <span class="text">Place An Order</span>
            <span class="bottom-key-1"></span>
            <span class="bottom-key-2"></span>
            </a>
            <a href="javascript:void(Tawk_API.toggle())" class="btn-pri lg:mt-0 mt-5">
                Chat Now
            </a>
    </div>
</section>

@endsection

@section('scripts')
<script>
    function datatables() {
        return {
            headings: [
                
                {
                    'key': 'days',
                    'value': 'No. Of Days'
                },
                {
                    'key': 'highschool',
                    'value': 'High School'
                },
                {
                    'key': 'undergraduate',
                    'value': 'Under Graduate'
                },
                {
                    'key': 'masters',
                    'value': 'Masters'
                },
                {
                    'key': 'phd',
                    'value': 'PHD'
                },
                
                
            ],
            users: [
                {
                "userId": 1,
                "days": "20 Days +",
                "highschool": "QAR 30",
                "undergraduate": "QAR 40",
                "masters": "QAR 50",
                "phd": "QAR 60",
            },{
                "userId": 2,
                "days": "15 Days",
                "highschool": "QAR 35",
                "undergraduate": "QAR 45",
                "masters": "QAR 55",
                "phd": "QAR 65",

            },  {
                "userId": 3,
                "days": "10 Days",
                "highschool": "QAR 45",
                "undergraduate": "QAR 55",
                "masters": "QAR 65",
                "phd": "QAR 75",
            }, {
                "userId": 4,
                "days": "7 Days",
                "highschool": "QAR 50",
                "undergraduate": "QAR 60",
                "masters": "QAR 70",
                "phd": "QAR 80",
            }, {
                "userId": 5,
                "days": "6 Days",
                "highschool": "QAR 55",
                "undergraduate": "QAR 65",
                "masters": "QAR 75",
                "phd": "QAR 85",
            }, {
                "userId": 6,
                "days": "5 Days",
                "highschool": "GBP 60",
                "undergraduate": "GBP 70",
                "masters": "GBP 80",
                "phd": "GBP 90",
            }, {
                "userId": 7,
                "days": "4 Days",
                "highschool": "QAR 65",
                "undergraduate": "QAR 75",
                "masters": "QAR 85",
                "phd": "QAR 95",
            }, {
                "userId": 8,
                "days": "3 Days",
                "highschool": "QAR 70",
                "undergraduate": "QAR 85",
                "masters": "QAR 95",
                "phd": "QAR 105",
            }, {
                "userId": 9,
                "days": "2 Days",
                "highschool": "QAR 85",
                "undergraduate": "QAR 105",
                "masters": "QAR 115",
                "phd": "QAR 125",
            }, {
                "userId": 10,
                "days": "24 Hours",
                "highschool": "QAR 105,
                "undergraduate": "QAR 115",
                "masters": "QAR 125",
                "phd": "QAR 135",
            }, {
                "userId": 11,
                "days": "12 Hours",
                "highschool": "QAR 145",
                "undergraduate": "QAR 155",
                "masters": "QAR 165",
                "phd": "QAR 175",
            }, {
                "userId": 12,
                "days": "6 Hours",
                "highschool": "QAR 165",
                "undergraduate": "QAR 175",
                "masters": "QAR 185",
                "phd": "QAR 195",
            }],
            selectedRows: [],

            open: false,
            
            // toggleColumn(key) {
            //     // Note: All td must have the same class name as the headings key! 
            //     let columns = document.querySelectorAll('.' + key);

            //     if (this.$refs[key].classList.contains('hidden') && this.$refs[key].classList.contains(key)) {
            //         columns.forEach(column => {
            //             column.classList.remove('hidden');
            //         });
            //     } else {
            //         columns.forEach(column => {
            //             column.classList.add('hidden');
            //         });
            //     }
            // },

            getRowDetail($event, id) {
                let rows = this.selectedRows;

                if (rows.includes(id)) {
                    let index = rows.indexOf(id);
                    rows.splice(index, 1);
                } else {
                    rows.push(id);
                }
            },

            selectAllCheckbox($event) {
                let columns = document.querySelectorAll('.rowCheckbox');

                this.selectedRows = [];

                if ($event.target.checked == true) {
                    columns.forEach(column => {
                        column.checked = true
                        this.selectedRows.push(parseInt(column.name))
                    });
                } else {
                    columns.forEach(column => {
                        column.checked = false
                    });
                    this.selectedRows = [];
                }
            }
        }
    }
</script>
@endsection