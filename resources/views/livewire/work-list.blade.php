<div>
    <div class="group mt-5 flex-row bg-white rounded-lg h-1/2 ">
        <article class="p-4 md:p-8">
            <div class="clip-path-polygon md:flex md:w-full md:h-72 md:justify-center ">
                <img class="object-cover rounded-t-lg  md:w-full md:h-72" src="https://images.unsplash.com/photo-1509966756634-9c23dd6e6815?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1024&q=1024" alt="">
            </div>
            <div class="relative  -mt-36 md:-mt-20 py-5 px-4 mx-2 flex flex-col bg-white rounded-lg shadow-2xl">
                <h5 class="text-lg font-poppins text-main_brand transition  duration-150 group-hover:text-dark_accent">{{ $project->title }}</h5>
                <div class="flex pt-1">
                    <span class="h-5 w-5 mr-1 pt-1"><svg class="stroke-current  text-dark_accent " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg></span>
                    @foreach($project->members as $member)
                    <a href="#" class="bg-primary  px-2 py-1 mx-1 rounded-lg text-white font-bold uppercase text-xs  transition duration-150 hover:bg-main_brand hover:text-white">{{ $member->name }}</a>
                    @endforeach
                </div>
                <div class="flex pt-1">
                    <span class="h-5 w-5 mr-1 pt-1"><svg class="stroke-current  text-dark_accent" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg></span>
                    @foreach($project->tags as $tag)
                    <a href="#" class="bg-info bg-opacity-80  px-2 py-1 mx-1 rounded-lg text-white font-bold uppercase text-xs transition duration-150 hover:bg-info hover:text-white">{{$tag->name }}</a>

                    @endforeach
                </div>
                <p class="text-main_brand  font-semibold py-2 ">{{ $project->description }}</p>
                <div class="my-2">
                    <a href="#" class=" text-primary font-semibold border border-main_brand py-2  px-4 rounded-md transition duration-150 hover:text-white hover:bg-main_brand">Read more</a>
                </div>

            </div>
        </article>
    </div>
    <div class=" group mt-5 flex-row bg-white rounded-lg h-1/2 ">
        <article class="p-4 md:p-8 ">
            <div class="clip-path-polygon md:flex md:w-full md:h-72 md:justify-center ">
                <img class="object-cover rounded-t-lg  md:w-full md:h-72" src="https://images.unsplash.com/photo-1509966756634-9c23dd6e6815?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1024&q=1024" alt="">
            </div>
            <div class="relative  -mt-36 md:-mt-20 py-5 px-4 mx-2 flex flex-col bg-white rounded-lg shadow-2xl">
                <h5 class="text-lg font-poppins text-main_brand transition  duration-150 group-hover:text-dark_accent">{{ $project->title }}</h5>
                <div class="flex pt-1">
                    <span class="h-5 w-5 mr-2"><img class="fill-current text-main_brand" src="{{asset('img/members.svg')}}" alt=""></span>
                    @foreach($project->members as $member)
                    <a href="#" class="bg-primary  px-2 py-1 mx-1 rounded-lg text-white font-bold uppercase text-xs transition duration-150 hover:bg-main_brand hover:text-white">{{ $member->name }}</a>
                    @endforeach
                </div>
                <div class="flex pt-1">
                    <span class="h-5 w-5 mr-1"><svg class="stroke-current  text-dark_accent" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg></span>
                    @foreach($project->tags as $tag)
                    <a href="#" class="bg-primary  px-2 py-1 mx-1 rounded-lg text-white font-bold uppercase text-xs transition duration-150 hover:bg-main_brand hover:text-white">{{$tag->name }}</a>
                    @endforeach
                </div>
                <p class="text-main_brand  font-semibold py-2 ">{{ $project->description }}</p>
                <p>Read more</p>
            </div>
        </article>
    </div>
</div>