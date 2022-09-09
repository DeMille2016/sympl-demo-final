<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite('resources/css/app.css')

    </head>
<body>
<!--
  This example requires Tailwind CSS v2.0+
-->
<div class="max-w-lg mx-auto">
    <div>
        <div class="text-center">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 48 48" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M34 40h10v-4a6 6 0 00-10.712-3.714M34 40H14m20 0v-4a9.971 9.971 0 00-.712-3.714M14 40H4v-4a6 6 0 0110.713-3.714M14 40v-4c0-1.313.253-2.566.713-3.714m0 0A10.003 10.003 0 0124 26c4.21 0 7.813 2.602 9.288 6.286M30 14a6 6 0 11-12 0 6 6 0 0112 0zm12 6a4 4 0 11-8 0 4 4 0 018 0zm-28 0a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <h2 class="mt-2 text-lg font-medium text-gray-900">Add projects to team members</h2>
        </div>
        <form action="#" class="mt-6 flex">
            <label for="email" class="sr-only">Email address</label>
            <input type="text" name="email" id="email" class="py-2 px-3 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Enter an email" />
            <select id="location" name="location" class="ml-1 shadow-sm block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option>Project 1</option>
                <option selected>Another project</option>
                <option>Third project</option>
            </select>
            <button type="submit" class="ml-4 flex-shrink-0 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Link</button>
        </form>
    </div>
    <div class="mt-10">
        <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Team members + projects</h3>
        <ul role="list" class="mt-4 border-t border-b border-gray-200 divide-y divide-gray-200">


            @foreach($users as $user)
                <li class="py-4 flex items-center justify-between space-x-3">
                    <div class="min-w-0 flex-1 flex items-center space-x-3">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-sm font-medium text-gray-900 truncate">{{$user->name}}</p>
                        </div>
                        <div class="flex-shrink-0">
                            @foreach($user->projects as $project)
                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800"> {{$project->name}} </span>
                            @endforeach
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
</body>
</html>