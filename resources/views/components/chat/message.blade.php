<div class="h-full" id="main-message-box">
    <header class="border-b border-slate-100 dark:border-slate-700">
        <div class="flex py-6 md:px-6 px-3 items-center">
            <div class="flex-1">
                <div class="flex space-x-3 rtl:space-x-reverse">
                    <span class="text-slate-900 dark:text-white cursor-pointer text-xl self-center ltr:mr-3 rtl:ml-3 lg:hidden block start-chat">

                        <iconify-icon icon="heroicons-outline:menu-alt-1"></iconify-icon>
                    </span>
                    <div class="flex-none">
                        <div class="h-10 w-10 rounded-full relative">
                            <span class="status ring-1 ring-white inline-block h-[10px] w-[10px] rounded-full absolute -right-0 top-0 ${ user.status ===
                                bg-success-500 "></span>
                            <img src="images//users/user-1.jpg" alt="" class="w-full h-full object-cover rounded-full">
                        </div>
                    </div>
                    <div class="flex-1 text-start">
                        <span class="block text-slate-800 dark:text-slate-300 text-sm font-medium mb-[2px] truncate">
                            Kathryn Murphy
                        </span>
                        <span class="block text-slate-500 dark:text-slate-300 text-xs font-normal">
                            Active now
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex-none flex md:space-x-3 space-x-1 items-center rtl:space-x-reverse">
                <div class="msg-action-btn">

                    <iconify-icon icon="heroicons-outline:phone"></iconify-icon>
                </div>
                <div class="msg-action-btn">

                    <iconify-icon icon="heroicons-outline:video-camera"></iconify-icon>

                </div>
                <div class="msg-action-btn" id="hide-info">
                    <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                </div>
            </div>
        </div>
    </header>
    <!-- header -->
    <div class="chat-content parent-height bg-white dark:bg-slate-800">
        <div class="msgs overflow-y-auto msg-height pt-6 space-y-6">
            <div class="block md:px-6 px-4">
                <div class="flex space-x-2 items-start group rtl:space-x-reverse">
                    <div class="flex-none">
                        <div class="h-8 w-8 rounded-full">
                            <img src="images//users/user-2.jpg" alt="" class="block w-full h-full object-cover rounded-full">
                        </div>
                    </div>
                    <div class="flex-1 flex space-x-4 rtl:space-x-reverse">
                        <div>
                            <div
                                class="text-contrent p-3 bg-slate-100 dark:bg-slate-600 dark:text-slate-300 text-slate-600 text-sm font-normal mb-1 rounded-md flex-1 break-all">
                                Hey! How are you?
                            </div>
                            <span class="font-normal text-xs text-slate-400 dark:text-slate-400">12:20 pm</span>
                        </div>
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                            <div class="relative inline-block">
                                <div class="block w-full " data-headlessui-state="">
                                    <button class="block w-full" id="headlessui-menu-button-:rc:" type="button" aria-haspopup="menu" aria-expanded="false"
                                            data-headlessui-state="">
                                        <div class="label-class-custom">
                                            <div
                                                class="h-8 w-8 bg-slate-100 dark:bg-slate-600 dark:text-slate-300 text-slate-900 flex flex-col justify-center items-center text-xl rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                                     class="iconify iconify--heroicons-outline" width="1em" height="1em" viewbox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block md:px-6 px-4">
                <div class="flex space-x-2 items-start group rtl:space-x-reverse">
                    <div class="flex-none">
                        <div class="h-8 w-8 rounded-full">
                            <img src="images//users/user-2.jpg" alt="" class="block w-full h-full object-cover rounded-full">
                        </div>
                    </div>
                    <div class="flex-1 flex space-x-4 rtl:space-x-reverse">
                        <div>
                            <div
                                class="text-contrent p-3 bg-slate-100 dark:bg-slate-600 dark:text-slate-300 text-slate-600 text-sm font-normal mb-1 rounded-md flex-1 break-all">
                                Good, I will book the meeting room for you.
                            </div>
                            <span class="font-normal text-xs text-slate-400 dark:text-slate-400">12:20 pm</span>
                        </div>
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                            <div class="relative inline-block">
                                <div class="block w-full " data-headlessui-state="">
                                    <button class="block w-full" id="headlessui-menu-button-:rd:" type="button" aria-haspopup="menu" aria-expanded="false"
                                            data-headlessui-state="">
                                        <div class="label-class-custom">
                                            <div
                                                class="h-8 w-8 bg-slate-100 dark:bg-slate-600 dark:text-slate-300 text-slate-900 flex flex-col justify-center items-center text-xl rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                                     class="iconify iconify--heroicons-outline" width="1em" height="1em" viewbox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block md:px-6 px-4">
                <div class="flex space-x-2 items-start justify-end group w-full rtl:space-x-reverse">
                    <div class="no flex space-x-4 rtl:space-x-reverse">
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                            <div class="relative inline-block">
                                <div class="block w-full " data-headlessui-state="">
                                    <button class="block w-full" id="headlessui-menu-button-:re:" type="button" aria-haspopup="menu" aria-expanded="false"
                                            data-headlessui-state="">
                                        <div class="label-class-custom">
                                            <div
                                                class="h-8 w-8 bg-slate-300 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center items-center text-xl rounded-full text-slate-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                                     class="iconify iconify--heroicons-outline" width="1em" height="1em" viewbox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="break-all">
                            <div
                                class="text-contrent p-3 bg-slate-300 dark:bg-slate-900 dark:text-slate-300 text-slate-800 text-sm font-normal rounded-md flex-1 mb-1">
                                Hi, I am good, what about you?
                            </div>
                            <span class="font-normal text-xs text-slate-400">4:09 pm</span>
                        </div>
                    </div>
                    <div class="flex-none">
                        <div class="h-8 w-8 rounded-full">
                            <img src="images//users/user-2.jpg" alt="" class="block w-full h-full object-cover rounded-full">
                        </div>
                    </div>
                </div>
            </div>
            <div class="block md:px-6 px-4">
                <div class="flex space-x-2 items-start justify-end group w-full rtl:space-x-reverse">
                    <div class="no flex space-x-4 rtl:space-x-reverse">
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                            <div class="relative inline-block">
                                <div class="block w-full " data-headlessui-state="">
                                    <button class="block w-full" id="headlessui-menu-button-:rf:" type="button" aria-haspopup="menu" aria-expanded="false"
                                            data-headlessui-state="">
                                        <div class="label-class-custom">
                                            <div
                                                class="h-8 w-8 bg-slate-300 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center items-center text-xl rounded-full text-slate-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                                     class="iconify iconify--heroicons-outline" width="1em" height="1em" viewbox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="break-all">
                            <div
                                class="text-contrent p-3 bg-slate-300 dark:bg-slate-900 dark:text-slate-300 text-slate-800 text-sm font-normal rounded-md flex-1 mb-1">
                                Thanks, It will be great.
                            </div>
                            <span class="font-normal text-xs text-slate-400">4:09 pm</span>
                        </div>
                    </div>
                    <div class="flex-none">
                        <div class="h-8 w-8 rounded-full">
                            <img src="images//users/user-2.jpg" alt="" class="block w-full h-full object-cover rounded-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- message -->
    <footer class="md:px-6 px-4 sm:flex md:space-x-4 sm:space-x-2 rtl:space-x-reverse border-t md:pt-6 pt-4 border-slate-100
            dark:border-slate-700">
        <div class="flex-none sm:flex hidden md:space-x-3 space-x-1 rtl:space-x-reverse">
            <div class="h-8 w-8 cursor-pointer bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center
                    items-center text-xl rounded-full">
                <iconify-icon icon="heroicons-outline:link"></iconify-icon>
            </div>
            <div class="h-8 w-8 cursor-pointer bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center
                    items-center text-xl rounded-full">
                <iconify-icon icon="heroicons-outline:emoji-happy"></iconify-icon>
            </div>
        </div>
        <div class="flex-1 relative flex space-x-3 rtl:space-x-reverse">
            <div class="flex-1">
                <textarea placeholder="Type your message..."
                          class="focus:ring-0 focus:outline-0 block w-full bg-transparent dark:text-white resize-none"></textarea>
            </div>
            <div class="flex-none md:pr-0 pr-3">
                <button type="button" class="h-8 w-8 bg-slate-900 text-white flex flex-col justify-center items-center text-lg rounded-full">
                    <iconify-icon icon="heroicons-outline:paper-airplane" class="transform rotate-[60deg]">
                    </iconify-icon>
                </button>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</div>
