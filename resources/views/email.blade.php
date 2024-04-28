@extends('layouts.index')
@section('content')
@foreach ($contacts as $contact)
{{-- <h1>Contact Us Message</h1>
<p>Name: {{ $contact->name }}</p>
<p>Email: {{ $contact->email }}</p>
<p>Email: {{ $contact->phone }}</p>

<p>Message:</p>
<p>{{ $contact->message }}</p>     --}}
<div class="overflow-x-auto">
    <table class="min-w-full bg-white font-[sans-serif]">
      <thead class="bg-gray-700 whitespace-nowrap">
        <tr>
          <th class="pl-6 w-8">
            <input id="checkbox" type="checkbox" class="hidden peer" />
            <label for="checkbox"
              class="relative flex items-center justify-center p-0.5 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer bg-blue-500 border border-gray-400 rounded overflow-hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-white" viewBox="0 0 520 520">
                <path
                  d="M79.423 240.755a47.529 47.529 0 0 0-36.737 77.522l120.73 147.894a43.136 43.136 0 0 0 36.066 16.009c14.654-.787 27.884-8.626 36.319-21.515L486.588 56.773a6.13 6.13 0 0 1 .128-.2c2.353-3.613 1.59-10.773-3.267-15.271a13.321 13.321 0 0 0-19.362 1.343q-.135.166-.278.327L210.887 328.736a10.961 10.961 0 0 1-15.585.843l-83.94-76.386a47.319 47.319 0 0 0-31.939-12.438z"
                  data-name="7-Check" data-original="#000000" />
              </svg>
            </label>
          </th>
          <th class="px-6 py-3 text-left text-sm font-semibold text-white">
            Name
          </th>
          <th class="px-6 py-3 text-left text-sm font-semibold text-white">
            Email
          </th>
          <th class="px-6 py-3 text-left text-sm font-semibold text-white">
            Phone
          </th>
          <th class="px-6 py-3 text-left text-sm font-semibold text-white">
            Joined At
          </th>
          <th class="px-6 py-3 text-left text-sm font-semibold text-white">
            Message
          </th>
        </tr>
      </thead>
      <tbody class="whitespace-nowrap">
        <tr class="even:bg-blue-50">
          <td class="pl-6 w-8">
            <input id="checkbox1" type="checkbox" class="hidden peer" />
            <label for="checkbox1"
              class="relative flex items-center justify-center p-0.5 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer bg-blue-500 border border-gray-400 rounded overflow-hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-white" viewBox="0 0 520 520">
                <path
                  d="M79.423 240.755a47.529 47.529 0 0 0-36.737 77.522l120.73 147.894a43.136 43.136 0 0 0 36.066 16.009c14.654-.787 27.884-8.626 36.319-21.515L486.588 56.773a6.13 6.13 0 0 1 .128-.2c2.353-3.613 1.59-10.773-3.267-15.271a13.321 13.321 0 0 0-19.362 1.343q-.135.166-.278.327L210.887 328.736a10.961 10.961 0 0 1-15.585.843l-83.94-76.386a47.319 47.319 0 0 0-31.939-12.438z"
                  data-name="7-Check" data-original="#000000" />
              </svg>
            </label>
          </td>
          <td class="px-6 py-4 text-sm">
            {{ $contact->name }}
          </td>
          <td class="px-6 py-4 text-sm">
            {{ $contact->email }}
          </td>
          <td class="px-6 py-4 text-sm">
            {{ $contact->phone }}
          </td>
          <td class="px-6 py-4 text-sm">
            {{ $contact->created_at }}
          </td>
          <td class="px-6 py-4">
                {{ $contact->message }}
          </td>
        </tr>

      </tbody>
    </table>
  </div>
@endforeach

@endsection