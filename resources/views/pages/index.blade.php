<x-admin-layout>
    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Student Data</li>
            </ol>
            <h6 class="mb-0 font-bold capitalize">Student Data</h6>
          </nav>

          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
              <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                </span>
                <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
              </div>
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
              <!-- online builder btn  -->
              <!-- <li class="flex items-center">
                <a class="inline-block px-8 py-2 mb-0 mr-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->
              <li class="flex items-center">
                <a href="../pages/sign-in.html" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                  <i class="fa fa-user sm:mr-1"></i>
                  <span class="hidden sm:inline">Sign In</span>
                </a>
              </li>
              <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  </div>
                </a>
              </li>
              <li class="flex items-center px-4">
                <a href="javascript:;" class="p-0 transition-all text-sm ease-nav-brand text-slate-500">
                  <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                  <!-- fixed-plugin-button-nav  -->
                </a>
              </li>

              <!-- notifications -->

              <li class="relative flex items-center pr-2">
                <p class="hidden transform-dropdown-show"></p>
                <a href="javascript:;" class="block p-0 transition-all text-sm ease-nav-brand text-slate-500" dropdown-trigger aria-expanded="false">
                  <i class="cursor-pointer fa fa-bell"></i>
                </a>

                <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                  <!-- add show class on dropdown open js -->
                  <li class="relative mb-2">
                    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                      <div class="flex py-1">
                        <div class="my-auto">
                          <img src="../assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl" />
                        </div>
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New message</span> from Laur</h6>
                          <p class="mb-0 leading-tight text-xs text-slate-400">
                            <i class="mr-1 fa fa-clock"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="relative mb-2">
                    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
                      <div class="flex py-1">
                        <div class="my-auto">
                          <img src="../assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-white text-sm bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl" />
                        </div>
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New album</span> by Travis Scott</h6>
                          <p class="mb-0 leading-tight text-xs text-slate-400">
                            <i class="mr-1 fa fa-clock"></i>
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="relative">
                    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
                      <div class="flex py-1">
                        <div class="inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-nav-brand text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-1 font-normal leading-normal text-sm">Payment successfully completed</h6>
                          <p class="mb-0 leading-tight text-xs text-slate-400">
                            <i class="mr-1 fa fa-clock"></i>
                            2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- end Navbar -->

      <div>
        <div class="shadow  px-6  py-4  bg-white  rounded  sm:px-1  sm:py-1  ">
            <div class="grid  grid-cols-12">
                <div class="col-span-6 p-4">
                    <a href="{{route('student-data.create')}}">
                        <button class="px-4  py-1  text-sm  rounded  text-purple-600  font-semibold    border  border-purple-200  hover:text-white  hover:bg-purple-600  hover:border-transparent  focus:outline- none">ADD Data</button>
                    </a>
                    @if ($student->count()>0)
                    <a href="{{ route('exportPDF') }}">
                        <button class="px-4  py-1  text-sm  rounded  text-red-600  font-semibold   border  border-red-200  hover:text-white  hover:bg-red-600  hover:border-transparent  focus:outline- none">Export PDF</button>
                    </a>
                    <a href="{{ route('exportExcel')}}">
                        <button class="px-4  py-1  text-sm  rounded  text-green-600  font-semibold   border  border-red-200  hover:text-white  hover:bg-green-600  hover:border-transparent  focus:outline- none">Export EXCEL</button>
                    </a>
                    <a href="{{ route('importData')}}">
                      <button class="px-4  py-1  text-sm  rounded  text-green-600  font-semibold   border  border-red-200  hover:text-white  hover:bg-green-600  hover:border-transparent  focus:outline- none">Import EXCEL</button>
                    </a>
                    @else
                    <a href="{{ route('exportPDF') }}">
                        <button class="px-4  py-1  text-sm  rounded  text-red-600  font-semibold   border  border-red-200  hover:text-white  hover:bg-red-600  hover:border-transparent  focus:outline- none" disabled>Export PDF</button>
                    </a>
                    <a href="{{ route('exportExcel')}}">
                        <button class="px-4  py-1  text-sm  rounded  text-green-600  font-semibold   border  border-red-200  hover:text-white  hover:bg-green-600  hover:border-transparent  focus:outline- none" disabled>Export EXCEL</button>
                    </a>
                    <a href="{{ route('importData')}}">
                      <button class="px-4  py-1  text-sm  rounded  text-green-600  font-semibold   border  border-red-200  hover:text-white  hover:bg-green-600  hover:border-transparent  focus:outline- none">Import EXCEL</button>
                    </a>
                    @endif
                </div>
                
            </div>
            <div class="py-2  align-middle  inline-block  min-w-full  sm:px-4  lg:px-4">
                <div class="shadow  overflow-hidden  border-b  border-gray-200  sm:rounded-lg">
                    <table class="min-w-full  divide-y  divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6  py-3  text-centre  text-xs  font-medium  text-gray-500  uppercase  tracking-wider"> Name
                                </th>
                                <th scope="col" class="px-6  py-3  text-left  text-xs  font-medium  text-gray-500  uppercase  tracking-wider"> Student ID
                                </th>
                                <th scope="col" class="px-6  py-3  text-left  text-xs  font-medium  text-gray-500  uppercase  tracking-wider"> GPA
                                </th>
                                <th scope="col" class="px-6  py-3  text-right  text-xs  font-medium  text-gray-500  uppercase  tracking-wider"> Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white  divide-y  divide-gray-200">
                            @foreach ($student as $item)
                                <tr>
                                    <td class="px-6  py-4  text-center">
                                        <div class="flex text-centre"><input type="checkbox" name="" id="">
                                            <div class="ml-36">
                                                <div class="text-sm font-medium text-centre text-gray-900">
                                                    {{$item->name}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6  py-4  whitespace-nowrap">
                                        <div class="text-sm  text-gray-900"> {{$item->student_id}}</div>
                                    </td>
                                    <td class="px-6  py-4  whitespace-nowrap  text-sm  text-white-500">
                                        {{$item->gpa}}
                                    </td>
                                    <td class="px-6  py-4  whitespace-nowrap  text-right  text-sm  font-medium">
                                        <a href="{{route('student-data.edit', $item->id)}}">Edit</a>
                                        <form action="{{route('student-data.destroy', $item->student_id)}}" method="POST">
                                            <!--  Form  lengkap  dengan  token  csrf  untuk  method(DELETE)--> 
                                            @csrf 
                                            @method('DELETE')
                                            <!--  button  action  untuk  delete-->
                                            <button class="text-red-600  hover:text-red-900" onclick="return  confirm('You Sure  ?')"
                                                type="submit">Del</button>
                                        </form>
                                    </td>
                                </tr> 
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
     
</x-admin-layout>