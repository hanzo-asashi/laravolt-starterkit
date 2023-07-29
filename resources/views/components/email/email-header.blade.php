<!-- BEGIN: Email Header -->
<div class="md:flex justify-between items-center sticky bg-white dark:bg-slate-800 top-0 pt-6 pb-4 px-6 z-[3] border-b
        border-slate-100 dark:border-slate-700 rounded-t-md">
    <div class="flex items-center rtl:space-x-reverse">
        <div class="open-sidebar md:h-8 md:w-8 h-6 w-6 bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center
                items-center ltr:mr-3 rlt:ml-3 lg:hidden md:text-base text-sm rounded-full cursor-pointer">
            <iconify-icon icon="heroicons-outline:menu-alt-2"></iconify-icon>
        </div>
        <div class="max-w-[180px] flex items-center space-x-1 rtl:space-x-reverse leading-[0]">
            <div>
                <input type="checkbox" class="table-checkbox" id="email-select-all">
            </div>
            <div>
                <input type="text" id="email-search" placeholder="Search Email" class="bg-transparent text-sm font-regular text-slate-600 dark:text-slate-300 transition duration-150 rounded px-2 py-1
                            focus:outline-none">
            </div>
        </div>
    </div>
    <div class="md:block hidden">
        <div class="relative">
            <div class="dropdown relative">
                <button class="text-xl text-center block w-full " type="button" id="emailDropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                </button>
                <ul class=" dropdown-menu min-w-[160px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                            shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                    <li>
                        <a href="#" class="w-full text-slate-600 dark:text-white font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                    space-x-2 rtl:space-x-reverse inline-flex items-center dark:hover:text-white">
                            <span class=" text-lg leading-[0]">
                                <iconify-icon icon="heroicons-outline:sort-ascending"></iconify-icon>
                            </span>
                            <span>Reset Sort</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="w-full text-slate-600 dark:text-white font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                    space-x-2 rtl:space-x-reverse inline-flex items-center dark:hover:text-white">
                            <span class=" text-lg leading-[0]">
                                <iconify-icon icon="heroicons-outline:sort-ascending"></iconify-icon>
                            </span>
                            <span>Sort A-Z</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="w-full text-slate-600 dark:text-white font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                    space-x-2 rtl:space-x-reverse inline-flex items-center dark:hover:text-white">
                            <span class=" text-lg leading-[0]">
                                <iconify-icon icon="heroicons-outline:sort-descending"></iconify-icon>
                            </span>
                            <span>Sort Z-A
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Email Header -->