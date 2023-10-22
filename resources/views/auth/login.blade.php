@extends("layouts.app")
@section("content")
<form action="{{route('login')}}" method="POST" class="container mx-auto w-[800px] my-6">
    @csrf
    <div class="mx-auto space-y-12">
      <div class="pb-5">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Login</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Enter your existing information.</p>

        <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
              <input name="email" type="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-300 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
              <input name="password" type="password"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-300 sm:text-sm sm:leading-6">
            </div>
          </div>
        </div>
    </div>
    </div>

    <div class="flex items-center justify-start mt-6 gap-x-6">
      <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
    </div>
  </form>

@endsection
