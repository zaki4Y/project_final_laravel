@extends('layouts.index')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
    <div class="bg-[#C9E3CC] h-screen flex flex-row-reverse gap-y-9 gap-x-5 items-center justify-center  w-full">
        <div class="w-1/2 bg-white rounded-3xl border-none p-3" id="calendar"></div>
        @include('modal')
        {{-- @include('calendar.component.modalevent') --}}
    </div>

<div class="bg-[#C9E3CC]">
      <div class="flex flex-wrap gap-4 justify-center-600 lg:p-3 pe-3">
        @foreach ($reservations as $reservation)
            <div>

                <img src="https://source.unsplash.com/random/350x350" alt=" random imgee"
                    class="w-full object-cover object-center rounded-lg shadow-md">

                <div class="relative px-4 -mt-16  ">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="flex items-baseline">
                            <span
                                class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                                New
                            </span>
                            <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                                {{ $reservation->dateStart }} To {{ $reservation->dateEnd }}
                            </div>
                        </div>

                        <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">{{ $reservation->name }}
                        </h4>

                        <div class="mt-1">
                            150,00 DH
                            <span class="text-gray-600 text-sm"> /Days</span>
                        </div>
                        <div class="mt-4">
                            <span class="text-teal-600 text-md font-semibold">AT {{ $reservation->timeStart }} TO
                                {{ $reservation->timeEnd }} </span>
                            <div
                                class="font-[sans-serif] w-max mx-auto bg-gray-200 border divide-x divide-white flex rounded overflow-hidden">




                                <form action="{{ route('reservation.destroy', $reservation) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <div
                                        class="font-[sans-serif] w-max mx-auto bg-gray-200 border divide-x divide-white flex rounded overflow-hidden">
                                        <button type="submit"
                                            class="px-4 py-2.5 flex items-center text-[#333] text-sm font-semibold outline-none hover:bg-gray-300 transition-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" fill="currentColor"
                                                class="mr-2" viewBox="0 0 24 24">
                                                <path
                                                    d="M8.087 2a.989.989 0 0 0-.583.13l-7 4a1 1 0 0 0 0 1.737l7 4c.766.438 1.682-.256 1.467-1.111l-.316-1.27A.39.39 128.005 0 1 9.034 9H15.5c2.51 0 4.5 1.991 4.5 4.5S18.01 18 15.5 18H8a2 2 0 0 0 0 4h7.5c4.67 0 8.5-3.83 8.5-8.5S20.17 5 15.5 5H9.032a.39.39 52.01 0 1-.38-.485l.32-1.275A1.003 1.003 0 0 0 8.086 2z"
                                                    data-original="#000000" paint-order="fill markers stroke" />
                                            </svg>
                                            Undo
                                        </button>
                                    </div>
                                </form>



                                <form action="{{ route('reservation.update', $reservation) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    {{-- <button type="submit"
                                    class="px-6 py-2 rounded-full text-black text-sm tracking-wider font-medium outline-none border-2 border-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300">Update</button> --}}

                                    <button type="submit"
                                        class="px-4 py-2.5 flex items-center text-[#333] text-sm font-semibold outline-none hover:bg-gray-300 transition-all">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" fill="currentColor"
                                            class="mr-2" viewBox="0 0 24 24">
                                            <path
                                                d="m20 8.6-8.38 8.38c-.29.29-.67.47-1.08.51l-2.93.27H7.5c-.33 0-.65-.13-.88-.37-.26-.26-.39-.63-.36-1l.27-2.93c.04-.41.22-.79.51-1.08L15.4 4zm1.94-5.83-.71-.71a2.758 2.758 0 0 0-3.89 0l-.88.88 4.6 4.6.88-.88a2.732 2.732 0 0 0 0-3.88zm-1.19 16.24V13.2c0-.41-.34-.75-.75-.75s-.75.34-.75.75v5.81c0 1.24-1.01 2.25-2.25 2.25H5c-1.24 0-2.25-1.01-2.25-2.25V7c0-1.24 1.01-2.25 2.25-2.25h5.81c.41 0 .75-.34.75-.75s-.34-.75-.75-.75H5C2.93 3.25 1.25 4.93 1.25 7v12c0 2.07 1.68 3.75 3.75 3.75h12c2.07 0 3.75-1.68 3.75-3.75z"
                                                data-original="#000000" />
                                        </svg>
                                        Edit
                                    </button>
                                </form>


                                {{-- <a href="/about"> --}}
                                    <form action="/session" method="get">
                                        @csrf
                                    <button type="submit"
                                    class="px-4 py-2.5 flex items-center text-[#333] text-sm font-semibold outline-none hover:bg-gray-300 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18px" fill="currentColor"
                                        class="mr-2" viewBox="0 0 6.35 6.35">
                                        <path fill-rule="evenodd"
                                            d="M3.181.264A2.92 2.92 0 0 0 .264 3.18a2.922 2.922 0 0 0 2.917 2.917A2.92 2.92 0 0 0 6.096 3.18 2.919 2.919 0 0 0 3.18.264zm0 .53A2.38 2.38 0 0 1 5.566 3.18 2.382 2.382 0 0 1 3.18 5.566 2.384 2.384 0 0 1 .794 3.179 2.383 2.383 0 0 1 3.181.794zm-.004 1.057a.265.265 0 0 0-.263.27v.794h-.793a.265.265 0 0 0-.028 0 .266.266 0 0 0 .028.53h.793v.794a.265.265 0 0 0 .531 0v-.793h.794a.265.265 0 0 0 0-.531h-.794v-.794a.265.265 0 0 0-.268-.27z"
                                            data-original="#000000" paint-order="stroke fill markers" />
                                    </svg>
                                    take it
                                </button>    
                                    </form>
                                    
                                {{-- </a> --}}



                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
    </div>
