<x-myapp>
    <div class="ease-soft-in-out relative h-full max-h-screen bg-gray-50 transition-all duration-200">
        <nav class="absolute z-20 flex flex-wrap items-center justify-between w-full px-6 py-2 text-white transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start" navbar-profile navbar-scroll="true">
       <div class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit">
         <nav>
           <!-- breadcrumb -->
           <ol class="flex flex-wrap pt-1 pl-2 pr-4 mr-12 bg-transparent rounded-lg sm:mr-16">
             <li class="leading-normal text-sm">
               <a class="opacity-50" href="javascript:;">Paramètres</a>
             </li>
             <li class="text-sm pl-2 capitalize leading-normal before:float-left before:pr-2 before:content-['/']" aria-current="page">Profil</li>
           </ol>
           <h6 class="mb-2 ml-2 font-bold text-white capitalize">Profil</h6>
         </nav>


       </div>
     </nav>

     <div class="w-full px-6 mx-auto">
       <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
         <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-700 to-pink-500 opacity-60"></span>
       </div>
       <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
         <div class="flex flex-wrap -mx-3">
           <div class="flex-none w-auto max-w-full px-3">
             <div class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
               <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
             </div>
           </div>
           <div class="flex-none w-auto max-w-full px-3 my-auto">
             <div class="h-full">
               <h5 class="mb-1">Roye TRAORE</h5>
               <p class="mb-0 font-semibold leading-normal text-sm">Ingénieur Test</p>
             </div>
           </div>
           <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
               <div class="relative right-0">
                 <ul class="relative flex flex-wrap p-1 list-none bg-transparent rounded-xl space-x-4" nav-pills role="tablist">
                   <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                       Mes projets
                   </button>
                 </ul>
               </div>
             </div>
         </div>
       </div>
     </div>
     <div class="w-full p-6 mx-auto">
       <div class="flex flex-wrap w-full -mx-3">
         <div class="w-full max-w-full px-3 lg-max:mt-6">
           <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
             <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
               <div class="flex flex-wrap -mx-3">
                 <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                   <h5 class="mb-0 font-bold text-lg">Informations personnelles</h5>
                 </div>
                 <div class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none">
                   <a href="javascript:;" data-target="tooltip_trigger" data-placement="top">
                     <i class="leading-normal fas fa-user-edit  text-slate-400"></i>
                   </a>
                   <div data-target="tooltip" class="hidden px-2 py-1 text-center text-white bg-black rounded-lg text-sm" role="tooltip">
                     Modifier les informations personnelles
                     <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="flex-auto p-4">
               <p class="leading-normal text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At pariatur, animi veniam et dolor aliquid quas sapiente quo unde dignissimos?</p>
               <hr class="h-px my-3 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
               <div class="flex justify-between ">
                   <div></div>
                   <ul class="flex flex-col  mb-0 rounded-lg bg-indigo-500">
                       <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">Nom : </strong> &nbsp; TRAORE </li>
                       <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Téléphone (IP) : </strong> &nbsp; 1234</li>
                       <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Fonction : </strong> &nbsp; Ingénieur Test (IT)</li>
                       <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Années d'expériences : </strong> &nbsp; 1</li>
                   </ul>
                   <ul class="">
                       <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">Prénoms :</strong> &nbsp; Roye</li>
                       <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Email : </strong> &nbsp;royetraore@sg.ci</li>
                       <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Statut : </strong> &nbsp; Interne</li>
                       <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Pôle : </strong> &nbsp; Opération</li>
                   </ul>
                   <div></div>
               </div>
             </div>
           </div>
         </div>

         <div class="flex-none w-full max-w-full px-3 mt-6">
            <form action="{{ route('profile.editskills') }}" method="post">
                @method("patch")
                @csrf
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                    <div class="flex justify-between">
                        <div>
                            <h5 class="mb-1 font-bold text-lg">Mes compétences</h5>
                            <button type="submit"> submit</button>
                            <p class="leading-normal text-sm">Auto-évaluation par domaine de compétences</p>
                        </div>
                        <div>
                            <div class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none">
                                <a href="javascript:;" data-target="tooltip_trigger" data-placement="top">
                                <i class="leading-normal fas fa-user-edit text-slate-400"></i>
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-center text-white bg-black rounded-lg text-sm" role="tooltip">
                                Enregistrer les compétences
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="flex-auto p-4 ">
                    <div class="flex flex-wrap -mx-3 ">
                        <div class="w-full">
                            <!-- Domaines pour auto-évaluation -->
                            @foreach ($domains as $domain)
                            <!-- Card Domaine 1-->
                            <div class='card p-1'>
                                <details class='transition duration-500 bg-white cursor-pointer p-8 border-solid border-2 border-gray-400 rounded-md shadow-soft-2xl'>
                                    <!-- Card title -->
                                    <summary class='flex items-center justify-space-between focus:outline-none'>
                                        <header class='flex justify-center items-center'>
                                            <svg class='w-10 h-10' viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.6066 22H11.3934" stroke="#202842" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M22 11.3934V32.6066" stroke="#202842" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <h1 class='leading-5 flex self-center text-black text-xl uppercase font-bold'>{{ $domain->libel }}</h1>
                                        </header>
                                    </summary>
                                    <div class='content ml-10 text-lg px-4 py-0 divide-y-2 '>

                                        <!-- les modules pour le domaine -->
                                        @foreach ($modules as $module)
                                        @if($module->domain_id == $domain->id)

                                        <div class="md:grid md:grid-cols-3 py-2">
                                            <div class="grid content-center">
                                                <label class="flex justify-start text-gray-600 font-medium leading-5 text-base md:text-right mb-1 md:mb-0 pr-4 w-full" >
                                                {{ $module->libel }}
                                                </label>
                                            </div>
                                            <div class="">
                                                <select name="knowledgelevel_{{ $module->id }}" class="block w-full bg-white border border-gray-400 px-4 py-1 rounded-md shadow leading-tight focus:outline-none focus:shadow-outline">
                                                    <option value="not_knowledge" @if($module->knowledgeLevels->firstWhere('id', $user_id)->pivot->level=='not_knowledge') selected @endif>Pas de connaissances</option>
                                                    <option value="knowledge" @if($module->knowledgeLevels->firstWhere('id', $user_id)->pivot->level=='knowledge') selected @endif>Connaissances</option>
                                                    <option value="master" @if($module->knowledgeLevels->firstWhere('id', $user_id)->pivot->level=='master') selected @endif>Maitrise</option>
                                                    <option value="expert" @if($module->knowledgeLevels->firstWhere('id', $user_id)->pivot->level=='expert') selected @endif>Expertise</option>
                                                </select>
                                            </div>
                                        </div>
                                        @endif

                                        @endforeach

                                    </div>
                                </details>
                            </div>
                            {{-- Fin domaine 1 --}}

                            @endforeach

                        </div>
                    </div>
                    </div>
                </div>
            </form>
        </div>

       </div>
       <footer class="pt-4">
         <div class="w-full px-6 mx-auto">
           <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
             <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
               <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                 ©
                 <script>
                   document.write(new Date().getFullYear() + ",");
                 </script>
                 made with <i class="fa fa-heart"></i> by
                 <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
                 for a better web.
               </div>
             </div>
             <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
               <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                 <li class="nav-item">
                   <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">Creative Tim</a>
                 </li>
                 <li class="nav-item">
                   <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">About Us</a>
                 </li>
                 <li class="nav-item">
                   <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">Blog</a>
                 </li>
                 <li class="nav-item">
                   <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">License</a>
                 </li>
               </ul>
             </div>
           </div>
         </div>
       </footer>
     </div>
   </div>
</x-myapp>
