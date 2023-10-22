@extends("layouts.app")
@section("content")
<form  class="container mx-auto w-[800px] my-6" method="post" action="{{ route("register") }}">
    @csrf
    <div class="space-y-12">
      <div class="pb-5">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Registration</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Enter your all information for registration.</p>

        <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900">First name</label>
            <div class="mt-2">
              <input type="text" name="name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-300 sm:text-sm sm:leading-6" placeholder="Full Name">
            </div>
          </div>

          <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
              <input name="email" type="email" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-300 sm:text-sm sm:leading-6" placeholder="Enter Email">
            </div>
          </div>

          <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
              <input name="password" type="password" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-300 sm:text-sm sm:leading-6" placeholder="Password">
            </div>
          </div>

          <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
            <div class="mt-2">
              <input name="password_confirmation" type="password" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-300 sm:text-sm sm:leading-6" placeholder="Confirm Password">
            </div>
           </div>
        </div>
    </div>
    </div>

    <div class="flex items-center justify-start mt-6 gap-x-6">
      <button type="reset" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign Up</button>
    </div>
  </form>

@endsection