</div>
  





    {{-- <div class="wrapper bg-gray-400 antialiased flex-wrap text-gray-900"> --}}
    {{-- <div>
        
        <img src="https://source.unsplash.com/random/350x350" alt=" random imgee" class="w-full object-cover object-center rounded-lg shadow-md">    
        
     <div class="relative px-4 -mt-16  ">
       <div class="bg-white p-6 rounded-lg shadow-lg">
        <div class="flex items-baseline">
          <span class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
            New
          </span>
          <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
        2 baths  &bull; 3 rooms
      </div>  
        </div>
        
        <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">A random Title</h4>
     
      <div class="mt-1">
        $1800
        <span class="text-gray-600 text-sm">   /wk</span>
      </div>
      <div class="mt-4">
        <span class="text-teal-600 text-md font-semibold">4/5 ratings </span>
        <span class="text-sm text-gray-600">(based on 234 ratings)</span>
      </div>  
      </div>
     </div>
      
    </div>
      </div>
@endforeach --}}

    {{-- end: "2024-01-04 10:00:00"
start: "2024-01-04 09:00:00"
title: "Projet TEST" --}}


    <script>
        document.addEventListener('DOMContentLoaded', async function() {

            const {
                data
            } = await axios.get("/calendar/show")

            const events = data.events;



            var myCalendar = document.getElementById('calendar');


            var calendar = new FullCalendar.Calendar(myCalendar, {
                headerToolbar: {
                    left: 'dayGridMonth,timeGridWeek,timeGridDay',
                    center: 'title',
                    right: 'listMonth,listWeek,listDay'
                },
                views: {
                    listDay: { // Customize the name for listDay
                        buttonText: 'Day Events',
                    },
                    listWeek: {
                        buttonText: 'Week Events'
                    },
                    listMonth: {
                        buttonText: 'Month Events'
                    },
                    timeGridWeek: {
                        buttonText: 'Week',
                    },
                    timeGridDay: {
                        buttonText: "Day",
                    },
                    dayGridMonth: {
                        buttonText: "Month",
                    },

                },


                initialView: "timeGridWeek",
                slotMinTime: "09:00:00",
                slotMaxTime: "19:00:00",
                nowIndicator: true,
                selectable: true,
                selectMirror: true,
                selectOverlap: true,
                weekends: true,
                editable: true,





                events: events,

                selectAllow: (info) => {
                    let instant = new Date()
                    return info.start > instant
                },

                select: (info) => {

                    let start = info.start
                    let end = info.end


                    if (end.getDate() - start.getDate() > 0 && !info.allDay) {
                        alert("rak khditi bzaf dyal l wa9t")
                        calendar.unselect()
                        return
                    }
                    document.getElementById("date-start").value = formatDate(start).day
                    if (info.allDay) {
                        document.getElementById("date-end").value = formatDate(start).day
                        document.getElementById("time-start").value = "09:00:00"
                        document.getElementById("time-end").value = "19:00:00"
                    } else {
                        document.getElementById("date-end").value = formatDate(end).day
                        document.getElementById("time-start").value = formatDate(start).time
                        document.getElementById("time-end").value = formatDate(end).time
                    }


                    document.getElementById("clickMe").click()


                },

                eventClick: (info) => {


                    console.log(info);
                }


            });


            calendar.render();


            function formatDate(date) {
                let year = String(date.getFullYear())
                let month = String(date.getMonth() + 1).padStart(2, 0)
                let day = String(date.getDate()).padStart(2, 0)

                let hour = String(date.getHours()).padStart(2, 0)
                let min = String(date.getMinutes()).padStart(2, 0)
                let sec = String(date.getSeconds()).padStart(2, 0)

                return {
                    day: `${year}-${month}-${day}`,
                    time: `${hour}:${min}:${sec}`
                }


            }
        });
    </script>
@endsection
